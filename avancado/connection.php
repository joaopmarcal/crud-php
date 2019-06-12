<?php

$conn = new mysqli('localhost','joao','joao','php_mysql_iniciando');

if($conn->connect_errno){
    die('Falhou em conectar: ' . $conn->connect_errno);
}

return $conn;