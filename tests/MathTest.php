<?php


use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
final class MathTest extends TestCase
{
    public function setUp(){
        $this->math = new Math();
    }

    public function testOperationSum(){    
        $this->assertEquals(3, $this->math->sum(1,2),'Não somou Corretamente');
    }
}

