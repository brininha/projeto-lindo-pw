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
    <!-- Incluindo aula -->
    <?php
        $id = $_GET['id'];
        $tituloCurso = $_GET['titulo'];
        $num = $_GET['num'];
        $consulta2 = $connection->query("SELECT tituloAula, imgAula, videoAula, textoAula, idCurso FROM aula WHERE idAula = $id");
        while ($linha = $consulta2->fetch()) {
            $titulo = $linha['tituloAula'];
            $img = $linha['imgAula'];
            $video = $linha['videoAula'];
            $texto = $linha['textoAula'];
            $idCurso = $linha['idCurso'];
        }
    ?>
    <!-- Links específicos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/themes/prism.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | Aula <?=$num?></title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Todos os dados da aula -->
    <div class="container mt-5">
        <div class="clearfix">
            <?php
            if ($img != "") {
            ?>
            <img src="<?=$img?>" class="col-md-3 float-md-end mb-3 ms-md-5">
            <?php
            }
            ?>
            <h2 class="curso-title"><?=$titulo?></h2>
            <p class="curso-text">Curso: <?=$tituloCurso?></p>
            <div class="curso-text" style="text-align: justify"><?=$texto?></div>
            <br>
            <?php
            if ($video != "") {
            ?>
            <div class="text-center"><?=$video?></div>  
            <?php
            }
            ?>
        </div>
        <br>
        <p class="d-inline-flex gap-1">
            <a href="./excluir-aula.php?id=<?=$id?>&idCurso=<?=$idCurso?>" class="btn btn-secondary" role="button">Excluir aula</a>
            <a href="./alterar-aula.php?id=<?=$id?>" class="btn btn-secondary" role="button">Alterar aula</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/plugins/autoloader/prism-autoloader.min.js"></script>
</body>
</html>