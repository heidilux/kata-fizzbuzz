<?php

class FizzBuzzText extends PHPUnit_Framework_TestCase
{
    protected $fb;

    public function setUp()
    {
        parent::setUp();
        $this->fb = new FizzBuzz();
    }

    public function testWhenANumberIsPassedInItReturnsThatNumber()
    {
        $this->assertEquals("1", $this->fb->passNumber(1));
    }

    public function testWhenANumberDivisibleBy3IsPassedInItReturnsFizz()
    {
        $this->assertEquals("Fizz", $this->fb->passNumber(3));
    }

    public function testWhenANumberDivisibleByFiveIsPassedInItReturnsBuzz()
    {
        $this->assertEquals("Buzz", $this->fb->passNumber(5));
    }

    public function testWhenANumberDivisibleByBoth3And5IsPassedInItReturnsFizzBuzz()
    {
        $this->assertEquals("FizzBuzz", $this->fb->passNumber(15));
    }
}