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
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | Cursos</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Cards dos cursos -->
    <div class="container">
        <h2 class="text-center cards-title">Cursos</h2>
        <p class="text-center cards-text">Dê uma olhada nos nossos cursos gratuitos e de qualidade!</p>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100 card-layout">
                    <img src="../images/curso.png" class="card-img-top">
                    <div style="margin: auto" class="card-body">
                        <a class="btn card-btn" href="./adicionar-curso.php">
                            Adicionar curso
                        </a>
                    </div>
                </div>
            </div>
            <?php
                while ($linha = $consulta2->fetch()) {
            ?>
            <div class="col">
                <a class="curso-btn" href="./curso.php?id=<?=$linha['idCurso']?>">
                    <div class="card h-100 card-layout">
                        <img src="<?=$linha['imgCurso']?>" class="card-img-top">
                        <div class="card-body uk-flex uk-flex-middle uk-flex-center">
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
    <!-- JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
</body>
</html>