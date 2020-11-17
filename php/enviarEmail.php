
<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "eduardo.wordnet@gmail.com";
$subject = "Contato - Via Site Casa Fouet";
$body = "Nome: ". $nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From:duprogramgit@gmail.com"."\r\n"
          ."Reply-to:".$email."\r\n"
          ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

  echo "<script>alert('Não foi possivel enviar!')</script>";
  echo "<script>window.open('../index.php', '_self')</script>";

}else{
  
  echo "<script>alert('Obrigado por entra em contato')</script>";
  echo "<script>window.open('../precompra.html', '_self')</script>";
}

}

?>