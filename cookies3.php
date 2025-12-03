<?php
setcookie("teste_cookie", "teste", time() + 3600, "/");

if(count($_COOKIE) > 0) {
    echo "Cookies activados.";
} else {
    echo "Cookies não activados.";
}
?>