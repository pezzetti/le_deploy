<?php
	require_once 'src/Math.php';
	require_once 'src/Leet.php';
	$math = new Math();
	echo "Vamos testar nossa classe MATH <br/>";
	echo "4+4 = ". $math->sum(4,4);

	$leet = new Leet();
	echo "</br></br> ---------------- </br></br>";
	echo "Nerd em Leet é: " . $leet->cifraPalavra('nerd');
	


?>