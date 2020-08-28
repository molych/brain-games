<?php

namespace Brain\Games\GameFlow;

use function cli\line;
use function cli\prompt;
use function Brain\Games\GameCalc\run as gameCalc;
use function Brain\Games\GameEven\run as gameBrainEver;
use function Brain\Games\GameGcd\run as gameGcd;
use function Brain\Games\GamePrime\run as gamePrime;
use function Brain\Games\GameProgression\run as gameProgression;

function startGame()
{
    $arrGames = ['brain-ever', 'brain-calc', 'brain-gcd', 'brain-prime', 'brain-progression'];
    $strGames = implode(' ', $arrGames);
    line("Welcome to Brain Games!");
    line($strGames);
    $nameGame = prompt("select game");

    if (!in_array($nameGame, $arrGames)) {
        return line('Sorry this game is missing');
    }

    switch ($nameGame) {
        case 'brain-ever':
            gameBrainEver();
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
    }
}
