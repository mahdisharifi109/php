<?php
// Modo "a+" permite leitura e escrita (append)
$arquivo = fopen("webdicionario.txt", "a+");

if ($arquivo) {
    // Escrevendo no final do arquivo
    fwrite($arquivo, "Novo conteúdo adicionado\n");
   
    // Voltando ao início para ler
    rewind($arquivo);
   
    // Lendo o conteúdo completo
    $conteudo = fread($arquivo, filesize("webdicionario.txt"));
    echo "Conteúdo do arquivo:\n" . $conteudo;
   
    fclose($arquivo);
} else {
    echo "Erro ao abrir o arquivo";
}
?>
