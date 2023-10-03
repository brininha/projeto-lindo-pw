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
        $consulta2 = $connection->query('SELECT nomeRegistro, sobrenomeRegistro FROM registrado WHERE nivelRegistro = 2 ORDER BY nomeRegistro');
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/curso.css">
    <title>DevFox | Novo curso</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Form para criar novo curso -->
    <div class="container-fluid">
        <table class="contact-form">
            <tr>
                <td class="align-middle">
                    <form action='./criar-curso.php' method='post'>
                        <div class="row">
                            <h2 class="mb-4 text-center curso-title">Crie um novo curso</h2>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input1" placeholder="Título" name="curso-titulo" required autocomplete="off">
                                    <label for="input1" class="form-label">Título</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="input2" name="curso-prof" required>
                                        <option value="" selected>Selecione</option>
                                        <?php
                                        while ($linha = $consulta2->fetch()) {
                                            $nome = $linha['nomeRegistro'] . " " . $linha['sobrenomeRegistro'];
                                        ?>
                                        <option value='<?=$nome?>'><?=$nome?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <label for="input2" class="form-label">Professor</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input3" placeholder="URL da imagem" name="curso-img" required autocomplete="off">
                                    <label for="input3" class="form-label">URL da imagem de capa</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="input4" name="curso-nivel" required>
                                        <option value="" selected>Selecione</option>
                                        <option value="Iniciante">Iniciante</option>
                                        <option value="Intermediário">Intermediário</option>
                                        <option value="Avançado">Avançado</option>
                                    </select>
                                    <label for="input4" class="form-label">Nível</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input5" placeholder="Duração" name="curso-duracao" required autocomplete="off">
                                    <label for="input5" class="form-label">Duração estimada</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="input6" rows="3" placeholder="Breve descrição" name="curso-desc" required autocomplete="off" style="height: 355px"></textarea>
                                    <label for="input6" class="form-label">Breve descrição</label>
                                </div>
                                
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary ">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
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