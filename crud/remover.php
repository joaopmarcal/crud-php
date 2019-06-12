<?php

$conn = require 'conexao.php';

$id = $_GET['id'] ?? null;

$stmt = $conn->prepare('DELETE FROM users WHERE id=?');

$stmt->bind_param('i', $id);

$stmt->execute();

header('location: /php+mysql/crud');