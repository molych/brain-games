<?php

namespace Brain\Prime\GamePrime;

use function cli\line;
use function cli\prompt;

function gamePrime()
{

    line("Welcome to Brain Games!
    Find the greatest common divisor of given numbers.\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);

    $min = 1;
    $max = 100;
    $randomNumber = rand($min, $max);

    $ownAnswer = null;
    $correctAnswer = 'yes';
   
    if ($randomNumber == 1) {
        $correctAnswer = 'no';
    }

    for ($i = 2; $i * $i <= $randomNumber; $i++) {
        if ($randomNumber % $i == 0) {
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
    
    return  line("Congratulations, $name");
}
