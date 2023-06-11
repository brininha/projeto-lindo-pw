<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links de todos os arquivos CSS -->
    <?php
        include("links.php");
    ?>
    <link rel="stylesheet" href="./css/login.css">
    <title>DevFox | Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <table style="height: 100vh; width: 50vw">
                    <tr>
                        <td class="align-middle">
                            <div class="form-alignment">
                                <h2 class="mb-3">Bem-vindo de volta!</h2>
                                <form>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="E-mail">
                                        <label for="floatingInput">E-mail</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
                                        <label for="floatingPassword">Senha</label>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Entrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-6">
                <table style="height: 100vh; width: 50vw">
                    <tr>
                        <td class="align-middle">
                            <div class="imagem animate__animated animate__fadeIn">
                                <img width="400px" src="./images/login.png">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>