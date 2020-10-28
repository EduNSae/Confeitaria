<?php

session_start();
include("connect.php");

$nomeComplete = filter_input(INPUT_POST, 'nome');
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$date = $_POST['date'];

$sql = "INSERT INTO ClienteDB (nome, email, senha, endereco,dateCriacao,dateNasc)
         VALUES ('$nomeComplete','$email', '$senha', '$endereco', CURDATE(), '$date')";
    
    if ($link->query($sql) === TRUE) {
        echo "<script>
                alert('cadastrado com sucesso');
                window.location.href = '../login.html';
              </script>";
            
    } else {
        echo "<script>
                alert('Dados inseridos incorretamente');
                 window.location.href = '../signup.html';
              </script>";
    }

exit;
?>
