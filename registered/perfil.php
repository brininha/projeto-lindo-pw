<!-- Painel do perfil -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasPerfil" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Suas informações</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="text-center">
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalFoto">
        <img src="../images/<?=$_SESSION['imagem']?>" style="width: 200px; height: 200px; border-radius: 100%; object-fit: cover;">
      </button>
      <br><br>
      <p><b>Usuário:</b> <?=$_SESSION['nome']?> <?=$_SESSION['sobrenome']?></p>
      <p><b>E-mail:</b> <?=$_SESSION['email']?></p>
      <p><b>Data de nascimento:</b> <?=$_SESSION['dataNasc']?></p>
      <p style="margin: 0"><b>Sexo:</b> <?=$_SESSION['sexo']?></p>
      <div class="social-media">
          <a href="<?=$_SESSION['linkedin']?>" target="_blank"><img src="../images/linkedin.svg"></a>
          <a href="<?=$_SESSION['insta']?>" target="_blank"><img src="../images/instagram.svg"></a>
          <a href="<?=$_SESSION['github']?>" target="_blank"><img src="../images/github.svg"></a>
      </div>
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalDados">Alterar dados</button>
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalExcluir">Excluir conta</button>
    </div>
  </div>
</div>

<!-- Modal para alterar imagem do perfil -->
<div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalLabelFoto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabelFoto">Foto de perfil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../gravar-imagem.php" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="img" class="form-label">Alterar imagem:</label>
            <input type="file" class="form-control" id="img" name="foto" required>
            <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
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

<!-- Modal para alterar dados do perfil -->
<div class="modal fade" id="modalDados" tabindex="-1" aria-labelledby="modalLabelDados" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabelDados">Meus dados</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../alterar-dados.php" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" autocomplete="off" value=<?=$_SESSION['nome']?> required>
              </div>
              <div class="mb-3">
                <label for="sobrenome" class="form-label">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" autocomplete="off" value=<?=$_SESSION['sobrenome']?> required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="text" class="form-control" id="email" name="email" autocomplete="off" value=<?=$_SESSION['email']?> required>
              </div>
              <div class="mb-3">
                <label for="dataNasc" class="form-label">Data de Nascimento:</label>
                <input type="text" class="form-control" id="dataNasc" name="dataNasc" autocomplete="off" value=<?=$_SESSION['dataNasc']?> required>
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="insta" class="form-label">Instagram:</label>
                <input type="text" class="form-control" id="insta" name="insta" autocomplete="off" value=<?=$_SESSION['insta']?>>
              </div>
              <div class="mb-3">
                <label for="linkedin" class="form-label">Linkedin:</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" autocomplete="off" value=<?=$_SESSION['linkedin']?>>
              </div>
              <div class="mb-3">
                <label for="github" class="form-label">GitHub:</label>
                <input type="text" class="form-control" id="github" name="github" autocomplete="off" value=<?=$_SESSION['github']?>>
              </div>
              <div class="mb-3">
                <?php
                if ($_SESSION['sexo'] == "Feminino") {
                    $mulher = "checked";
                    $homem = "";
                } else {
                    $mulher = "";
                    $homem = "checked";
                }
                ?>
                <label class="form-label">Sexo:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="Feminino" <?=$mulher?>>
                    <label class="form-check-label" for="sexo1">
                        Feminino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="Masculino" <?=$homem?>>
                    <label class="form-check-label" for="sexo2">
                        Masculino
                    </label>
                </div>
              </div>
              <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
            </div>
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

<!-- Modal para excluir perfil -->
<div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="modalLabelExcluir" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabelExcluir">Excluir conta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../excluir-conta.php" method="post">
        <div class="modal-body">
          <div class="mb-3">
            <label for="senha" class="form-label">Confirme sua senha:</label>
            <input type="text" class="form-control" id="senha" name="senha" autocomplete="off" required>
          </div>
          <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Excluir</button>
        </div>
      </form>
    </div>
  </div>
</div>