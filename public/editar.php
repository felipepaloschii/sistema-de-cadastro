<?php

include "../infra/conexao.php";

$id = $_GET['id'];
$sql = "SELECT * FROM pratos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

$prato = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Pratos</title>
</head>

<body>
    <header>
        <h1>Sistema de Cadastro de Pratos</h1>
    </header>
    <main>
        <h2>Editar Prato</h2>
        <form action="../infra/editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $prato['id']; ?>">

            <label for="nome_prato">Nome do Prato:</label>
            <input type="text" name="nome_prato" value="<?php echo $prato['nome']; ?>" required>
            <br>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" required><?php echo $prato['descricao']; ?></textarea>
            <br>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" step="0.01" value="<?php echo $prato['preco']; ?>" required>
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" value="<?php echo $prato['categoria']; ?>" required>
            <br><br>

            <button type="submit">Salvar Alterações</button>
        </form>

    </main>
</body>