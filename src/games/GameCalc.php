<?php

namespace Brain\Calc\GameCalc;

use function cli\line;
use function cli\prompt;

function gameCalc($quantityQuestion = 3)
{

    line("Welcome to Brain Games!
    What is the result of the expression?\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);

    
    for ($i = 0; $i < $quantityQuestion; $i++) {
        $min = 1;
        $max = 10;
        $randomNubmer1 = rand($min, $max);
        $randomNubmer2 = rand($min, $max);

        $correctAnswer = null;
        $ownAnswer = null;
        $operation = ["+","-","*"];

        switch ($operation[$i]) {
            case "+":
                $operation = '+';
                $correctAnswer = $randomNubmer1 + $randomNubmer2;
                break;
            case "-":
                $operation = "-";
                $correctAnswer = $randomNubmer1 - $randomNubmer2;
                break;
            case "*":
                $operation = "*";
                $correctAnswer = $randomNubmer1 * $randomNubmer2;
                break;
            default:
                break;
        }
      
        line("Question: $randomNubmer1 $operation $randomNubmer2");
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
