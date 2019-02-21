<?php
/**
 * Created by PhpStorm.
 * User: gabe3
 * Date: 2/9/2019
 * Time: 12:26 PM
 */
declare(strict_types=1);

final class Word
{

    public $word;

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





/*question about method not found
$bar = new Word("hello)
$bar.wordProp(); would equal method not found
VVV Solution I found




function greet($par){
    return new Word($par);
}

$bar = greet("help")->wordProp();
*/