<?php

session_start();
include("connect.php");

$nome = filter_input(INPUT_POST, 'nomeAvl');
$rating = filter_input(INPUT_POST, 'rating');
$comentario =filter_input(INPUT_POST, 'comentario');

$sql = "INSERT INTO ratingdb (numeroStar, nomeUsuario, comentario, daterating)
         VALUES ('$rating', '$nome', '$comentario',CURDATE())";
    
    if ($link->query($sql) === TRUE) {
        echo "<script>
                alert('cadastrado com sucesso');
                window.location.href = '../avaliacao.php';
              </script>";
            
    } else {
        echo "<script>
                alert('Dados inseridos incorretamente');
                 window.location.href = '../avaliacao.php';
              </script>";
    }

exit;
?>