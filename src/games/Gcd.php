<?php

namespace Brain\Games\Games\Gcd;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function findGcd($num1, $num2)
{
    while ($num1 != $num2) {
        if ($num1 > $num2) {
            $num1 -= $num2;
        } else {
            $num2 -= $num1;
        }
        $gcm = $num1;
    }
    return $gcm;
}

function run()
{
    $getData = function () {
        $min = 1;
        $max = 99;
        $firstOperand = rand($min, $max);
        $secondOperand = rand($min, $max);

        $correctAnswer = findGcd($firstOperand, $secondOperand);
        $question = "$firstOperand, $secondOperand";

        return [$question, $correctAnswer];
    };

    startGame(DESCRIPTION, $getData);
}
