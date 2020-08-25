<?php

namespace Brain\Ever\Game;

use function cli\line;
use function cli\prompt;

function game()
{

    line("Welcome to Brain Games!
    Answer 'yes' if the number is even, otherwise answer 'no'.\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);

    $quantityQuestion = 3;
    for ($i = 0; $i < $quantityQuestion; $i++) {
        $min = 1;
        $max = 99;
        $randomNubmer = rand($min, $max);

        $yes = 'yes';
        $no  = 'no';

        $correctAnswer = null;
        $ownAnswer = null;

        line("Question: $randomNubmer");
        $ownAnswer = prompt("Your answer");

        if ($randomNubmer & 1) {
            $correctAnswer = $no;
        } else {
            $correctAnswer = $yes;
        }

        $incorrectLineAnswer = "$ownAnswer is wrong answer ;(. Correct answer was $correctAnswer.
        Let's try again, $name!";
        
        if ($ownAnswer === $yes && $randomNubmer % 2 == 0 || $ownAnswer === $no &&  $randomNubmer & 1) {
            line("Correct\n");
        } else {
            return line($incorrectLineAnswer);
        }
    }

    return  line("Congratulations, $name");
}
