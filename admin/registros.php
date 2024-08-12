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
    <!-- Incluindo registros -->
    <?php
        $ordem = 'DESC';
        if (isset($_POST['cima'])) {
            $ordem = '';
        }
        $filtro = "";
        if (isset($_POST['filtro'])) {
            $filtro = $_POST['filtro'];
        }
        $idRegistro = $_SESSION['id'];
        $consulta2 = $connection->query("SELECT idRegistro, nomeRegistro, sobrenomeRegistro, emailRegistro, dataNascRegistro, sexoRegistro, senhaRegistro, imagemRegistro, nivelRegistro FROM registrado WHERE (nomeRegistro LIKE '%$filtro%' OR sobrenomeRegistro LIKE '%$filtro%' OR dataNascRegistro LIKE '%$filtro%') AND (idRegistro != $idRegistro) ORDER BY idRegistro $ordem");
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/card.css">
    <title>DevFox | Registros</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <div class="container-xxl">
        <table class="table align-middle cards-text">
            <thead>
                <tr><td colspan="9"><h3 class="text-center cards-title" style="margin-bottom: 18px">Últimos registros</h3></td></tr>
                <tr><td colspan="9">
                    <form class="d-flex" role="search" action="./registros.php" method="post">
                        <div class="btn-group me-2" role="group" aria-label="Basic example">
                            <input type="submit" value="↑" class="btn btn-light" name="cima">
                            <input type="submit" value="↓" class="btn btn-light" name="baixo">
                        </div>
                        <input class="form-control me-2" type="search" placeholder="Filtre registros" aria-label="Search" name="filtro" autocomplete="off">
                        <button class="btn btn-light" type="submit">Pesquisar</button>
                    </form>
                </td></tr>
                <tr>
                <th scope="col">Foto</th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de nascimento</th>
                <th scope="col">Sexo</th>
                <th scope="col">Nivel</th>
                <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($linha = $consulta2->fetch()) {
                        $nivel = 'Comum';
                        if ($linha['nivelRegistro'] == 2) {
                            $nivel = 'Administrador';
                        }
                ?>
                <tr>
                <td><img src="../images/<?=$linha['imagemRegistro']?>" style="width: 80px; height: 80px; object-fit: cover;"></td>
                <td><?=$linha['idRegistro']?></td>
                <td><?=$linha['nomeRegistro']?></td>
                <td><?=$linha['sobrenomeRegistro']?></td>
                <td><?=$linha['emailRegistro']?></td>
                <td><?=$linha['dataNascRegistro']?></td>
                <td><?=$linha['sexoRegistro']?></td>
                <td><?=$nivel?></td>
                <td><a class="btn" href="./excluir-registro.php?id=<?=$linha['idRegistro']?>">❌</a></td>
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