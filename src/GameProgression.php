<?php

namespace Brain\Progression\GameProgression;

use function cli\line;
use function cli\prompt;

function gameProgression()
{

    line("Welcome to Brain Games!
    Find the greatest common divisor of given numbers.\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);

    $min = 0;
    $max = 9;
    $length = $max;
    $secretNubmer = rand($min, $max);
    $startNumber = rand(1, 100);
    $stepNunber = rand(1, 10);
    $arrNumbers = [];

    $ownAnswer = null;
    $correctAnswer = null;

    for ($i = 0; $i <= $length; $i++) {
        $startNumber += $stepNunber;
        $arrNumbers[] = $startNumber;
    }
    
    $correctAnswer = $arrNumbers[$secretNubmer];
    $arrNumbers[$secretNubmer] = "..";
    $strNumbers = implode(' ', $arrNumbers);

    line("Question: $ $strNumbers");
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
