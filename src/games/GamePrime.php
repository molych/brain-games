<?php

namespace Brain\Games\Games\GamePrime;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

function run()
{
    $getData = function () {
        $min = 1;
        $max = 100;
        $randomNumber = rand($min, $max);

        $correctAnswer = 'yes';
   
        if ($randomNumber == 1) {
            $correctAnswer = 'no';
        }

        for ($j = 2; $j * $j <= $randomNumber; $j++) {
            if ($randomNumber % $j == 0) {
                $correctAnswer = 'no';
            }
        }
    
        return [$randomNumber, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
