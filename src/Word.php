<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 2/9/2019
 * Time: 12:26 PM
 */

class Word
{
    private $word;

    private function __construct(string $word)
    {
        $this->ensureIsValidWord($word);

        $this->word = $word;
    }


}