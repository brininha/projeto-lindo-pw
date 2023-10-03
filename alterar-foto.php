<?php
    header("Location: ".$_SERVER['HTTP_REFERER']."");
    include("./conexao.php");
    $foto = $_POST['foto'];
    $id = $_POST['id'];

    $command = "UPDATE registrado SET imagemRegistro = '$foto' WHERE idRegistro = $id";

    $connection->exec($command);

    session_start();
    $_SESSION['imagem'] = $foto;
?>