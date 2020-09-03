<?php

namespace Brain\Games\Games\GameProgression;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "What number is missing in the progression?";

function createNumbers($length, $startNumber, $stepNumber)
{
    $numbers = [];
    for ($j = 0; $j <= $length; $j++) {
        $startNumber += $stepNumber;
        $numbers[] = $startNumber;
    }

    return $numbers;
}

function run()
{

    $getData = function () {
        $min = 0;
        $max = 9;
        $length = $max;
        $secretNumber = rand($min, $max);
        $startNumber = rand(1, 100);
        $stepNumber = rand(1, 10);
 
        $numbers = createNumbers($length, $startNumber, $stepNumber);
        $correctAnswer = $numbers[$secretNumber];
        $numbers[$secretNumber] = "..";
        $question = implode(' ', $numbers);

        return [$question, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
