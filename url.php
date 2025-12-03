<?php
$url = "https://www.epb .pt";
// Remove caracteres ilegais
//$url = filter_var($url, FILTER_SANITIZE_URL);
// Valida URL
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo ("$url é URL válido");
} else {
  echo ("$url não é URL válido");
}
echo "<br />";
echo $url;
?>