<?php
$int = 100.1;
 
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo ("$int é inteiro válido");
} else {
  echo ("$int não é inteiro válido");
}
?>