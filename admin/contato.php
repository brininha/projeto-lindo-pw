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
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | Contato</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <div class="container">
        <h3 class="text-center cards-title" style="margin-bottom: 18px">Últimas mensagens</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                include('../conexao.php');

                $consulta = $connection->query("SELECT idContato, nomeContato, emailContato, telefoneContato, assuntoContato, mensagemContato FROM contato ORDER BY idContato DESC");

                while ($linha = $consulta->fetch()) {
                    echo 
                    '<div class="col">
                        <div class="card h-100">
                            <div class="card-header card-background">' . $linha['nomeContato'] . '</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item card-text">E-mail: ' . $linha['emailContato'] . '</li>
                                <li class="list-group-item card-text">Telefone: ' . $linha['telefoneContato'] . '</li>
                                <li class="list-group-item card-text">Assunto: ' . $linha['assuntoContato'] . '</li>
                                <li class="list-group-item card-text">' . $linha['mensagemContato'] . '</li>
                                <li class="list-group-item card-text"><a href="./excluir-mensagem.php?id=' . $linha['idContato'] . '" class="btn btn-light btn-sm">Apagar</a></li>
                            </ul>
                        </div>
                    </div>';
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