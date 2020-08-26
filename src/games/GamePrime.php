<?php

namespace Brain\Prime\GamePrime;

use function cli\line;
use function cli\prompt;

function gamePrime($quantityQuestion = 3)
{

    line("Welcome to Brain Games!
    Answer 'yes' if given number is prime. Otherwise answer 'no'.\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);

    for ($i = 0; $i < $quantityQuestion; $i++) {
        $min = 1;
        $max = 100;
        $randomNumber = rand($min, $max);

        $ownAnswer = null;
        $correctAnswer = 'yes';
   
        if ($randomNumber == 1) {
            $correctAnswer = 'no';
        }

        for ($j = 2; $j * $j <= $randomNumber; $j++) {
            if ($randomNumber % $j == 0) {
                $correctAnswer = 'no';
            }
        }
    
        line("Question: $ $randomNumber");
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
