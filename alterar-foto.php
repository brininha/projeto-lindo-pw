<?php
    session_start();
    if ($_SESSION['nivel'] == 1) {
        header("Location: ./registered/index.php");
    } else if ($_SESSION['nivel'] == 2) {
        header("Location: ./admin/index.php");
    }
    include("./conexao.php");
    $foto = $_GET['foto'];
    $id = $_GET['id'];

    $command = "UPDATE registrado SET imagemRegistro = '$foto' WHERE idRegistro = $id";

    $connection->exec($command);

    session_start();
    $_SESSION['imagem'] = $foto;
?>