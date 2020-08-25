<?php

namespace Brain\Gcd\GameGcd;

use function cli\line;
use function cli\prompt;

function gameGcd()
{

    line("Welcome to Brain Games!
    Find the greatest common divisor of given numbers.\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);

    $quantityQuestion = 3;
    for ($i = 0; $i < $quantityQuestion; $i++) {
        $min = 1;
        $max = 99;
        $randomNubmer1 = rand($min, $max);
        $randomNubmer2 = rand($min, $max);

        $firstOperand = $randomNubmer1;
        $secondOperand = $randomNubmer2;

        $ownAnswer = null;
        $correctAnswer = null;
     

        while ($randomNubmer1 != $randomNubmer2) {
            if ($randomNubmer1 > $randomNubmer2) {
                $randomNubmer1 -= $randomNubmer2;
            } else {
                $randomNubmer2 -= $randomNubmer1;
            }
            $correctAnswer = $randomNubmer1;
        }


        line("Question: $ $firstOperand, $secondOperand");
        $ownAnswer = prompt("Your answer");

        $incorrectLineAnswer = "$ownAnswer is wrong answer ;(. Correct answer was $correctAnswer.
        Let's try again, $name!";
        
        if ($ownAnswer == $correctAnswer) {
            line("Correct\n");
        } else {
            return line($incorrectLineAnswer);
        }
    }

    return  line("Congratulations, $name");
}
