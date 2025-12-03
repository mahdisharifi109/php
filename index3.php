<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nome: <input type="text" name="fname">
    <input type="submit" value="Submit">
</form>
 
 <form action="cliente.php" method="post">
    Nome: <input type="text" name="nome"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recolhe o valor do campo input
    $nome = $_REQUEST['fname'];
 
    if (empty($nome)) {
        echo "Nome não preenchido";
    } else {
        echo $nome;
    }
}
?>