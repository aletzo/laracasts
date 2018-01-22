<?php

class BowlingGame
{
    protected $rolls = [];

    public function roll($pins)
    {
        $this->guardAgainstInvalidRoll($pins);

        $this->rolls[] = $pins;
    }

    public function score()
    {
        $roll  = 0;
        $score = 0;

        for ($frame = 1; $frame < 11; $frame++) {
            if ($this->isStrike($roll)) {
                $score += 10 + $this->getStrikeBonus($roll);

                $roll++;

                continue;
            }

            $frameScore = $this->getFrameScore($roll);

            if ($this->isSpare($frameScore)) {
                $score += $this->getSpareBonus($roll);
            }
            
            $score += $frameScore;

            $roll += 2;
        }

        return $score;
    }

    protected function isSpare($frameScore)
    {
        return $frameScore === 10;
    }

    protected function isStrike($roll)
    {
        return $this->rolls[$roll] === 10;
    }

    protected function getFrameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    protected function getSpareBonus($roll)
    {
        return $this->rolls[$roll + 2];
    }

    protected function getStrikeBonus($roll)
    {
        return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }

    protected function guardAgainstInvalidRoll($pins)
    {
        if ($pins < 0) {
            throw new InvalidArgumentException;
        }
    }

}
