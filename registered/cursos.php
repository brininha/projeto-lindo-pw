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
    <!-- Incluindo cursos -->
    <?php
        $consulta2 = $connection->query('SELECT idCurso, tituloCurso, imgCurso FROM curso');
    ?>
    <!-- Incluindo matrículas -->
    <?php
        $id = $_SESSION['id'];
        $consulta3 = $connection->query("SELECT idMatricula, curso.idCurso, tituloCurso, imgCurso FROM curso JOIN matricula ON curso.idCurso = matricula.idCurso WHERE idRegistro = $id");
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/user.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | Cursos</title>
</head>
<body>
    <!-- Erros -->
    <?php
        include("./erro-matricula.php");
        include("./erro-aula.php");
    ?>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Matrículas -->
    <div class="container-xxl">
        <h2 class="text-center cards-title">Meus cursos</h2>
        <p class="text-center cards-text">Todas as suas matrículas</p>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                while ($linha = $consulta3->fetch()) {
            ?>
            <div class="col">
                <a class="curso-btn" href="./curso.php?id=<?=$linha['idCurso']?>&idMatricula=<?=$linha['idMatricula']?>">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?=$linha['imgCurso']?>" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8 uk-flex uk-flex-middle">
                                <div class="card-body text-center">
                                    <p style="margin: 0px"><?=$linha['tituloCurso']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- Cards dos cursos -->
    <div class="container-xxl">
        <h2 class="text-center cards-title">Cursos</h2>
        <p class="text-center cards-text">Dê uma olhada nos nossos cursos gratuitos e de qualidade!</p>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                while ($linha = $consulta2->fetch()) {
            ?>
            <div class="col">
                <a class="curso-btn" href="./detalhes-curso.php?id=<?=$linha['idCurso']?>">
                    <div class="card h-100 card-layout">
                        <img src="<?=$linha['imgCurso']?>" class="card-img-top">
                        <div class="card-body uk-flex uk-flex-center">
                            <p style="margin: 0px">
                                <?=$linha['tituloCurso']?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <br>
    <!-- Rodapé -->
    <?php
        include('./footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>