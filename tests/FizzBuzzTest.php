<?php

class FizzBuzzText extends PHPUnit_Framework_TestCase
{
    public function testWhenANumberIsPassedInItReturnsThatNumber()
    {
        $fb = new FizzBuzz();
        $this->assertEquals("1", $fb->passNumber(1));
    }
}