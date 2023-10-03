<?php
        include('../conexao.php');
        $consulta = $connection->query('SELECT tema, imagem FROM modo');
        while ($linha = $consulta->fetch()) {
            $tema = $linha['tema'];
            $imagem = $linha['imagem'];
        }
?>