<?php

    include("../conexao.php");

    if ($_POST['alteracao'] == 'noticia') {
        $id = $_POST['noticia-id'];
        header("Location: ./noticia.php?id=$id");
        $titulo = $_POST['noticia-titulo'];
        $autor = $_POST['noticia-autor'];
        $imagem = $_POST['noticia-img'];
        $resumo = $_POST['noticia-resumo'];
        $texto = $_POST['noticia-texto'];

        $command = "UPDATE noticia SET tituloNoticia = '$titulo', autorNoticia = '$autor', imagemNoticia = '$imagem', resumoNoticia = '$resumo', textoNoticia = '$texto' WHERE idNoticia = $id";
    }

    if ($_POST['alteracao'] == 'curso') {
        $id = $_POST['curso-id'];
        header("Location: ./curso.php?id=$id");
        $titulo = $_POST['curso-titulo'];
        $prof = $_POST['curso-prof'];
        $imagem = $_POST['curso-img'];
        $nivel = $_POST['curso-nivel'];
        $duracao = $_POST['curso-duracao'];
        $descricao = $_POST['curso-desc'];

        $command = "UPDATE curso SET tituloCurso = '$titulo', profCurso = '$prof', imgCurso = '$imagem', nivelCurso = '$nivel', duracaoCurso = '$duracao', descricaoCurso = '$descricao' WHERE idCurso = $id";
    }

    if ($_POST['alteracao'] == 'aula') {
        $idCurso = $_POST['curso-id'];
        header("Location: ./curso.php?id=$idCurso");
        $id = $_POST['aula-id'];
        $titulo = $_POST['aula-titulo'];
        $imagem = $_POST['aula-img'];
        $video = $_POST['aula-video'];
        $texto = $_POST['aula-texto'];

        $command = "UPDATE aula SET tituloAula = '$titulo', imgAula = '$imagem', videoAula = '$video', textoAula = '$texto' WHERE idAula = $id";
    }

    $connection->exec($command);
?>