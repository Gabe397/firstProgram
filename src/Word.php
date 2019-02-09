<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 2/9/2019
 * Time: 12:26 PM
 */
declare(strict_types=1);

class Word
{
    private $word;

    private function __construct(string $word)
    {
        $this->ensureIsValidWord($word);

        $this->word = $word;
    }

    public static function fromString(string $word): self
    {
        return new self($word);
    }

    public function _toString(): string
    {
        return $this->word;
    }

  


    private function ensureIsValidWord(string $word): void
    {
        /*??*/
    }



}