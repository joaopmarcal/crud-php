<?php

//ini_set('mysqli.allow_persistent', 'On');
//ini_set('mysqli.max_persistent', -1);

$conn = new mysqli('localhost','joao','joao','php_mysql_iniciando',3306);

//verifica se houve conexão com o banco de dados;
if($conn->connect_errno){
  die('Falhou em conectar:('. $conn->connect_errno .') ' . $conn->connect_error);
}
echo $conn->host_info;

echo '<br>';
// Comando para se criar uma tabela
$sql = 'CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
)';
if (!$conn->query($sql)){
    //echo 'Tabela já existe';
}

echo '<br>';
// Comando para se inserir dados
//$result = $conn->query('INSERT INTO users(email) value("teste@teste.com")');


// Comando para listagem de dados
$result = $conn->query('SELECT * FROM users');
echo '<ul>';
while($user = $result->fetch_assoc()){
    echo '<li>' . $user['id']. ' ' . $user['email'] . '</li>';
}
echo '</ul>';
