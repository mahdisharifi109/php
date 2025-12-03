<!DOCTYPE>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
// Define variáveis com valores vazios
$nomeErr = $emailErr = $generoErr = $websiteErr = "";  // Adicionado $websiteErr
$nome = $email = $genero = $coment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nome"])) {
    $nomeErr = "Preencha o nome.";
  } else {
    $nome = teste_input($_POST["nome"]);
  }
  if (!preg_match("/^[a-zA-Z ]*$/",$nome)){  
	  $nomeErr = "Só são permitidas letras e espaços em branco";
  }
  if (empty($_POST["email"])) {
    $emailErr = "Preencha o e-mail.";
  } else {
    $email = teste_input($_POST["email"]);
  }
  // Verifica se o e-mail está bem formado
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){  
	  $emailErr = "Formato de e-mail inválido";
  }
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = teste_input($_POST["website"]);
    // Validação do website
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
        $websiteErr = "URL inválida";
    }
  }
  if (empty($_POST["coment"])) {
    $coment = "";
  } else {
    $coment = teste_input($_POST["coment"]);
  }
  if (empty($_POST["genero"])) {
    $generoErr = "Escolha o género.";
  } else {
    $genero = teste_input($_POST["genero"]);
  }
}
function teste_input($dados) {
  $dados = trim($dados);
  $dados = stripslashes($dados);
  $dados = htmlspecialchars($dados);
  return $dados;
}
?>
<h2>Validação de formulário</h2>
<p><span class="error">* campo obrigatório</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
  Nome: <input type="text" name="nome">
  <span class="error">* <?php echo $nomeErr;?></span>
  <br><br>
 
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 
  Website: <input type="text" name="website">
  <span class="error">* <?php echo $websiteErr;?></span>  <!-- Exibe o erro do website -->
  <br><br>
 
  Comentários: <textarea name="coment" rows="5" cols="40"></textarea>
  <br><br>
 
  Gênero:
  <input type="radio" name="genero" value="Feminino">Feminino
  <input type="radio" name="genero" value="Masculino">Masculino
  <input type="radio" name="genero" value="Outro">Outro
  <span class="error">* <?php echo $generoErr;?></span>
  <br><br>
 
  <input type="submit" name="submit" value="Confirmar dados">
</form>
<form action="testel.php" method="post"> <!-- alterado -->
    <!-- type para hidden -->
    <input type="hidden" name="nome" value="<?php echo $nome; ?>"> <!-- adicionado - mudar -->
    <input type="hidden" name="email" value="<?php echo $email; ?>"> <!-- adicionado - mudar -->
    <input type="hidden" name="website" value="<?php echo $website; ?>"> <!-- adicionado - mudar -->
    <input type="hidden" name="coment" value="<?php echo $coment; ?>"> <!-- adicionado - mudar -->
    <input type="hidden" name="genero" value="<?php echo $genero; ?>"> <!-- adicionado - mudar -->
    <!-- type para hidden -->
 
<?php
echo "<h2>Os seus dados:</h2>";
echo $nome;
echo "<br />";
echo $email;
echo "<br />";
echo $website;
echo "<br />";
echo $coment;
echo "<br />";
echo $genero;
echo "<br />";
?>
 
    <input type="submit" name="submit" value="Enviar"> <!-- alterado -->
</form>
</body>
</html>
