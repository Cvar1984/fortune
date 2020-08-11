<?php

namespace Cvar1984\Fortune\TestCase;

require dirname(dirname(dirname(__DIR__))) . '/vendor/autoload.php';

/**
 * Class: FortuneTest
 *
 * @see \PHPUnit\Framework\TestCase
 */
class FortuneTest extends \PHPUnit\Framework\TestCase
{
    /**
     * testCanBeUsedAsString
     *
     */
    public function testCanBeUsedAsString()
    {
        $this->assertNotEmpty(\Cvar1984\Fortune\Fortune::make());
    }
}
