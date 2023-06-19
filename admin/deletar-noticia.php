<?php
    header("Location: http://localhost/projeto-lindo/admin/index.php");

    include("../conexao.php");

    $id = $_POST['id'];

    $command = "DELETE FROM noticia WHERE id = $id";

    $connection->exec($command);
?>