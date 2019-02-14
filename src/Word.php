<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 2/9/2019
 * Time: 12:26 PM
 */


final class Word
{
    var $word;

    public function __construct(string $word)
    {
        $this->word = $word;
    }

    public function hello(){
        return "hello";
    }

    public function wordProp()
    {
        $word = $this->word;
        $wordLen = strlen($word);

        if($wordLen%2 == 0)
            return print "even";
        else
            return print "odd";
    }

}

function greet($par){
    return new Word($par);
}

$bar = greet("hello")->wordProp();


