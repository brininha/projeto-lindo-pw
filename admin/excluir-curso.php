<?php
    header("Location: ./cursos.php");

    include("../conexao.php");

    $id = $_GET['id'];

    $command = "DELETE FROM curso WHERE idCurso = $id";

    $connection->exec($command);
?>