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
    <link rel="stylesheet" href="../css/signup.css">
    <title>DevFox | Cadastro</title>
</head>
<body>
    <!-- Form de cadastro -->
    <div class="container-fluid">
        <table style="height: 100vh; width: 100vw;">
            <tr>
                <td class="align-middle">
                    <div class="form-alignment">
                        <h2 class="mb-3">Junte-se a nós!</h2>
                        <form action="./cadastrar.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="Nome" name="nome">
                                        <label>Nome</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome">
                                        <label>Sobrenome</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email">
                                        <label>E-mail</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" placeholder="Data de nascimento" name="dataNasc">
                                        <label>Data de nascimento</label>
                                    </div>
                                    <div class="mb-3">
                                        <p style="margin: 8px">Sexo</p>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Feminino">
                                            <label class="form-check-label" for="inlineRadio1">Feminino</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Masculino">
                                            <label class="form-check-label" for="inlineRadio2">Masculino</label>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha">
                                        <label for="floatingPassword">Senha</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark">Cadastrar</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>