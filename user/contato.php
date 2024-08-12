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
        include('../modo.php');
    ?>
    <!-- Links específicos -->
    <link rel="stylesheet" href="../css/user.php">
    <link rel="stylesheet" href="../css/contato.php">
    <title>DevFox | Contato</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("./header.php");
    ?>

    <!-- Form -->
    <div class="container-xxl">
        <div class="row">
            <div class="col">
                <div class="form-box animate__animated animate__fadeInLeft">
                    <form action='./mensagem-contato.php' method='post'>
                        <h2 class="mb-3">Envie uma mensagem!</h2>
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
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="row top-box animate__animated animate__fadeInRight">
                    <div class="col">
                        <h2 class="mb-3">Conecte-se</h2>
                        <p><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>&nbsp;&nbsp;(11) 2551-9484</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>&nbsp;&nbsp;devfox@gmail.com</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>&nbsp;&nbsp; Rua Feliciano de Mendonça, 290</p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>&nbsp;&nbsp;@devfox</p>
                    </div>
                    <div class="col-5 uk-flex uk-flex-middle">
                        <img src="../images/login.png">
                    </div>
                </div>
                <div class="row bottom-box animate__animated animate__fadeInRight">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.4314719847857!2d-46.40218112575054!3d-23.552942261280904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce65086cafaf55%3A0xf7da96815e7611da!2sETEC%20de%20Guaianazes!5e0!3m2!1spt-BR!2sbr!4v1693673296860!5m2!1spt-BR!2sbr" width="auto" height="auto" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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