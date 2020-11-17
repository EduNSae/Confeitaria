<?php
include("connect.php");
$nome;

function gravar($texto)
{

    $arquivo = "verificar.txt";

    $fp = fopen($arquivo, "w");

    fwrite($fp, $texto);

    fclose($fp);
}

function entrar()
{
    $arquivo = "php/verificar.txt";
    $fp = fopen($arquivo, "r");

    $conteudo = fread($fp, filesize($arquivo));

    fclose($fp);

    return $conteudo;
}

function limpar()
{
    $arquivo = "php/verificar.txt";

    $fp = fopen($arquivo, "w");

    fwrite($fp, "1");

    fclose($fp);
}

function resultado()
{
    include("connect.php");

    $sql2 = "SELECT * FROM ClienteDB";


    $sqlBuscarNome = mysqli_query($link, $sql2);

    while ($dados = $sqlBuscarNome->fetch_array()) {
        $verificado;
        if ($dados['email'] == entrar()) {
            $verificado = true;
            $verificado = $dados['nome'];
            return $verificado;
        } else {
            gravar(" ");
            $verificado = false;
            return $verificado;
        }
    }
}
