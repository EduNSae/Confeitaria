<?php
ini_set('default_charset','UTF-8');
include ("connect.php");
include ("VerificarLogin.php");

if(isset( $_POST['email']) && isset($_POST['senha']) ){
$email=$_POST['email'];
$password=$_POST['senha'];
$sql = "SELECT * FROM ClienteDB WHERE email='$email' and senha='$password'";
$query = $link->query($sql) or die("erro ao selecionar");
$count = mysqli_num_rows($query);
if($count == 0){

echo "<script>alert('Este registo não existe!')</script>";
echo "<script>window.open('../login.html', '_self')</script>";
}
else{
session_start();
$_SESSION['email'] = $email;
$_SESSION['senha'] = $password;

$proc_nome = $link->query("SELECT nome FROM ClienteDB WHERE email = '$email' ");
$nome_utilizador = mysqli_fetch_array($proc_nome);

$user = $nome_utilizador['nome'];

gravar($email);

echo "<script>alert('$user, \\n\\n Bem-Vindo à Casa Fouet')</script>";
echo "<script>window.open('../index.php', '_self')</script>";
}
}else{
 echo "<script>window.open('../login.html', '_self')</script>";
}
$link->close();

//Criamos uma função que recebe um texto como parâmetro.

?>