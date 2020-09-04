<?php

namespace Brain\Games\Games\Even;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "Answer 'yes' if the number is even, otherwise answer 'no'.";

function isEven($num)
{
    if ($num & 1) {
        return false;
    } else {
        return true;
    }
}

function run()
{
    $getData = function () {
        $min = 1;
        $max = 99;
        $randomNumber = rand($min, $max);
        
        $result = isEven($randomNumber);

        $question = $randomNumber;
        $correctAnswer = $result ? 'yes' : 'no';

        return  [$question, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
