<?php
$ficheiro = fopen("webdicionario.txt", "r") or die("O ficheiro não foi aberto!");
while(!feof($ficheiro)) {
    echo fgets($ficheiro) . "<br />";
}
echo "<p><strong>feof() retornou TRUE </strong> - fim do ficheiro atingido!</p>";
fclose($ficheiro);
?>
 