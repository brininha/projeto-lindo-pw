<?php
    header("Location: ".$_SERVER['HTTP_REFERER']."");
    include("./conexao.php");
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $dataNasc = $_POST['dataNasc'];
    $sexo = $_POST['sexo'];
    $insta = $_POST['insta'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];

    $command = "UPDATE registrado SET nomeRegistro = '$nome', sobrenomeRegistro = '$sobrenome', emailRegistro = '$email', dataNascRegistro = '$dataNasc', sexoRegistro = '$sexo', instaRegistro = '$insta', linkedinRegistro = '$linkedin', githubRegistro = '$github' WHERE idRegistro = $id";

    $connection->exec($command);

    session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['sobrenome'] = $sobrenome;
    $_SESSION['email'] = $email;
    $_SESSION['dataNasc'] = $dataNasc;
    $_SESSION['sexo'] = $sexo;
    $_SESSION['insta'] = $insta;
    $_SESSION['linkedin'] = $linkedin;
    $_SESSION['github'] = $github;
?>