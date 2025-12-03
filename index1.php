<?php
$tempo = date("H");

if ($tempo < "19") {
    echo "Tenha um bom dia!<br />";
}

$tempo = date("H");

if ($tempo < "10") {
    echo "Tenha um bom dia!<br />";
} else {
    echo "Tenha uma boa noite!<br />";
}


$tempo = date("H");

if ($tempo < "13") {
    echo "Tenha uma bom dia!<br />";
} elseif ($tempo < "19") {
    echo "Tenha um boa tarde!<br />";
} else {
    echo "Tenha uma boa noite!<br />";
}

$favcolor = "red";

switch ($favcolor) {
    case "vermelho":
        echo "A sua cor favorita é vermelho!";
        break;
    case "azul":
        echo "A sua cor favorita é azul!";
        break;
    case "verde":
        echo "A sua cor favorita é verde!";
        break;
    default:
        echo "A sua cor favorita não é vermelho, nem azul, nem verde!<br />";
        break;
}

$x = 1;
while ($x <= 5) {
    echo "O número é: $x <br />";
    $x++;
}

$x = 6;
do {
    echo "O número é: $x <br />";
    $x++;
} while ($x <= 5);

for ($x = 0; $x <= 10; $x++) {
    echo "O número é: $x <br />";
}

$cores = array('vermelho', 'verde', 'azul', 'amarelo');
foreach ($cores as $valor) {
    echo "$valor <br />";
}

function escreveMsg() {
    echo "Olá Mundo!<br />";
}
escreveMsg(); // Chama da função


function familiaNome($fnome) {
    echo "$fnome Silva<br />";
}

// Chamando a função com diferentes nomes
familiaNome("Joana");
familiaNome("Helena");
familiaNome("Mário");
familiaNome("Pedro");
familiaNome("António");

function familiaNomeAno($fnome, $ano) {
    echo "$fnome Silva, nasceu em $ano.<br />";
}

// Chamadas da função
familiaNomeAno("Joana", "1985");
familiaNomeAno("Helena", "1978");
familiaNomeAno("António", "1993");


function atribuiAltura ($minaltura = 170) {
    echo "A altura é: $minaltura <br />";
}

atribuiAltura(180);       
atribuiAltura();          // Vai usar o valor padrão 170
atribuiAltura(175);      

function soma($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . soma(5, 10) . "<br />";
echo "7 + 13 = " . soma(7, 13) . "<br />";
echo "2 + 4 = " . soma(2, 4) . "<br />";

echo "<h2>PHP é o máximo!</h2>";

$frutas = array("maçã", "laranja", "banana");
echo "Eu gosto de " . $frutas[0] . " e de " . $frutas[1] . " mas não de " . $frutas[2] . ".";

$frutas = array("maçã", "laranja", "banana");
echo count($frutas) . "<br>";

$frutas = array("maçã", "laranja", "banana");
$arrlength = count($frutas);

for ($x = 0; $x < $arrlength; $x++) {
    echo $frutas[$x];
    echo "<br>";
}
$idades= array("Pedro"=>"18", "Benjamim"=>"17", "João"=>"19");
echo "O Pedro tem " . $idades['Pedro'] . " anos de idade.<br>";

$idades = array("Pedro" => "18", "Benjamim" => "17", "João" => "19");
foreach($idades as $x => $x_value) {
    echo "chave: " . $x . ", valor: " . $x_value;
    echo "<br />";
}

?>