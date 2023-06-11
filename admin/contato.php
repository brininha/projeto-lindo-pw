<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Contato</title>
</head>
<body>

    <div class="container">
        <h2 class="text-center m-3">Últimas mensagens</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                include('../conexao.php');

                $consulta = $connection->query("SELECT nome, email, idade, assunto, mensagem FROM contato ORDER BY id DESC");

                while ($linha = $consulta->fetch()) {
                    echo 
                    '<div class="col">
                        <div class="card border-dark h-100">
                            <div class="card-header text-bg-dark">' . $linha[0] . '</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">E-mail: ' . $linha[1] . '</li>
                                <li class="list-group-item">Idade: ' . $linha[2] . '</li>
                                <li class="list-group-item">Assunto: ' . $linha[3] . '</li>
                                <li class="list-group-item">' . $linha[4] . '</li>
                            </ul>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>