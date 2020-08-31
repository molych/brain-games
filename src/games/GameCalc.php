<?php

namespace Brain\Games\Games\GameCalc;

use Error;
use Exception;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "What is the result of the expression?";

function run()
{
    $getData = function () {
        $min = 1;
        $max = 10;
        $randomNubmer1 = rand($min, $max);
        $randomNubmer2 = rand($min, $max);

        $mathematicalSigns = ["+","-","*"];
        $index = array_rand($mathematicalSigns, 1);
        $operation =  $mathematicalSigns[$index];
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
                throw new Exception("Unknown operation: $operation");
        }
        return [$question, $correctAnswer];
    };

    startGame(DESCRIPTION, $getData);
}
