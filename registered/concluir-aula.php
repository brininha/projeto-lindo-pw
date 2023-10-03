<?php
    $idRegistro = $_GET['idRegistro'];
    $idCurso = $_GET['idCurso'];
    $idAula = $_GET['idAula'];

    include("../conexao.php");

    $comando = $connection->query("SELECT idMatricula FROM matricula WHERE idRegistro = $idRegistro AND idCurso = $idCurso");

    while ($linha = $comando->fetch()) {
        $idMatricula = $linha['idMatricula'];
    }

    header("Location: ./curso.php?id=$idCurso&idMatricula=$idMatricula");

    $comando = $connection->query("SELECT idAulaConcluida FROM aulaconcluida WHERE idMatricula = $idMatricula AND idAula = $idAula");

    while ($linha = $comando->fetch()) {
        $idAulaConcluida = $linha['idAulaConcluida'];
    }

    if (isset($idAulaConcluida)) {
        header("Location: ./cursos.php?erro2=true");
    } else {
        $comando = "INSERT INTO aulaconcluida (idMatricula, idAula) VALUES ($idMatricula, $idAula)";
        $connection->exec($comando);
    }
?>