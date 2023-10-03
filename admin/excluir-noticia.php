<?php
    header("Location: ./index.php");

    include("../conexao.php");

    $id = $_GET['id'];

    $command = "DELETE FROM noticia WHERE idNoticia = $id";

    $connection->exec($command);
?>