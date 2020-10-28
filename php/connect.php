<?php

$host = 'localhost';
$user_db = 'root';
$pass_db = '000000';
$name_db = 'tccproject';

$link = mysqli_connect( $host, $user_db, $pass_db, $name_db);
 
if (!$link) {
    
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
   /* echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL; */
 
?>