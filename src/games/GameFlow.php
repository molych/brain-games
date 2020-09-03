<?php

namespace Brain\Games\Games\GameFlow;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Games\GameCalc\run as gameCalc;
use function Brain\Games\Games\GameEven\run as gameBrainEven;
use function Brain\Games\Games\GameGcd\run as gameGcd;
use function Brain\Games\Games\GamePrime\run as gamePrime;
use function Brain\Games\Games\GameProgression\run as gameProgression;

function startGame()
{
    $arrGames = ['brain-even', 'brain-calc', 'brain-gcd', 'brain-prime', 'brain-progression'];
    $strGames = implode(' ', $arrGames);
    line($strGames);
    $nameGame = prompt("select game");

    switch ($nameGame) {
        case 'brain-even':
            gameBrainEven();
            break;
        case 'brain-calc':
            gameCalc();
            break;
        case 'brain-gcd':
            gameGcd();
            break;
        case 'brain-prime':
            gamePrime();
            break;
        case 'brain-progression':
            gameProgression();
            break;
        default:
            throw new \Exception("Unknown name game: $nameGame");
    }
}
