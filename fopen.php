<?php
$ficheiro = fopen("webdicionario.txt", "r") or die("O ficheiro não foi aberto!");
echo fread($ficheiro, filesize("webdicionario.txt"));
fclose($ficheiro);
?>