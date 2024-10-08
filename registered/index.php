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
        $consulta2 = $connection->query("SELECT idNoticia, tituloNoticia, autorNoticia, imagemNoticia, resumoNoticia, textoNoticia FROM noticia ORDER BY idNoticia DESC");

        $consulta3 = $connection->query("SELECT idNoticia FROM noticia");
        $totalNoticias = 0;
        while ($linha = $consulta3->fetch()) { 
            $totalNoticias += 1; 
        }
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/user.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | A maior plataforma de devs</title>
</head>
<body>
    <!-- Erros -->
    <?php
        include("./erro-excluir.php");
    ?>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Boas-vindas -->
    <div class="container-xxl">
        <div class="row banner uk-flex uk-flex-middle">
            <div class="col banner-text">
                <span class="topline noticia-text">Olá!</span>
                <h1>Bem-vindo,</h1>
                <h1><span class="multiText noticia-title"></span></h1>
                <p class="noticia-text">Estamos entusiasmados por dar-lhe as boas-vindas à nossa plataforma, onde a tecnologia e a criatividade se unem.</p>
            </div>
            <div class="col">
                <img class="animate__animated animate__pulse animate__infinite animation_duration" src="../images/raposa3.png"> 
            </div>
        </div>
    </div>
    <!-- Cards -->
    <?php
    if (isset($_GET['qtd'])) {
        $qtdNoticias = $_GET['qtd'];
    } else {
        $qtdNoticias = 3;
    }
    ?>
    <div class="container-xxl card-container" id="noticias">
        <h2 class="cards-title text-center">Notícias recentes</h2>
        <p class="text-center cards-text">Veja as nossas últimas boas novas!</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $i = 0;
            while ($linha = $consulta2->fetch()) {
                if ($i == $qtdNoticias) {
                    break;
                }
                $i += 1;
            ?>
            <div class="col">
                <div class="card card-layout h-100">
                    <img src="<?=$linha['imagemNoticia']?>" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title card-head"><?=$linha['tituloNoticia']?></h4>
                        <p class="card-text"><?=$linha['resumoNoticia']?></p>
                        <a href="noticia.php?id=<?=$linha['idNoticia']?>" class="btn card-btn">Ver notícia <span>&rarr;</span></a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <br>
    <!-- Ver mais -->
    <div class="uk-flex uk-flex-center mb-4" id="fimPagina">
    <?php
    if ($qtdNoticias < $totalNoticias) {
    ?>
        <a href="./index.php?qtd=<?=$qtdNoticias+3?>#fimPagina" class="btn btn-light uk-flex">Ver mais notícias</a>
    <?php
    }
    ?>
    </div>
    <!-- Rodapé -->
    <?php
        include('./footer.php');
    ?>
    <!-- JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
    <?php
        include("../js/typing-effect.php");
    ?>
</body>
</html>