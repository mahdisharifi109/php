<?php
    echo "<strong>Olá Mundo!</strong><br>";
    // Comentário de uma linha
    # Outro Comentário de uma linha 
    /* Comentário maior, que vai ocupar várias linhas e portanto tem de abrir e fechar qwertyuiopasdfghjklçzxcvbnmqwertyuioasdfghjklzxcvbnmqwertyuiosdfghjklzxcvbnmqwertyuisdfghjklcvxcvbnmsdfghjerta*/
  
    $color = "vermelho";
	$COLOR = "verde";
    echo "O meu carro é " . $color . "<br>";
    echo "A minha casa é " . $COLOR . "<br>";
    echo "O meu barco é " . $coLOR . "<br>";
	$txt = "EPB";
    echo "Eu estudo na $txt! " . "<br>";
    echo "Eu estudo na " . $txt . "!"."<br>";
	
	$x = 5;
	$y = 4;
	echo $x + $y . "<br>";
	$x = "6";
	$y = "7";
	echo $x + $y . "<br>";
	echo $x . $y . "<br>";
	
	echo strlen("Conta número de caracteres") . "<br />";
	echo str_word_count("Conta número de palavras") . "<br />";
	echo strrev ("Inverta uma string") . "<br />";
	echo strpos ("Procura texto", "texto") . "<br />"; /* vai procurar a palavra texto na string "Procura texto" e retorna o valor 8, posição do caracter t; note que a primeira posição é 0 e não 1. */
	echo str_replace ("nada", "texto", "Substitui nada") . "<br/>"; // substitui "nada" por texto"
	echo ucfirst("sou muito bom") . "<br/>"; //converte o primeiro caratere para maiúsculas
	echo ucwords("mahdi sharifi") . "<br/>"; //converte o primeiro caratere de cada palavra emumanuma string para maiúsculas
	echo strtoupper("epbã") . "<br/>"; //converte uma string para maiúsculas
	echo strtolower("EPB") . "<br/>"; //converte uma string para minúsculas
	
	$x = 10;
	$y = 6;
	echo $x + $y . "<br />";
	echo $x - $y . "<br />";
	echo $x * $y . "<br />";
	echo $x / $y . "<br />";
	echo $x % $y . "<br />"; // módelo, resto da devisão
	
?>