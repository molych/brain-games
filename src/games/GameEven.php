<?php

namespace Brain\Games\GameEven;

use function Brain\Games\Engine\startGame;

const DESCRIPTION = "Answer 'yes' if the number is even, otherwise answer 'no'.";

function run()
{
    $getData = function () {
        $min = 1;
        $max = 99;
        $randomNumber = rand($min, $max);

        $yes = 'yes';
        $no  = 'no';

        if ($randomNumber & 1) {
            $correctAnswer = $no;
        } else {
            $correctAnswer = $yes;
        }

        return  [$randomNumber, $correctAnswer];
    };
    startGame(DESCRIPTION, $getData);
}
