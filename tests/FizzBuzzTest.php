<?php

class FizzBuzzText extends PHPUnit_Framework_TestCase
{
    public function testWhenANumberIsPassedInItReturnsThatNumber()
    {
        $fb = new FizzBuzz();
        $this->assertEquals("1", $fb->passNumber(1));
    }

    public function testWhenANumberDivisibleBy3IsPassedInItReturnsFizz()
    {
        $fb = new FizzBuzz();
        $this->assertEquals("Fizz", $fb->passNumber(3));
    }

    public function testWhenANumberDivisibleByFiveIsPassedInItReturnsBuzz()
    {
        $fb = new FizzBuzz();
        $this->assertEquals("Buzz", $fb->passNumber(5));
    }
}