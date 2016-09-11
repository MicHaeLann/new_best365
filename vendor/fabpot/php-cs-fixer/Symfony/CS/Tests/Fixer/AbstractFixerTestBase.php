<?php

/*
 * This file is part of the PHP CS utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS\Tests\Fixer;

/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
abstract class AbstractFixerTestBase extends \PHPUnit_Framework_TestCase
{
    protected function getFixer()
    {
        $fixerName = 'Symfony\CS\Fixer'.substr(get_called_class(), strlen(__NAMESPACE__), -strlen('Test'));

        return new $fixerName();
    }

    protected function getTestFile($filename = __FILE__)
    {
        static $files = array();

        if (!isset($files[$filename])) {
            $files[$filename] = new \SplFileInfo($filename);
        }

        return $files[$filename];
    }

    protected function makeTest($expected, $input = null, \SplFileInfo $file = null)
    {
        $fixer = $this->getFixer();
        $file = $file ?: $this->getTestFile();

        if (null !== $input) {
            $this->assertSame($expected, $fixer->fix($file, $input));
        }

        $this->assertSame($expected, $fixer->fix($file, $expected));
    }
}
