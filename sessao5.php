<?php
session_start();
// remove as variáveis
session_unset();
// destrói a sessão
session_destroy();
print_r($_SESSION);
?>