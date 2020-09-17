<?php

namespace Brain\Games\Games\Progression;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "What number is missing in the progression?";

function makeProgression($length, $startCount, $stepCount)
{
    $numbers = [];
    for ($j = 0; $j < $length; $j++) {
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
        $secretMemberIndex = rand($min, $max);
        $firstMember = rand(1, 100);
        $step = rand(1, 10);
 
        $numbers = makeProgression($length, $firstMember, $step);
        $correctAnswer = (string) $numbers[$secretMemberIndex];
        $numbers[$secretMemberIndex] = "..";
        $question = implode(' ', $numbers);

        return [$question, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
