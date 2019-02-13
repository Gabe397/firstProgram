<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 2/9/2019
 * Time: 12:25 PM
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCases;
class WordTest
{
    public function testCanBeCreatedFromValidWord(): void
    {
        $this->assertInstanceOf(
            Word::class,
            Word::fromString('')
        );
    }

    public function testCannotBeCreatedFromValidWord(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Word::fromString('invalid');
    }


}