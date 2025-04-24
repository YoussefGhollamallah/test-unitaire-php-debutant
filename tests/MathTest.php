<?php

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    public function testAddition()
    {
        $math = new Math();
        $result = $math->addition(2, 3);
        $this->assertEquals(5, $result);
    }
}