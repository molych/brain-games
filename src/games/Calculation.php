<?php

namespace Brain\Games\Games\Calculation;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "What is the result of the expression?";

function calculate($operation, $num1, $num2)
{
    switch ($operation) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        default:
            throw new \Exception("Unknown operation: $operation");
    }
    return $result;
}

function run()
{
    $getData = function () {
        $min = 1;
        $max = 10;
        $firstOperand = rand($min, $max);
        $seconOperand = rand($min, $max);

        $mathematicalSigns = ["+","-","*"];
        $index = array_rand($mathematicalSigns, 1);
        $operation =  $mathematicalSigns[$index];
        $question = "$firstOperand $operation $seconOperand";
        $correctAnswer = calculate($operation, $firstOperand, $seconOperand);
        
        return [$question, $correctAnswer];
    };

    startGame(DESCRIPTION, $getData);
}
