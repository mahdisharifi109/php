<?php
$numeros = array(1, 6, 2);
sort($numeros);
$arrlength = count($numeros);
for($x = 0; $x < $arrlength; $x++) {
    echo $numeros[$x];
    echo "<br />";
}

$numeros = array(1, 6, 2);
rsort($numeros);
$arrlength = count($numeros);
for($x = 0; $x < $arrlength; $x++) {
    echo $numeros[$x];
    echo "<br />";
}

$nomes = array("Joana","Ana","Teresa");
sort($nomes);
$arrlength = count($nomes);
for($x = 0; $x < $arrlength; $x++) {
    echo $nomes[$x];
    echo "<br />";
}
	
$nomes = array("Joana","Ana","Teresa");
rsort($nomes);
$arrlength = count($nomes);
for($x = 0; $x < $arrlength; $x++) {
    echo $nomes[$x];
    echo "<br />";
}


$idades = array("Pedro" => "18", "Benjamim" => "17", "João" => "19");
asort($idades);
foreach($idades as $x => $x_value) {
    echo "chave: " . $x . ", valor: " . $x_value;
    echo "<br />";
}

$idades = array("Pedro" => "18", "Benjamim" => "17", "João" => "19");
ksort($idades);
foreach($idades as $x => $x_value) {
    echo "chave: " . $x . ", valor: " . $x_value;
    echo "<br />";
}

$idades = array("Pedro" => "18", "Benjamim" => "17", "João" => "19");
asort($idades);
foreach($idades as $x => $x_value) {
    echo "chave: " . $x . ", valor: " . $x_value;
    echo "<br />";
}

$idades = array("Pedro" => "18", "Benjamim" => "17", "João" => "19");
krsort($idades);
foreach($idades as $x => $x_value) {
    echo "chave: " . $x . ", valor: " . $x_value;
    echo "<br />";
}

$x = 75;
$y = 25;
function adicao(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
adicao();
echo $z . "<br>";

$x = 75;
$y = 25;
function adicao1(){
    global $x, $y, $z;
    $z = $x + $y;
}
adicao1();
echo $z . "<br>";

echo $_SERVER['PHP_SELF'] . "<br />";
echo "PHP_SELF<br />" . "<br />";
echo $_SERVER['SERVER_NAME'] . "<br />";
echo "SERVER_NAME<br />" . "<br />";
echo $_SERVER['HTTP_HOST'] . "<br />";
echo "HTTP_HOST<br />";
echo $_SERVER['HTTP_REFERER'] . "<br />";
echo "HTTP_REFERER<br />" . "<br />";
echo $_SERVER['HTTP_USER_AGENT'] . "<br />";
echo "HTTP_USER_AGENT<br />" . "<br />";
echo $_SERVER['SCRIPT_NAME'] . "<br />";
echo "SCRIPT_NAME<br />";






?>