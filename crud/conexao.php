<?php

$conn = new mysqli('localhost','joao','joao','php_mysql_iniciando',3306);

if($conn->connect_errno){
    die('Falhou em conectar:('. $conn->connect_errno .') ' . $conn->connect_error);
}

return $conn;