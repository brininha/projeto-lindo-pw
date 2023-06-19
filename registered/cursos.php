<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links de todos os arquivos CSS -->
    <?php
        include("../links.php");
    ?>
    <!-- Incluindo tema -->
    <?php
        include('../conexao.php');
        $consulta = $connection->query('SELECT tema, imagem FROM modo');
        while ($linha = $consulta->fetch()) {
            $tema = $linha['tema'];
            $imagem = $linha['imagem'];
        }
    ?>
    <!-- Incluindo perfil -->
    <?php
        $consulta3 = $connection->query('SELECT id, nome, sobrenome, email, dataNasc, sexo, senha, imagem FROM registroAtual');
        while ($linha = $consulta3->fetch()) {
            $id = $linha['id'];
            $nome = $linha['nome'];
            $sobrenome = $linha['sobrenome'];
            $email = $linha['email'];
            $dataNasc = $linha['dataNasc'];
            $sexo = $linha['sexo'];
            $senha = $linha['senha'];
            $imagemPerfil = $linha['imagem'];
        }
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/user.php">
    <title>DevFox | Cursos</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <img src="../images/obras.jpg" width="100%">
    <!-- Rodapé -->
    <?php
        include('./footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>