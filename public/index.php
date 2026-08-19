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

            <button type="submit">Cadastrar</button> 

        </div>
    </form>

            <?php
    include "../infra/conexao.php";

    $sql = "SELECT pratos.id, pratos.nome, usuarios.nome AS usuario
        FROM pratos
        INNER JOIN usuarios ON pratos.usuario_id = usuarios.id";

    $resultado = mysqli_query($conexao, $sql);
?>


   <div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Prato</th>
                <th>Usuário Responsável</th>
            </tr>


            <?php  while ($usuario = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['usuario']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
   </div>
</main>