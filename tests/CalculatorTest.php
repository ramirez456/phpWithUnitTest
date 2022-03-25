<?php
use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase {
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();
     
        $this->assertEquals(8, $sut->add(5,3));
    }

    public function testSubtractWillReturnTheSubtractOfItsParameters(){
        $sut = new Calculator();
        $this->assertEquals(8, $sut->subtract(10,2));
    }

    public function testMultiplyWillReturnTheMultiplyOfItsParameters(){
        $sut = new Calculator();
        $this->assertEquals(100, $sut->multiply(10, 10));
    }

    public function testDivideWillReturnTheDivideOfItsParameters(){
        $sut = new Calculator();
        $this->assertEquals(2,$sut->divide(10,5));
    }
}
