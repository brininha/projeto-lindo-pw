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
    <link rel="stylesheet" href="../css/noticia.css">
    <title>DevFox | Nova notícia</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>
    <!-- Form para criar nova notícia -->
    <div class="container-fluid">
        <table class="contact-form mt-4">
            <tr>
                <td class="align-middle">
                    <form action='./criar-noticia.php' method='post'>
                        <div class="row">
                            <h2 class="mb-4 text-center noticia-title">Crie uma nova notícia</h2>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input1" placeholder="Título" name="noticia-titulo" required autocomplete="off">
                                    <label for="input1" class="form-label">Título</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input2" placeholder="Autor" name="noticia-autor" required autocomplete="off">
                                    <label for="input2" class="form-label">Autor</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input3" placeholder="URL da imagem" name="noticia-img" required autocomplete="off">
                                    <label for="input3" class="form-label">URL da imagem</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="input4" rows="3" placeholder="Resumo" name="noticia-resumo" required autocomplete="off" style="height: 200px"></textarea>
                                    <label for="input4" class="form-label">Resumo</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="input5" rows="3" placeholder="Texto" name="noticia-texto" required autocomplete="off" style="height: 423px"></textarea>
                                    <label for="input5" class="form-label">Texto</label>
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