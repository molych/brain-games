<?php

namespace Brain\Games\GameGcd;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function run()
{
    $getData = function () {
        $min = 1;
        $max = 99;
        $randomNubmer1 = rand($min, $max);
        $randomNubmer2 = rand($min, $max);

        $firstOperand = $randomNubmer1;
        $secondOperand = $randomNubmer2;
     
        while ($randomNubmer1 != $randomNubmer2) {
            if ($randomNubmer1 > $randomNubmer2) {
                $randomNubmer1 -= $randomNubmer2;
            } else {
                $randomNubmer2 -= $randomNubmer1;
            }
            $correctAnswer = $randomNubmer1;
        }

        $question = "$firstOperand, $secondOperand";

        return [$question, $correctAnswer];
    };

    startGame(DESCRIPTION, $getData);
}
