<?php
    header("Location: http://localhost/projeto-lindo/registered/index.php");
    include("../conexao.php");
    $foto = $_POST['foto'];
    $id = $_POST['id'];

    $command = "UPDATE registrado SET imagem = '$foto' WHERE id = $id";

    $connection->exec($command);

    $command = "UPDATE registroAtual SET imagem = '$foto'";

    $connection->exec($command);
?>