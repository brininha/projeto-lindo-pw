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
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/user.php">
    <link rel="stylesheet" href="../css/contato.css">
    <title>DevFox | Contato</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>

    <!-- Form -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="contact-form">
                    <tr>
                        <td class="align-middle">
                            <form action='./mensagem-contato.php' method='post'>
                                <h2 class="mb-3">Entre em contato conosco!</h2>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input1" placeholder="Nome" name="contato-nome" required autocomplete="off">
                                    <label for="input1" class="form-label">Nome</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="input2" placeholder="E-mail" name="contato-email" required autocomplete="off">
                                    <label for="input2" class="form-label">E-mail</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input3" placeholder="Telefone" name="contato-telefone" required autocomplete="off">
                                    <label for="input3" class="form-label">Telefone</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="input4" placeholder="Assunto" name="contato-assunto" required autocomplete="off">
                                    <label for="input4" class="form-label">Assunto</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="input5" rows="3" placeholder="Mensagem" name="contato-mensagem" required autocomplete="off" style="height: 100px"></textarea>
                                    <label for="input5" class="form-label">Mensagem</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col">
                <div class="imagem animate__animated animate__fadeInBottomRight">
                    <img src="../images/contato.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Rodapé -->
    <?php
        include('./footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>