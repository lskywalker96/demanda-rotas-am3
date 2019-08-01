<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aeroportos - Rotas AM3</title>
</head>
<body>
    <?php
        require 'config_bd.php';
        if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));

            $sql = "INSERT INTO usuarios SET nome= '$nome', email= '$email', senha='$senha'";
            $pdo->query($sql);

            header("Location: index.php");
        }
    ?>
    <form action="" method="post">
        <Label for="nome">Nome:</Label>
        <input type="text" name="nome" id="nome"><br/>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email"><br/>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"><br/>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>