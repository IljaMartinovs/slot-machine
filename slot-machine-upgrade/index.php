<?php

require_once "display.php";
require_once "Check.php";
require_once "Game.php";

$game = new Game(70, 2);
$prizes = ['$' => 10, 'A' => 5, 'K' => 4, 'J' => 3, 'Q' => 2];
$symbols = ['$', 'A', 'K', 'J', 'Q'];
$lines = [3 => 1, 4 => 2, 5 => 3];
$winningCombos = [
    //horizontal
    [[0,0], [0,1], [0,2], [0,3], [0,4]],
    [[1,0], [1,1], [1,2], [1,3], [1,4]],
    [[2,0], [2,1], [2,2], [2,3], [2,4]],
    //V /\
    [[0,0], [1,1], [2,2], [1,3], [0,4]],
    [[2,0], [1,1], [0,2], [1,3], [2,4]],
];

do  {
    $play = readline("Want to spin the slots for {$game->getCostPerSpin()}? 'enter' or 'n': ");
    $game->decrement();
    gameBoard($symbols);
    $counter = 0;
    $winResults []= new Check($winningCombos,$prizes,$lines,0);
    $game->setPlayerMoney($winResults[$counter]->checkWinnings($game));
    echo "You won {$winResults[$counter]->getWinnings()}$\n";
    echo "You have {$game->getPlayerMoney()}$ left\n";
    $winResults[$counter]->setWinning(0);
    $counter++;
} while(($game->getPlayerMoney()!=0) && $play !== 'n');
