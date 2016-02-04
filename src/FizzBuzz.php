<?php


class FizzBuzz
{
    public function passNumber($number)
    {
        if ($number %3 == 0) {
            return "Fizz";
        } elseif ($number %5 == 0) {
            return "Buzz";
        }
        return $number;
    }
}