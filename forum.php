<?php
session_start();
include("php/connect.php");

$sql = "Select * From ratingdb";

$sqlBuscar = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Casa Fouet</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-faded fixed-top" style="background-color: #f700e6; border-color: #000;">
            <a class="navbar-brand fonte-titulo-2" href="index.html">Casa Fouet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active a-style" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                    <a class="nav-link a-style" href="produtos.html">Produto</a>
                    <a class="nav-link a-style" href="forum.php">Forum</a>
                    <a class="nav-link a-style" href="login.html">Login</a>
                    <a class="nav-link a-style" href="#" data-toggle="modal" data-target="#Contatos">Contato</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container text-center ">
            <div class="row">

                <div class="col-12 ">
                    <h1 class="m-top">Avaliações</h1>
                    <form action="php/ratingInsert.php" name="form" method="POST">
                        <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                            <input type="radio" id="star5" name="rating" value="5" data-index="4" /><label for="star5" title="5 star"></label>
                            <input type="radio" id="star4" name="rating" value="4" data-index="3" /><label for="star4" title="4 star"></label>
                            <input type="radio" id="star3" name="rating" value="3" data-index="2" /><label for="star3" title="3 star"></label>
                            <input type="radio" id="star2" name="rating" value="2" data-index="1" /><label for="star2" title="2 star"></label>
                            <input type="radio" id="star1" name="rating" value="1" data-index="0" /><label for="star1" title="1 star"></label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control m-bot" placeholder="Digite seu nome: (obrigatório)" name="nomeAvl" required>
                            <textarea class="char-count form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descreva sua experiência: (opcional)" name="comentario" maxlength="250"></textarea>
                            <p class="text-muted" style="margin-bottom: 0;"><small><span name="comentario">250</span></small> caracteres restantes</p>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-card m-bot" id="botao-postar">Postar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12" id="result">
                    <div class="text-center">
                        <?php
                        while ($dado = $sqlBuscar->fetch_array()) {
                        ?>
                            <div class="border rounded-pill m-bot" style="border-color: #f700e6!important;">
                                <?php
                                if ($dado["numeroStar"] == 5) { ?>
                                    <p style="margin-bottom: 2px; font-weight: bold; size: 18px;">
                                        <?php echo $dado["nomeUsuario"]; ?></p>
                                    <?php
                                    for ($i = 0; $i < $dado["numeroStar"]; $i++) { ?>
                                        <?php echo "<img src='img/star1.png'>"; ?>
                                    <?php } ?>
                                    <p>'<?php echo $dado["Comentario"]; ?>'</p>
                                <?php } ?>
                                <?php
                                if ($dado["numeroStar"] == 4) { ?>
                                    <p style="margin-bottom: 2px; font-weight: bold; size: 18px">
                                        <?php echo $dado["nomeUsuario"]; ?></p>
                                    <?php
                                    for ($i = 0; $i < $dado["numeroStar"]; $i++) { ?>
                                        <?php echo "<img src='img/star1.png'>"; ?>
                                    <?php } ?>
                                    <p style="margin-bottom: 2px;">'<?php echo $dado["Comentario"]; ?>'</p>
                                <?php } ?>
                                <?php
                                if ($dado["numeroStar"] == 3) { ?>
                                    <p style="margin-bottom: 2px; font-weight: bold; size: 18px">
                                        <?php echo $dado["nomeUsuario"]; ?></p>
                                    <?php
                                    for ($i = 0; $i < $dado["numeroStar"]; $i++) { ?>
                                        <?php echo "<img src='img/star1.png'>"; ?>
                                    <?php } ?>
                                    <p>'<?php echo $dado["Comentario"]; ?>'</p>
                                <?php } ?>
                                <?php
                                if ($dado["numeroStar"] == 2) { ?>
                                    <p style="margin-bottom: 2px; font-weight: bold; size: 18px">
                                        <?php echo $dado["nomeUsuario"]; ?></p>
                                    <?php
                                    for ($i = 0; $i < $dado["numeroStar"]; $i++) { ?>
                                        <?php echo "<img src='img/star1.png'>"; ?>
                                    <?php } ?>
                                    <p>'<?php echo $dado["Comentario"]; ?>'</p>
                                <?php } ?>
                                <?php
                                if ($dado["numeroStar"] == 1) { ?>
                                    <p style="margin-bottom: 2px; font-weight: bold; size: 18px">
                                        <?php echo $dado["nomeUsuario"]; ?></p>
                                    <?php
                                    for ($i = 0; $i < $dado["numeroStar"]; $i++) { ?>
                                        <?php echo "<img src='img/star1.png'>"; ?>
                                    <?php } ?>
                                    <p>'<?php echo $dado["Comentario"]; ?>'</p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <section class="rodape">
            <div class="text-center">
                <img src="img/icon.png" alt="logo" width="350px" height="300px">
                <p class="text-muted">© 2020</p>
            </div>
        </section>
    </footer>

    <div class="modal fade" id="Contatos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Entre em Contato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nome Completo</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Endereço de e-mail</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@email.com">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Telefone</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="(XX) XXXXX-XXXX">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Faça seu comentário</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite seu comentário aqui"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-card">Enviar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.char-count').keyup(function() {
                var maxLength = parseInt($(this).attr('maxlength'));
                var length = $(this).val().length;
                var newLength = maxLength - length;
                var name = $(this).attr('name');
                $('span[name="' + name + '"]').text(newLength);
            });
        });
    </script>
</body>

</html>