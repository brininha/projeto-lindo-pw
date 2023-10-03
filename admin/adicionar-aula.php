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
    <!-- Incluindo curso -->
    <?php
        $id = $_GET['id'];
        $consulta2 = $connection->query("SELECT tituloCurso, profCurso, imgCurso, nivelCurso, duracaoCurso, descricaoCurso FROM curso WHERE idCurso = $id");
        while ($linha = $consulta2->fetch()) {
            $titulo = $linha['tituloCurso'];
            $professor = $linha['profCurso'];
            $img = $linha['imgCurso'];
            $nivel = $linha['nivelCurso'];
            $duracao = $linha['duracaoCurso'];
            $descricao = $linha['descricaoCurso'];
        }
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/admin.php">
    <link rel="stylesheet" href="../css/curso.css">
    <title>DevFox | Nova aula</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Form para criar nova aula -->
    <div class="container-fluid">
        <table class="contact-form">
            <tr>
                <td class="align-middle">
                    <form action='./criar-aula.php' method='post'>
                        <input type="hidden" name="curso-id" value=<?=$id?>>
                        <div class="row">
                            <h2 class="mb-4 text-center curso-title">Crie uma aula</h2>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input1" placeholder="Título" name="aula-titulo" required autocomplete="off">
                                    <label for="input1" class="form-label">Título</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input2" placeholder="URL da imagem" name="aula-img" autocomplete="off">
                                    <label for="input2" class="form-label">URL da ilustração</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="input3" rows="3" placeholder="Trecho de código" name="aula-video" autocomplete="off" style="height: 210px"></textarea>
                                    <label for="input3" class="form-label">Link do vídeo</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="input4" rows="3" placeholder="Texto" name="aula-texto" required autocomplete="off" style="height: 355px"></textarea>
                                    <label for="input4" class="form-label">Texto</label>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary ">Finalizar</button>
                                </div>
                            </div>
                        </div>
                        <p style="text-align: center; margin-top: 20px; margin-bottom: 0">*Obs.: incorpore o vídeo do YouTube para que a formatação fique correta.</p>
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