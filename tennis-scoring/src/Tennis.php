<?php

namespace Acme;

class Tennis
{
    public $player1;
    public $player2;

    protected $lookup = [
        'Love',
        'Fifteen',
        'Thirty',
        'Forty'
    ];

    public function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score()
    {
        if ($this->hasAWinner()) {
            return 'Win for ' . $this->getLeader()->name;
        }

        if ($this->hasTheAdvantage()) {
            return 'Advantage for ' . $this->getLeader()->name;
        }

        if ($this->inDeuce()) {
            return 'Deuce';
        }

        return $this->getGerenalScore();
    }

    protected function areTied()
    {
        return $this->player1->points === $this->player2->points;
    }

    protected function getGerenalScore()
    {
        $score = $this->lookup[$this->player1->points] . '-';

        $score .= $this->areTied() 
                  ? 'All'
                  : $this->lookup[$this->player2->points];

        return $score;
    }

    protected function getLeader()
    {
        return $this->player1->points > $this->player2->points
               ? $this->player1
               : $this->player2;
    }

    protected function hasAWinner()
    {
        return $this->hasEnoughPointToWin()
               &&
               $this->isLeadingByAtLeastTwo();
    }

    protected function hasEnoughPointToWin()
    {
        return max([$this->player1->points, $this->player2->points]) >= 4;
    }

    protected function hasTheAdvantage()
    {
        return $this->hasEnoughPointToWin()
               &&
               $this->isLeadingByOne();
    }

    protected function inDeuce()
    {
        return $this->player1->points + $this->player2->points >= 6
               &&
               $this->areTied();
    }

    protected function isLeadingByOne()
    {
        return abs($this->player1->points - $this->player2->points) === 1;
    }

    protected function isLeadingByAtLeastTwo()
    {
        return abs($this->player1->points - $this->player2->points) >= 2;
    }

}
