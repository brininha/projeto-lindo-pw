<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Envio da mensagem</title>
</head>
<body>
    <table style="height: 100vh; width: 100vw">
        <tr>
            <td class="align-center text-center">
                <p>Mensagem enviada com sucesso! 👍</p>
            </td>
        </tr>
    </table>
    
    <?php
        include('../conexao.php');

        // Catando todos os dados do form através do método POST
        $nome = $_POST['contato-nome'];
        $email = $_POST['contato-email'];
        $idade = $_POST['contato-idade'];
        $assunto = $_POST['contato-assunto'];
        $mensagem = $_POST['contato-mensagem'];

        // Passando a instrução para criar novos dados
        $command = "INSERT INTO contato (nome, email, assunto, mensagem, idade) VALUES ('$nome', '$email', '$assunto', '$mensagem', '$idade')";

        // Enviando a instrução para o banco
        $connection->exec($command);
    ?>
</body>
</html>