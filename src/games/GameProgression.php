<?php

namespace Brain\Games\GameProgression;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "What number is missing in the progression?\n";

function run()
{

    $getData = function () {
        $min = 0;
        $max = 9;
        $length = $max;
        $secretNubmer = rand($min, $max);
        $startNumber = rand(1, 100);
        $stepNunber = rand(1, 10);
        $arrNumbers = [];

        for ($j = 0; $j <= $length; $j++) {
            $startNumber += $stepNunber;
            $arrNumbers[] = $startNumber;
        }
    
        $correctAnswer = $arrNumbers[$secretNubmer];
        $arrNumbers[$secretNubmer] = "..";
        $question = implode(' ', $arrNumbers);

        return [$question, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
