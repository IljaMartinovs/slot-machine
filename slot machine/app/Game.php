<?php

namespace App;

class Game
{
    private int $playerMoney;
    private int $costPerSpin;

    public function __construct(int $playerMoney, int $costPerSpin)
    {
        $this->playerMoney = $playerMoney;
        $this->costPerSpin = $costPerSpin;
    }

    public function getPlayerMoney(): int
    {
        return $this->playerMoney;
    }

    public function setPlayerMoney(int $win): void
    {
        $this->playerMoney += $win;
    }

    public function getCostPerSpin(): int
    {
        return $this->costPerSpin;
    }

    public function decrement(): void
    {
        $this->playerMoney -= $this->costPerSpin;
    }

}