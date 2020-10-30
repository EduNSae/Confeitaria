<?php

session_start();
include("connect.php");

$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$city = $_POST['cidade'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$date = $_POST['date'];

$sql = "CALL Insere('$nome', '$sobrenome', '$endereco', '$cep', '$estado', '$city', '$email', '$senha', CURDATE(), '$date')";
            
    if ($link->query($sql) === TRUE) {
        echo "<script>
                alert('cadastrado com sucesso');
                window.location.href = '../login.html';
              </script>";
    }else {
        echo "<script>
                alert('Dados inseridos incorretamente');
                 window.location.href = '../signup.html';
              </script>";
    }

exit;
