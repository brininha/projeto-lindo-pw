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
        $filtro = "";
        if (isset($_POST['filtro'])) {
            $filtro = $_POST['filtro'];
        }
        $ordem = "DESC";
        if (isset($_POST['cima'])) {
            $ordem = "";
        }
        $consulta2 = $connection->query("SELECT idNoticia, tituloNoticia, autorNoticia, imagemNoticia, resumoNoticia, textoNoticia, dataNoticia FROM noticia WHERE tituloNoticia LIKE '%$filtro%' ORDER BY idNoticia $ordem");
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../js/typing-effect.php">
    <title>DevFox | A maior plataforma de devs</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Boas-vindas -->
    <div class="container">
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
    <!-- Painel das notícias -->
    <div class="container" id="noticias">
        <table class="table align-middle cards-text">
            <thead>
                <tr><td colspan="4"><h3 class="text-center cards-title" style="margin-bottom: 18px">Listagem de notícias</h3></td></tr>
                <tr><td colspan="4">
                    <form class="d-flex" role="search" action="./index.php#noticias" method="post">
                        <a href="./adicionar-noticia.php" class="btn btn-light me-2">+</a>
                        <div class="btn-group me-2" role="group" aria-label="Basic example">
                            <input type="submit" value="↑" class="btn btn-light" name="cima">
                            <input type="submit" value="↓" class="btn btn-light" name="baixo">
                        </div>
                        <input class="form-control me-2" type="search" placeholder="Filtre registros" aria-label="Search" name="filtro" autocomplete="off">
                        <button class="btn btn-light" type="submit">Pesquisar</button>
                    </form>
                </td></tr>
                <tr>
                    <th scope="col">Foto de capa</th>
                    <th scope="col">Título</th>
                    <th scope="col">Data de publicação</th>
                    <th scope="col">Visualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($linha = $consulta2->fetch()) {
                ?>
                <tr>
                <td><img src="<?=$linha['imagemNoticia']?>" style="width: 80px; height: 80px; object-fit: cover;"></td>
                <td><?=$linha['tituloNoticia']?></td>
                <td><?=$linha['dataNoticia']?></td>
                <td><a class="btn" href="./noticia.php?id=<?=$linha['idNoticia']?>">👁️</a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <br>
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