<!DOCTYPE HTML>
<html>
<body>
 
<?php
$cookie_nome = "user";
$cookie_valor = "Maria Fernandes";
setcookie($cookie_nome, $cookie_valor, time() + (86400 * 30), "/"); // 86400 = 1 dia
?>
 
<?php
if(!isset($_COOKIE[$cookie_nome])) {
    echo "Cookie '" . $cookie_nome . "' não está atribuído!<br />";
} else {
    echo "Cookie '" . $cookie_nome . "' está atribuído!<br />";
    echo "Valor é: " . $_COOKIE[$cookie_nome];
}
?>
</body>
</html>