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
    <!-- Links especificos -->
    <link rel="stylesheet" href="../css/login.css">
    <title>DevFox | Login</title>
</head>
<body>
    <!-- Form de login -->
    <div class="container-fluid">
        <div class="row">
            <div class="col form-layout">
                <table style="height: 100vh; width: fit-content; margin: auto; text-align: center;">
                    <tr>
                        <td>
                            <div class="left-text">
                                <h1 class="mb-3 text-center">Login</h1>
                                <p class="mb-3 text-center">Bem-vindo de volta!</p>
                            </div>
                        </td>
                        <td>
                            <div class="form-alignment">
                                <form action="./logar.php" method="post">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email">
                                        <label for="floatingInput">E-mail</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha">
                                        <label for="floatingPassword">Senha</label>
                                    </div>
                                    <button type="submit" class="btn btn-light">Entrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-5 img-layout animate__animated animate__fadeIn">
                <img class="imagem" src="../images/login-alternativo.png">
            </div>
        </div>      
    </div>
    <!-- JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>