<?php

class StringCalculator
{

    const MAX_NUMBER_ALLOWED = 1000;

    public function add($string)
    {
        return array_sum(array_map(function($number) {
            $this->guardAgainstInvalidNumber($number);

            if ($number >= self::MAX_NUMBER_ALLOWED) {
                return 0;
            }

            return $number;
        }, $this->parseNumbers($string)));
    }

    protected function guardAgainstInvalidNumber($number)
    {
        if ($number < 0) {
            throw new InvalidArgumentException('Invalid number provided: '. $number);
        }
    }

    protected function parseNumbers($string)
    {
        return array_map('intval', preg_split('/\s*(,|\\n)\s*/', $string));
    }

}
