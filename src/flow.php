<?php

namespace Brain\Game\Flow;

use function cli\line;
use function cli\prompt;
use function Brain\Calc\GameCalc\gameCalc;
use function Brain\Ever\GameBrain\gameBrainEver;
use function Brain\Gcd\GameGcd\gameGcd;
use function Brain\Prime\GamePrime\gamePrime;
use function Brain\Progression\GameProgression\gameProgression;

function startGame()
{
    $arrGames = ['brain-ever', 'brain-calc', 'brain-gcd', 'brain-prime', 'brain-progression'];
    $strGames = implode(' ', $arrGames);
    line("Welcome to Brain Games!");
    line($strGames);
    $nameGame = prompt("Check game");

    $quantityQuestion = 3;

    if (!in_array($nameGame, $arrGames)) {
        return line('Sorry this game is ...');
    }

    switch ($nameGame) {
        case 'brain-ever':
            gameBrainEver($quantityQuestion);
        break;
        case 'brain-calc':
            gameCalc($quantityQuestion);
        break;
        case 'brain-gcd':
            gameGcd($quantityQuestion);
        break;
        case 'brain-prime':
            gamePrime();
        break;
        case 'brain-progression':
            gameProgression($quantityQuestion);
        break;

    }
  
}
