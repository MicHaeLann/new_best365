<?php

/*
 * This file is part of the PHP CS utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS\Fixer\Symfony;

use Symfony\CS\AbstractFixer;
use Symfony\CS\Tokenizer\Tokens;

/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
class UnusedUseFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function fix(\SplFileInfo $file, $content)
    {
        $tokens = Tokens::fromCode($content);

        $namespaceDeclarations = $this->getNamespaceDeclarations($tokens);
        $useDeclarationsIndexes = $tokens->getImportUseIndexes();
        $useDeclarations = $this->getNamespaceUseDeclarations($tokens, $useDeclarationsIndexes);
        $contentWithoutUseDeclarations = $this->generateCodeWithoutPartials($tokens, array_merge($namespaceDeclarations, $useDeclarations));
        $useUsages = $this->detectUseUsages($contentWithoutUseDeclarations, $useDeclarations);

        $this->removeUnusedUseDeclarations($tokens, $useDeclarations, $useUsages);
        $this->removeUsesInSameNamespace($tokens, $useDeclarations, $namespaceDeclarations);

        return $tokens->generateCode();
    }

    private function detectUseUsages($content, array $useDeclarations)
    {
        $usages = array();

        foreach ($useDeclarations as $shortName => $useDeclaration) {
            $usages[$shortName] = (bool) preg_match('/\b'.preg_quote($shortName).'\b/i', $content);
        }

        return $usages;
    }

    private function generateCodeWithoutPartials(Tokens $tokens, array $partials)
    {
        $content = '';

        foreach ($tokens as $index => $token) {
            $allowToAppend = true;

            foreach ($partials as $partial) {
                if ($partial['start'] <= $index && $index <= $partial['end']) {
                    $allowToAppend = false;
                    break;
                }
            }

            if ($allowToAppend) {
                $content .= $token->getContent();
            }
        }

        return $content;
    }

    private function getNamespaceDeclarations(Tokens $tokens)
    {
        $namespaces = array();

        foreach ($tokens as $index => $token) {
            if (T_NAMESPACE !== $token->getId()) {
                continue;
            }

            $declarationEndIndex = $tokens->getNextTokenOfKind($index, array(';', '{'));

            $namespaces[] = array(
                'end'   => $declarationEndIndex,
                'name'  => trim($tokens->generatePartialCode($index + 1, $declarationEndIndex - 1)),
                'start' => $index,
            );
        }

        return $namespaces;
    }

    private function getNamespaceUseDeclarations(Tokens $tokens, array $useIndexes)
    {
        $uses = array();

        foreach ($useIndexes as $index) {
            $declarationEndIndex = $tokens->getNextTokenOfKind($index, array(';'));
            $declarationContent = $tokens->generatePartialCode($index + 1, $declarationEndIndex - 1);

            // ignore multiple use statements like: `use BarB, BarC as C, BarD;`
            // that should be split into few separate statements
            if (false !== strpos($declarationContent, ',')) {
                continue;
            }

            $declarationParts = preg_split('/\s+as\s+/i', $declarationContent);

            if (1 === count($declarationParts)) {
                $fullName = $declarationContent;
                $declarationParts = explode('\\', $fullName);
                $shortName = end($declarationParts);
                $aliased = false;
            } else {
                $fullName = $declarationParts[0];
                $shortName = $declarationParts[1];
                $declarationParts = explode('\\', $fullName);
                $aliased = $shortName !== end($declarationParts);
            }

            $shortName = trim($shortName);

            $uses[$shortName] = array(
                'aliased'   => $aliased,
                'end'       => $declarationEndIndex,
                'fullName'  => trim($fullName),
                'shortName' => $shortName,
                'start'     => $index,
            );
        }

        return $uses;
    }

    private function removeUnusedUseDeclarations(Tokens $tokens, array $useDeclarations, array $useUsages)
    {
        foreach ($useDeclarations as $shortName => $useDeclaration) {
            if (!$useUsages[$shortName]) {
                $this->removeUseDeclaration($tokens, $useDeclaration);
            }
        }
    }

    private function removeUseDeclaration(Tokens $tokens, array $useDeclaration)
    {
        for ($index = $useDeclaration['start']; $index <= $useDeclaration['end']; ++$index) {
            $tokens[$index]->clear();
        }

        $token = $tokens[$useDeclaration['start'] - 1];

        if ($token->isWhitespace()) {
            $token->setContent(rtrim($token->getContent(), " \t"));
        }

        if (!isset($tokens[$useDeclaration['end'] + 1])) {
            return;
        }

        $token = $tokens[$useDeclaration['end'] + 1];

        if ($token->isWhitespace()) {
            $content = ltrim($token->getContent(), " \t");

            if ($content && "\n" === $content[0]) {
                $content = substr($content, 1);
            }

            $token->setContent($content);
        }
    }

    private function removeUsesInSameNamespace(Tokens $tokens, array $useDeclarations, array $namespaceDeclarations)
    {
        if (empty($namespaceDeclarations)) {
            return;
        }

        // safeguard for files with multiple namespaces to avoid breaking them until we support this case
        if (count($namespaceDeclarations) > 1) {
            return;
        }

        $namespace = $namespaceDeclarations[0]['name'];
        $nsLength = strlen($namespace.'\\');

        foreach ($useDeclarations as $useDeclaration) {
            if ($useDeclaration['aliased']) {
                continue;
            }

            if (0 !== strpos($useDeclaration['fullName'], $namespace.'\\')) {
                continue;
            }

            $partName = substr($useDeclaration['fullName'], $nsLength);

            if (false === strpos($partName, '\\')) {
                $this->removeUseDeclaration($tokens, $useDeclaration);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        // should be run after the MultipleUseFixer
        return -10;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(\SplFileInfo $file)
    {
        // some fixtures are auto-generated by Symfony and may contain unused use statements
        if (false !== strpos($file, DIRECTORY_SEPARATOR.'Fixtures'.DIRECTORY_SEPARATOR)) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return 'Unused use statements must be removed.';
    }
}
