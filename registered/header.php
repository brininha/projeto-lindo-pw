<nav class="navbar navbar-expand-lg bg-<?=$tema?>" style="box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.141)" data-bs-theme="<?=$tema?>">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php"><img src="<?=$imagem?>" alt="Logo" width="60px" height="48px" class="animate__animated animate__tada"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse animate__animated animate__slideInLeft" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="./index.php">Home</a>
        <a class="nav-link" href="./contato.php">Fale conosco</a>
        <a class="nav-link" href="./cursos.php">Cursos</a>
        <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">Perfil</a>
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

<!-- Painel do perfil -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Suas informações</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="text-center">
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="<?=$imagemPerfil?>" style="width: 200px; height: 200px; border-radius: 100%; object-fit: cover;">
      </button>
      <br><br>
      <p><b>Usuário:</b> <?=$nome?> <?=$sobrenome?></p>
      <p><b>E-mail:</b> <?=$email?></p>
      <p><b>Data de nascimento:</b> <?=$dataNasc?></p>
      <p><b>Sexo:</b> <?=$sexo?></p>
    </div>
  </div>
</div>

<!-- Modal para alterar imagem do perfil -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Foto de perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="alterar-foto.php" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="img" class="form-label">Alterar URL da imagem:</label>
            <input type="text" class="form-control" id="img" name="foto" autocomplete="off">
            <input type="hidden" name="id" value="<?=$id?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Salvar mudanças</button>
        </div>
      </form>
    </div>
  </div>
</div>