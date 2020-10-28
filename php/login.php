<?php

session_start();
include("connect.php");

$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');
    
    $verifica = $link->query("SELECT * FROM usuario WHERE email =
        '$email' AND senha = '$senha'") or die("erro ao selecionar");
        
    if ($verifica->num_rows <= 0) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
              echo"<script>
                        alert('Login e/ou senha incorretos');
                        window.location.href='../login.html';
                    </script>";
            die();
            
    }else{
        setcookie("login",$email);
        echo "<script>
                alert('Seja bem vindo');
                window.location.href='../index.html';
              </script>
        ";
  }

exit;
?>