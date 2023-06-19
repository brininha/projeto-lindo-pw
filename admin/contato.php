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
        $consulta = $connection->query('SELECT tema, imagem FROM modoAdmin');
        while ($linha = $consulta->fetch()) {
            $tema = $linha['tema'];
            $imagem = $linha['imagem'];
        }
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

                $consulta = $connection->query("SELECT nome, email, telefone, assunto, mensagem FROM contato ORDER BY id DESC");

                while ($linha = $consulta->fetch()) {
                    echo 
                    '<div class="col">
                        <div class="card h-100">
                            <div class="card-header card-background">' . $linha[0] . '</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item card-text">E-mail: ' . $linha[1] . '</li>
                                <li class="list-group-item card-text">Telefone: ' . $linha[2] . '</li>
                                <li class="list-group-item card-text">Assunto: ' . $linha[3] . '</li>
                                <li class="list-group-item card-text">' . $linha[4] . '</li>
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