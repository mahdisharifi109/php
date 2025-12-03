<?php
$ficheiro = fopen("webdicionario.txt", "r") or die("O ficheiro não foi aberto!");
while (!feof($ficheiro)) {
    echo fgetc($ficheiro);
}
fclose($ficheiro);
?>