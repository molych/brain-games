<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "Answer 'yes' if the number is even, otherwise answer 'no'.";

function isEven($num)
{
    return ($num & 1) ? false : true;
}

function run()
{
    $getData = function () {
        $min = 1;
        $max = 99;
        $question = rand($min, $max);
        
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return  [$question, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
