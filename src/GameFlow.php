<?php

namespace Brain\Games\GameFlow;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Games\Calculation\run as Calc;
use function Brain\Games\Games\Even\run as Even;
use function Brain\Games\Games\Gcd\run as Gcd;
use function Brain\Games\Games\Prime\run as Prime;
use function Brain\Games\Games\Progression\run as Progression;

function startGame()
{
    $Games = ['brain-even', 'brain-calc', 'brain-gcd', 'brain-prime', 'brain-progression'];
    $listGames = implode(' ', $Games);
    line($listGames);
    $nameGame = prompt("select game");

    switch ($nameGame) {
        case 'brain-even':
            Even();
            break;
        case 'brain-calc':
            Calc();
            break;
        case 'brain-gcd':
            Gcd();
            break;
        case 'brain-prime':
            Prime();
            break;
        case 'brain-progression':
            Progression();
            break;
        default:
            throw new \Exception("Unknown name game: $nameGame");
    }
}
