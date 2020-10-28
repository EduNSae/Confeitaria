<?php

$host = 'localhost';
$user_db = 'root';
$pass_db = '000000';
<<<<<<< HEAD
$name_db = 'db_casafouet';
=======
$name_db = 'tccproject';
>>>>>>> eb19e12496b7dd164b6363d84013fa545473f23c

$link = mysqli_connect( $host, $user_db, $pass_db, $name_db);
 
if (!$link) {
    
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
<<<<<<< HEAD
=======
   /* echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL; */
 
>>>>>>> eb19e12496b7dd164b6363d84013fa545473f23c
?>