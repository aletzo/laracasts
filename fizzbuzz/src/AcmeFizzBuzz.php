<?php

class AcmeFizzBuzz
{
    public function execute($number)
    {
        if ($number % 15 === 0) {
            return 'fizzbuzz';
        }

        if ($number % 3 === 0) {
            return 'fizz';
        }

        if ($number % 5 === 0) {
            return 'buzz';
        }

        return $number;
    }

    public function executeUpTo($maxNumber)
    {
        return array_map(function($number) {
            return $this->execute($number);
        }, range(1, $maxNumber));
    }

}
