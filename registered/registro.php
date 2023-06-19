<?php
    header('Location: http://localhost/projeto-lindo/registered/index.php');
    include('../conexao.php');
    $id = $_GET['id'];

    $registro = $connection->query("SELECT nome, sobrenome, email, dataNasc, sexo, senha, imagem FROM registrado WHERE id = $id");
    while ($linha = $registro->fetch()) {
        $nome = $linha['nome'];
        $sobrenome = $linha['sobrenome'];
        $email = $linha['email'];
        $dataNasc = $linha['dataNasc'];
        $sexo = $linha['sexo'];
        $senha = $linha['senha'];
        $imagem = $linha['imagem'];
    }

    $command = "UPDATE registroAtual SET id = $id, nome = '$nome', sobrenome = '$sobrenome', email = '$email', dataNasc = '$dataNasc', sexo = '$sexo', senha = '$senha', imagem = '$imagem'";
    
    $connection->exec($command);
?>