<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Verificando login -->
    <?php
        include("../verificar-login.php");
    ?>
    <!-- Links de todos os arquivos CSS -->
    <?php
        include("../links.php");
    ?>
    <!-- Incluindo tema -->
    <?php
        include('../modo.php');
    ?>
    <!-- Incluindo notícias -->
    <?php
        $id = $_GET['id'];
        $consulta2 = $connection->query("SELECT tituloNoticia, autorNoticia, imagemNoticia, textoNoticia FROM noticia WHERE idNoticia = $id");
        while ($linha = $consulta2->fetch()) {
            $titulo = $linha['tituloNoticia'];
            $autor = $linha['autorNoticia'];
            $imgNoticia = $linha['imagemNoticia'];
            $texto = $linha['textoNoticia'];
        }
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/admin.php">
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
        <br>
        <p class="d-inline-flex gap-1">
            <a href="./excluir-noticia.php?id=<?=$id?>" class="btn btn-secondary" role="button">Excluir notícia</a>
            <a href="./alterar-noticia.php?id=<?=$id?>" class="btn btn-secondary" role="button">Alterar notícia</a>
        </p>
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