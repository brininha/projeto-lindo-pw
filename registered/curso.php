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
    <!-- Incluindo aulas -->
    <?php
        $consulta3 = $connection->query("SELECT idAula, tituloAula FROM aula WHERE idCurso = $idCurso");
    ?>
    <!-- Incluindo aulas concluídas -->
    <?php
        $idMatricula = $_GET['idMatricula'];
        $consulta5 = $connection->query("SELECT COUNT(idAulaConcluida) AS soma FROM aulaconcluida WHERE idMatricula = $idMatricula");
        while ($linha = $consulta5->fetch()) {
            $soma = $linha['soma'];
        }
        $porcentagem = number_format($soma / $numAulas * 100, 2);
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
    <div class="container mt-5">
        <div class="clearfix">
            <img src="<?=$img?>" class="col-md-3 float-md-end mb-5 ms-md-5" style="border-radius: 10px">
            <h2 class="curso-title"><?=$titulo?></h2>
            <p class="curso-text">Curso desenvolvido por: <?=$professor?> | Nível: <?=$nivel?> | Duração: <?=$duracao?> | Quantidade de aulas: <?=$numAulas?></p>
            <div class="curso-text" style="text-align: justify"><?=$descricao?></div>
            <br>
            <!-- Barra de progresso -->
            <div class="progress" role="progressbar">
                <div class="progress-bar" style="width: <?=$porcentagem?>%"><?=$porcentagem?>%</div>
            </div>
        </div>
        <!-- Slider de aulas -->
        <div class="uk-slider-container-offset" style="margin: auto" uk-slider>
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1-3@s uk-grid">
                    <?php
                        $i = 1;
                        while($linha = $consulta3->fetch()) {
                    ?>
                    <li>
                        <a class="curso-btn" href="./aula.php?id=<?=$linha['idAula']?>&titulo=<?=$titulo?>&num=<?=$i?>">
                        <div class="uk-card uk-card-default card-layout uk-flex uk-flex-middle uk-flex-center" style="height: 200px">
                            <div class="uk-card-body">
                                <h3 class="text-center uk-card-title"><?=$i?></h3>
                                <p class="text-center"><?=$linha['tituloAula']?></p>
                            </div>
                        </div>
                        </a>
                    </li>
                    <?php
                        $i = $i + 1;
                        }
                    ?>
                </ul>
                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>
        <a href="./excluir-matricula.php?idRegistro=<?=$idRegistro?>&idCurso=<?=$idCurso?>" class="btn btn-light" role="button">Desfazer matrícula</a>
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