<?php
$email = "maria ?silva@exemplo.com";
// Remove caracteres ilegais
//$email = filter_var($email, FILTER_SANITIZE_EMAIL);
 
// Valida e-mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo ("$email é email válido");
} else {
  echo ("$email não é email válido");
}
?>