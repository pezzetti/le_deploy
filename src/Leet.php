<?php


final class Leet{
	
	var $dicionario;

	public function __construct(){
		$this->dicionario['a'] = '@';
		$this->dicionario["b"] ="|:";
		$this->dicionario["c"] ="[";
		$this->dicionario["d"] ="|>";
		$this->dicionario["e"] ="&";
		$this->dicionario["f"] ="Ph";
		$this->dicionario["g"] ="C-";
		$this->dicionario["h"] ="#";
		$this->dicionario["i"] ="!";
		$this->dicionario["j"] ="(/";
		$this->dicionario["k"] ="X";
		$this->dicionario["l"] ="1_";
		$this->dicionario["m"] ="|V|";
		$this->dicionario["n"] ="/V";
		$this->dicionario["o"] ="()";
		$this->dicionario["p"] ="|*";
		$this->dicionario["q"] ="(_,)";
		$this->dicionario["r"] ="12";
		$this->dicionario["s"] ="$";
		$this->dicionario["t"] ="+";
		$this->dicionario["u"] ="|_|";
		$this->dicionario["v"] ="|/";
		$this->dicionario["w"] ="VV";
		$this->dicionario["x"] =")(";
		$this->dicionario["y"] ="`/";
		$this->dicionario["z" ] = "%";
	}

	public function cifraCaractere($_caractere){
		return $this->dicionario[$_caractere];
	}

	public function cifraPalavra($_palavra){
		$palavra_cifrada = "";		

		for($i=0; $i< strlen($_palavra);$i++){
			$letra = $_palavra{$i};			
			$palavra_cifrada .= $this->cifraCaractere($letra) . " ";
		}
		return $palavra_cifrada;
	}

	public function decifraCaractere($_caractere){
		return array_search($_caractere, $this->dicionario);
	}

	public function decifraPalavra($_palavra){
		$palavra_decifrada = "";
		$arr_letras_cifradas = explode(" ",$_palavra);	
		for($i = 0; $i< count($arr_letras_cifradas) ; $i++){
			$palavra_decifrada.= $this->decifraCaractere($arr_letras_cifradas[$i]);
		}
		return $palavra_decifrada;
	}
}