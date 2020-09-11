<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "What number is missing in the progression?";

function makeProgression($length, $startCount, $stepCount)
{
    $numbers = [];
    for ($j = 0; $j <= $length; $j++) {
        if ($j === 0) {
            $numbers[] = $startCount;
            continue;
        } else {
            $startCount += $stepCount;
            $numbers[] = $startCount;
        }
    }

    return $numbers;
}

function run()
{

    $getData = function () {
        $min = 0;
        $max = 9;
        $length = $max;
        $secretKey = rand($min, $max);
        $startCount = rand(1, 100);
        $stepCount = rand(1, 10);
 
        $numbers = makeProgression($length, $startCount, $stepCount);
        $correctAnswer = (string) $numbers[$secretKey];
        $numbers[$secretKey] = "..";
        $question = implode(' ', $numbers);

        return [$question, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
