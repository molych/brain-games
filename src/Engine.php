<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

const QUANTITY_ROUNDS = 3;

function startGame($description, $getData)
{

    line("Welcome to Brain Games!");
    line($description);
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);

    for ($i = 0; $i < QUANTITY_ROUNDS; $i++) {
        [$question, $correctAnswer] = $getData();
        line("Question: $question");
        $ownAnswer = prompt("Your answer");
        $incorrectLineAnswer = "$ownAnswer is wrong answer ;(. Correct answer was $correctAnswer.
        Let's try again, $name!";
        
        if ($ownAnswer === $correctAnswer) {
            line("Correct\n");
        } else {
            return line($incorrectLineAnswer);
        }
    }

    return  line("Congratulations, $name");
}
