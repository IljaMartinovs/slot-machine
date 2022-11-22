<?php

function gameBoard(array $symbols)
{
    $rows = 3;
    $columns = 5;
    $GLOBALS = [];
    for ($row = 0; $row < $rows; $row++) {
        for ($i = 0; $i < $columns; $i++) {
            $GLOBALS[$row][] = $symbols[array_rand($symbols)];
        }
    }
    foreach ($GLOBALS as $row) {
        echo implode(' | ', $row) . PHP_EOL;
    }
}