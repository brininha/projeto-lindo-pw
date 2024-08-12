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
    <!-- Incluindo curso -->
    <?php
        $idCurso = $_GET['id'];
        $consulta2 = $connection->query("SELECT tituloCurso, profCurso, imgCurso, nivelCurso, duracaoCurso, descricaoCurso, numAulasCurso FROM curso WHERE idCurso = $idCurso");
        while ($linha = $consulta2->fetch()) {
            $titulo = $linha['tituloCurso'];
            $professor = $linha['profCurso'];
            $img = $linha['imgCurso'];
            $nivel = $linha['nivelCurso'];
            $duracao = $linha['duracaoCurso'];
            $descricao = $linha['descricaoCurso'];
            $numAulas = $linha['numAulasCurso'];
        }
        $idRegistro = $_SESSION['id'];
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/user.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | Curso</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Todos os dados do curso -->
    <div class="container-xxl mt-5" style="height: 100vh">
        <div class="clearfix">
            <img src="<?=$img?>" class="col-md-3 float-md-end mb-5 ms-md-5" style="border-radius: 10px">
            <h2 class="curso-title"><?=$titulo?></h2>
            <p class="curso-text">Curso desenvolvido por: <?=$professor?> | Nível: <?=$nivel?> | Duração: <?=$duracao?> | Quantidade de aulas: <?=$numAulas?></p>
            <div class="curso-text" style="text-align: justify"><?=$descricao?></div>
        </div>
        <br>
        <a href="./adicionar-curso.php?idUser=<?=$idRegistro?>&idCurso=<?=$idCurso?>" class="btn btn-light" role="button">Fazer matrícula</a>
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