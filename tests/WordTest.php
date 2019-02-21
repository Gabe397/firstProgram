<?php
declare(strict_types=1);
use Word;
use PHPUnit\Framework\TestCase;

final class WordTest extends TestCase
{
    public function testCanBeCreatedWord(): void
    {
        $thing = new Word();
        $this->assertInstanceOf(Word::class,$thing);
    }

    public function testWordHasProperty(): void
    {

    }
}
