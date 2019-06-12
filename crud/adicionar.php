<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $conn = require 'conexao.php';

    $email = $_POST['email'] ?? null;

    $stmt = $conn->prepare('INSERT INTO users (email) values (?)');

    $stmt->bind_param('s', $email);

    $stmt->execute();

    header('location: /php+mysql/crud');

    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Adicionar Usuário</h1>

    <form action="" method="post">
        <input type="text" name="email">
        <input type="submit" value="enviar">
    </form>
    <p><a href="/php+mysql/crud">Voltar</a></p>
</body>
</html>