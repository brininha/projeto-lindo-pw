<?php
    header("Location: ./cursos.php");
    include("../conexao.php");

    $idRegistro = $_GET['idUser'];
    $idCurso = $_GET['idCurso'];

    $comando = $connection->query("SELECT idMatricula FROM matricula WHERE idRegistro = $idRegistro AND idCurso = $idCurso");

    while ($linha = $comando->fetch()) {
        $idMatricula = $linha['idMatricula'];
    }

    if (isset($idMatricula)) {
        header("Location: ./cursos.php?erro=true");
    } else {
        $comando = "INSERT INTO matricula (progresso, idCurso, idRegistro) VALUES (0, $idCurso, $idRegistro)";
        $connection->exec($comando);
    }
?>