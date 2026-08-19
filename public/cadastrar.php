```php
<?php

include "../infra/conexao.php";

$nome_prato = $_POST["nome_prato"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$usuario_id = 1;

$sql = "INSERT INTO pratos (nome, descricao, preco, categoria, usuario_id)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "ssdsi",
    $nome_prato,
    $descricao,
    $preco,
    $categoria,
    $usuario_id
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: ../public/index.php");
    exit;
} else {
    die("Erro ao cadastrar prato.");
}

?>
```
