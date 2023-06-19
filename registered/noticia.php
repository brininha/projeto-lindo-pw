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
    <!-- Incluindo notícias -->
    <?php
        $id = $_GET['id'];
        $consulta2 = $connection->query("SELECT titulo, autor, imagem, texto FROM noticia WHERE id = $id");
        while ($linha = $consulta2->fetch()) {
            $titulo = $linha['titulo'];
            $autor = $linha['autor'];
            $imgNoticia = $linha['imagem'];
            $texto = $linha['texto'];
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
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | Notícia</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <br>
    <!-- Todos os dados da notícia -->
    <div class="container">
        <h2 class="text-center noticia-title"><?=$titulo?></h2>
        <p class="text-center noticia-text">Escrito por: <?=$autor?></p>
        <div class="clearfix">
            <img src="<?=$imgNoticia?>" class="col-md-6 float-md-end mb-3 ms-md-3">
            <div class="noticia-text"><?=$texto?></div>
        </div>
    </div>
    <br>
    <!-- Rodapé -->
    <?php
        include('./footer.php');
    ?>
    <!-- JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
</body>
</html>