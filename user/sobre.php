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
        include('../modo.php');
    ?>
    <!-- Incluindo administradores -->
    <?php
        include('../conexao.php');
        $consulta = $connection->query("SELECT imagemRegistro, nomeRegistro, instaRegistro, linkedinRegistro, githubRegistro FROM registrado WHERE nivelRegistro = 2");
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/user.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | Sobre nós</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Cards -->
    <div class="container">
        <h2 class="about-title text-center mt-5 mb-5">As desenvolvedoras</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                while ($linha = $consulta->fetch()) {
            ?>
            <div class="col">
                <div class="card card-about">
                    <img style="width: 250px; height: 250px; border-radius: 100%; margin: auto" src="<?=$linha['imagemRegistro']?>">
                    <div class="card-body">
                        <h5 class="card-title text-center about-title"><?=$linha['nomeRegistro']?></h5>
                        <div class="social-media">
                            <a href="<?=$linha['linkedinRegistro']?>" target="_blank"><img src="../images/linkedin.svg"></a>
                            <a href="<?=$linha['instaRegistro']?>" target="_blank"><img src="../images/instagram.svg"></a>
                            <a href="<?=$linha['githubRegistro']?>" target="_blank"><img src="../images/github.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- Rodapé -->
    <div class="mb-5"></div>
    <?php
        include('./footer.php');
    ?>
    <!-- JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
</body>
</html>