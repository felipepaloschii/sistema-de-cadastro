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
    <form action="cadastrar_usuario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email"  name="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</main>