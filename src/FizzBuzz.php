<?php


class FizzBuzz
{
    public function passNumber($number)
    {
        if ($number %3 == 0) {
            return "Fizz";
        }
        return $number;
    }
}