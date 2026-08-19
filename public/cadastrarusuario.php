```php
<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql_verifica = "SELECT id FROM usuarios WHERE email = ?";


$stmt_verifica = mysqli_prepare($conexao, $sql_verifica);
mysqli_stmt_bind_param($stmt_verifica, "s", $email);
mysqli_stmt_execute($stmt_verifica);

$resultado = mysqli_stmt_get_result($stmt_verifica);

if (mysqli_num_rows($resultado) > 0) {
    echo "Este e-mail já está cadastrado!";
    echo "<br><br>";
    echo '<a href="index.php">Voltar</a>';
    exit;
}

// Cadastra o usuário
$sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";

$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "ss", $nome, $email);
mysqli_stmt_execute($stmt);

header("Location: ../public/index.php");
exit;

?>
```
