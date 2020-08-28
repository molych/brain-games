<?php

namespace Brain\Games\GameCalc;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "What is the result of the expression?\n";

function run()
{
    $getData = function () {
        $min = 1;
        $max = 10;
        $randomNubmer1 = rand($min, $max);
        $randomNubmer2 = rand($min, $max);

        $operationArr = ["+","-","*"];
        $operation = array_rand($operationArr, 1);
        $question = "$randomNubmer1 $operation $randomNubmer2";

        switch ($operation) {
            case "+":
                $correctAnswer = $randomNubmer1 + $randomNubmer2;
                break;
            case "-":
                $correctAnswer = $randomNubmer1 - $randomNubmer2;
                break;
            case "*":
                $correctAnswer = $randomNubmer1 * $randomNubmer2;
                break;
            default:
                break;
        }
        return [$question, $correctAnswer];
    };

    startGame(DESCRIPTION, $getData);
}
