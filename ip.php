<?php
$ip = "127.0.0.1";
 
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo ("$ip é IP válido");
} else {
  echo ("$ip não é IP válido");
}
?>