<?php


use PHPUnit\Framework\TestCase;

final class LeetTest extends TestCase
{
    public function setUp(){
        $this->leet = new Leet();
    }

    public function testConverteCaractereAEmLeet(){
    	$this->assertEquals($this->leet->cifraCaractere('a'),'@','Não converteu caractere corretamente');
    }

    public function testConvertePalavraLeetEmLeet(){
    	$this->assertEquals($this->leet->cifraPalavra('leet'),'1_ & & + ','Não converteu palavra corretamente');
    }

    public function testDecifraLetraAEmLeetParaCaractere(){
    	$this->assertEquals($this->leet->decifraCaractere('@'),'a','Não decifrou caractere corretamente');	
    }

    public function testDecifraPalavraNerdEmLeet(){
    	$this->assertEquals($this->leet->decifraPalavra('/V & 12 |> '),'nerd',"Não decifrou palavra corretamente");

    }
}

