<?php

namespace Brain\Games\Games\GamePrime;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

function isPrime($num)
{
    if ($num == 1) {
        return false;
    }

    for ($j = 2; $j * $j <= $num; $j++) {
        if ($num % $j == 0) {
            return false;
        }
    }
    return true;
}

function run()
{
    $getData = function () {
        $min = 1;
        $max = 100;
        $randomNumber = rand($min, $max);

        $result = isPrime($randomNumber);

        $question = $randomNumber;
        $correctAnswer = $result ? 'yes' : 'no';
   
        return [$question, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
