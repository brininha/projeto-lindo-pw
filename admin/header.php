<nav class="navbar navbar-expand-lg bg-<?=$tema?>" style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.141)" data-bs-theme="<?=$tema?>">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php"><img src="<?=$imagem?>" alt="Logo" width="60px" height="48px" class="animate__animated animate__tada"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse animate__animated animate__slideInLeft" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="./index.php">Home</a>
        <a class="nav-link" href="./contato.php">Mensagens</a>
        <a class="nav-link" href="./registros.php">Usuários cadastrados</a>
      </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end animate__animated animate__slideInRight">
      <button class="btn btn-outline-primary btn-border-bg" type="button"><a class="nav-link" href="../user/index.php">Desconectar-se</a></button>
      <button type="button" class="btn btn-special">
        <form action="./mode.php" method="post">
          <select class="form-select form-select-sm" aria-label="Default select example" name="mode" onchange="this.form.submit()">
            <option selected>Modo</option>
            <option value="1">🌞</option>
            <option value="2">🌜</option>
            <option value="3">🦄</option>
          </select>
        </form>
      </button>
    </div>
  </div>
</nav>