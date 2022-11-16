<?php

require_once "Game.php";

class Check
{
    private array $winningCombos;
    private array $prizes;
    private array $lines;
    private int $winnings;

    public function __construct(array $winningCombos, array $prizes, array $lines, int $winnings)
    {
        $this->winningCombos = $winningCombos;
        $this->prizes = $prizes;
        $this->lines = $lines;
        $this->winnings = $winnings;
    }

    public function setWinning(int $winnings): void
    {
        $this->winnings = 0;
    }

    public function getWinnings(): int
    {
        return $this->winnings;
    }

    public function checkWinnings(Game $game): int
    {
        foreach ($this->winningCombos as $combination) {
            $counter = 0;
            $symbol = "";
            foreach ($combination as $position) {
                [$x, $y] = $position;
                if (!$symbol) {
                    $symbol = $GLOBALS[$x][$y];
                }
                if ($symbol != $GLOBALS[$x][$y]) {
                    break;
                }
                $counter++;
            }
            if ($counter >= 3) {
                $this->winnings = $this->prizes[$symbol] * $this->lines[$counter];
                return $this->prizes[$symbol] * $this->lines[$counter];
            }
        }
        return 0;
    }
}