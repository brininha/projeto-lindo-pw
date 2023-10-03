<?php
    session_start();
    $emailLogin = $_POST['email'];
    $senhaLogin = $_POST['senha'];
    include('../conexao.php');
        $consulta = $connection->query("SELECT * FROM registrado WHERE emailRegistro = '$emailLogin' AND senhaRegistro = '$senhaLogin'");
        while ($linha = $consulta->fetch()) {
            $id = $linha['idRegistro'];
            $nome = $linha['nomeRegistro'];
            $sobrenome = $linha['sobrenomeRegistro'];
            $email = $linha['emailRegistro'];
            $dataNasc = $linha['dataNascRegistro'];
            $sexo = $linha['sexoRegistro'];
            $senha = $linha['senhaRegistro'];
            $img = $linha['imagemRegistro'];
            $nivel = $linha['nivelRegistro'];
            $insta = $linha['instaRegistro'];
            $linkedin = $linha['linkedinRegistro'];
            $github = $linha['githubRegistro'];
        }

    if (isset($id)) {
        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['sobrenome'] = $sobrenome;
        $_SESSION['email'] = $email;
        $_SESSION['dataNasc'] = $dataNasc;
        $_SESSION['sexo'] = $sexo;
        $_SESSION['senha'] = $senha;
        $_SESSION['imagem'] = $img;
        $_SESSION['insta'] = $insta;
        $_SESSION['linkedin'] = $linkedin;
        $_SESSION['github'] = $github;
        if ($nivel == 1) {
            header("Location: http://localhost/projeto-lindo/registered/index.php");
        } else if ($nivel == 2) {
            header("Location: http://localhost/projeto-lindo/admin/index.php");
        }
    } else {
        header("Location: http://localhost/projeto-lindo/user/login.php");
    }
?>