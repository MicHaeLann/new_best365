<?php

/*
 * This file is part of the PHP CS utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS\Tests\Tokenizer;

use Symfony\CS\Tokenizer\Tokens;

/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * @author Max Voloshin <voloshin.dp@gmail.com>
 */
class TokensTest extends \PHPUnit_Framework_TestCase
{
    public function testGetClassyElements()
    {
        $source = <<<'PHP'
<?php
class Foo
{
    public function bar()
    {
        $a = 5;

        return " ({$a})";
    }
    public function baz($data)
    {
    }
}
PHP;

        $tokens = Tokens::fromCode($source);
        $elements = $tokens->getClassyElements();

        $this->assertCount(2, $elements);

        foreach ($elements as $element) {
            $this->assertSame('method', $element['type']);
        }
    }

    public function testReadFromCacheAfterClearing()
    {
        $code = '<?php echo 1;';
        $tokens = Tokens::fromCode($code);

        $countBefore = $tokens->count();

        for ($i = 0; $i < $countBefore; ++$i) {
            $tokens[$i]->clear();
        }

        $tokens = Tokens::fromCode($code);

        $this->assertSame($countBefore, $tokens->count());
    }

    /**
     * @dataProvider provideIsLambdaCases
     */
    public function testIsLambda($source, array $expected)
    {
        $tokens = Tokens::fromCode($source);

        foreach ($expected as $index => $expected) {
            $this->assertSame($expected, $tokens->isLambda($index));
        }
    }

    public function provideIsLambdaCases()
    {
        return array(
            array(
                '<?php function foo () {}',
                array(1 => false),
            ),
            array(
                '<?php function /** foo */ foo () {}',
                array(1 => false),
            ),
            array(
                '<?php $foo = function () {}',
                array(5 => true),
            ),
            array(
                '<?php $foo = function /** foo */ () {}',
                array(5 => true),
            ),
            array(
                '<?php
preg_replace_callback(
    "/(^|[a-z])/",
    function (array $matches) {
        return "a";
    },
    $string
);',
                array(7 => true),
            ),
            array(
                '<?php $foo = function &() {}',
                array(5 => true),
            ),
        );
    }
}
