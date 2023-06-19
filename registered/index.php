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
        $consulta2 = $connection->query('SELECT id, titulo, autor, imagem, resumo, texto FROM noticia');
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
    <title>DevFox | A maior plataforma de devs</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Carrossel -->
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; autoplay: true">
        <ul class="uk-slideshow-items">
            <li>
                <img src="../images/carrossel1.gif" uk-cover>
            </li>
            <li>
                <img src="../images/carrossel02.gif" uk-cover>
            </li>
            <li>
                <img src="../images/carrossel03.gif" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
    <!-- Cards -->
    <div class="container card-container">
        <h2 class="cards-title text-center">Notícias recentes</h2>
        <p class="text-center cards-text">Veja as nossas últimas boas novas!</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            while ($linha = $consulta2->fetch()) {
            ?>
            <div class="col">
                <div class="card card-layout h-100">
                    <img src="<?=$linha['imagem']?>" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title card-head"><?=$linha['titulo']?></h4>
                        <p class="card-text"><?=$linha['resumo']?></p>
                        <a href="noticia.php?id=<?=$linha['id']?>" class="btn card-btn">Ver notícia <span>&rarr;</span></a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- Rodapé -->
    <br>
    <?php
        include('./footer.php');
    ?>
    <!-- JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
</body>
</html>