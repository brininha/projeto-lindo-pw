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
    <!-- Incluindo dados da aula -->
    <?php
        $id = $_GET['id'];
        $consulta2 = $connection->query("SELECT tituloAula, imgAula, videoAula, textoAula, idCurso FROM aula WHERE idAula = $id");
        while ($linha = $consulta2->fetch()) {
            $titulo = $linha['tituloAula'];
            $img = $linha['imgAula'];
            $video = $linha['videoAula'];
            $texto = $linha['textoAula'];
            $idCurso = $linha['idCurso'];
        }
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/noticia.css">
    <title>DevFox | Alterar aula</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Form para alterar curso -->
    <div class="container-fluid">
        <table class="contact-form mt-4">
            <tr>
                <td class="align-middle">
                    <form action='./concluir-alteracao.php' method='post'>
                        <div class="row">
                            <h2 class="mb-4 text-center curso-title">Altere os dados da aula</h2>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input1" placeholder="Título" name="aula-titulo" required autocomplete="off" value="<?=$titulo?>">
                                    <label for="input1" class="form-label">Título</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input2" placeholder="URL da imagem" name="aula-img" autocomplete="off" value="<?=$img?>">
                                    <label for="input2" class="form-label">URL da ilustração</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="input3" rows="3" placeholder="Trecho de código" name="aula-video" autocomplete="off" style="height: 210px"><?=$video?></textarea>
                                    <label for="input3" class="form-label">URL do vídeo</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="input4" rows="3" placeholder="Texto" name="aula-texto" required autocomplete="off" style="height: 355px"><?=$texto?></textarea>
                                    <label for="input4" class="form-label">Texto</label>
                                </div>
                                <input type="hidden" name="aula-id" value="<?=$id?>">
                                <input type="hidden" name="curso-id" value="<?=$idCurso?>">
                                <input type="hidden" name="alteracao" value="aula">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary ">Concluir alterações</button>
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