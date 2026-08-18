<html lang="en">
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
    <h2>Cadastrar Usuarios</h2>
  <div>
    <form action="cadastrarusuario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email"  name="email" required>
        <br>
       
        <button type="submit">Cadastrar</button>
    </form>
    </div>

    <div>
        <form action="cadastrar.php" method="post">
            <label for="nome_prato">Nome do Prato:</label>
            <input type="text" name="nome_prato" required>
            <br>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" required></textarea>
            <br>
            <label for="preco">Preço:</label>
            <input type="number" name="preco" step="0.01" required>
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" required>
            <br>
            <br>

            <button type="submit">Cadastrar Prato</button>
    </div>
</main>