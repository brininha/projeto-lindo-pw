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
    <!-- Incluindo registros -->
    <?php
        $consulta3 = $connection->query('SELECT id, nome, sobrenome, email, dataNasc, sexo, senha, imagem FROM registrado ORDER BY id DESC');
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | A maior plataforma de devs</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <div class="container">
        <table class="table align-middle cards-text">
            <thead>
                <tr><td colspan="7"><h3 class="text-center cards-title" style="margin-bottom: 18px">Últimos registros</h3></td></tr>
                <tr>
                <th scope="col">Foto</th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Sexo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($linha = $consulta3->fetch()) {
                ?>
                <tr>
                <td><img src="<?=$linha['imagem']?>" style="width: 80px; height: 80px; object-fit: cover;"></td>
                <td><?=$linha['id']?></td>
                <td><?=$linha['nome']?></td>
                <td><?=$linha['sobrenome']?></td>
                <td><?=$linha['email']?></td>
                <td><?=$linha['dataNasc']?></td>
                <td><?=$linha['sexo']?></td>
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
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>
</body>
</html>