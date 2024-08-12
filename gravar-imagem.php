<?php
    include('./conexao.php');
    
    if (isset($_FILES['foto'])) {
        $nomeImg = $_FILES['foto']['name'];
        $tamImg = $_FILES['foto']['size'];
        $nomeTempImg = $_FILES['foto']['tmp_name'];
        $erroImg = $_FILES['foto']['error'];
        if ($erroImg == 0) {
            if (is_uploaded_file($nomeTempImg)) {
                if (move_uploaded_file($nomeTempImg, "images/$nomeImg")) {
                    $url = $nomeImg;
                    $id = $_POST['id'];
                    header("Location: ./alterar-foto.php?foto=$url&id=$id");
                } else {
                    echo "Falha ao mover a imagem.";
                }
            } else {
                echo "Falha ao receber a imagem.";
            }
        } else {
            echo "Erro no envio: $erroImg";
        }
    } else {
        echo "Imagem não encontrada.";
    }
?>