<?php
session_start();
include("php/connect.php");
include("php/VerificarLogin.php");

$arquivo = "php/verificar.txt";



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/reset.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fonte Pagina-->
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <!--Estilo da pagina-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!--Titulo da pagina-->
    <title>Casa Fouet</title>
    <link rel="shortcut icon" type="image/png" href="img/icons/casa.png">
</head>

<body class="fundocolor">

    <header>
        <!--Barra de navegação-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #f700e6; opacity: 90%;">
            <a class="navbar-brand" href="index.php">Casa Fouet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="precompra.html">Compra</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="avaliacao.php">Avaliação</a>
                    </li>
                </ul>
                <span class="nav-item navbar-nav">
                    <?php if (resultado()) { ?>
                        <a href="" class="nav-link active"><?php echo resultado(); ?></a>
                        <a href="login.html" class="nav-link"
                        onclick="window.location.href = 'login.html'">Logout</a> 
                        <?php } else { ?> 
                        <a href="login.html" class="nav-link active">Login</a>
                        <a href="signup.html" class="nav-link active">Cadastro</a>
                    <?php } ?>
                </span>
            </div>
        </nav>
    </header>

    <main class="fundocolor">
        <!--Carrosel-->
        <section id="carrosel">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner.jpg" class="d-block w-100 img-carrosel" alt="cozinha">
                        <div class="carousel-caption d-none d-md-block h-50" style="color: #e3f2fd;">
                            <h5 class="display-4 fonte-Carrosel">Melhor lugar para você!</h5>
                            <p class="fonte-Carrosel font-carrosel">Tendo um lugar bom para fazer os preparo dos
                                maravilhosos bolos e doces</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner1.jpg" class="d-block w-100 img-carrosel" alt="cozinha2">
                        <div class="carousel-caption d-none d-md-block h-50" style="color: #e3f2fd;">
                            <h5 class="display-4 fonte-Carrosel">Melhores aparelhagens para você!</h5>
                            <p class="fonte-Carrosel font-carrosel">Tendo os melhores equipamentos para preparar os
                                maravilhosos bolos e doces</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!--Sobre a empresa-->
        <section id="sobre" class="text-justify">
            <h1 class="text-center fonte-titulo display-4 m-top">Quem somos?!</h1>
            <p class="text-center text-justify">Somos uma nova loja de confeitaria inovando e trazendo nosso mercado
                físico para
                o digital, e aqui você poderá fazer suas encomendas dos nossos produtos sem se preocupar.</p>
        </section>
        <!--Mostruario-->
        <section class="cartões">
            <div class="album py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-size" src="img/p4.jpg" data-holder-rendered="true" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]">
                                <div class="card-body">
                                    <p class="card-text text-justify">Estes doces são para aquelas pessoas que não são
                                        muito fã de bolos,
                                        mas ainda sim gostam de algo saboroso como brigadeiros e beijinhos.Se quiserem
                                        saber mais e so
                                        clicar
                                        em ver.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://bit.ly/3hiEj9V" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-size" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/p1.jpg" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text text-justify">Este e um exemplo de bolo para criança,
                                        contendo as características escolhidas pela própria cliente. Se quiserem saber
                                        mais e só clicar em
                                        ver.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://bit.ly/3k2OEZm" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-size" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/p2.jpg" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text text-justify">Este e outro exemplo de bolo para criança,
                                        contendo as características escolhidas pela própria cliente. Se quiserem saber
                                        mais e só clicar em
                                        ver.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://bit.ly/3kkFg3N" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-size" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/p3.jpg" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text text-justify">Este e um exemplo de bolo para adolescentes,
                                        contendo as características escolhidas pela própria cliente. Se quiserem saber
                                        mais e só clicar em
                                        ver.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://bit.ly/2GHitjR" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-size" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/p5.jpg" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text text-justify">Este e um exemplo de bolo para pessoas que gostam
                                        de heróis, mas sem
                                        perde a delicadeza infantil, contendo as características escolhidas pela própria
                                        cliente. Se
                                        quiserem saber mais e só clicar em
                                        ver.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://bit.ly/3imjEDq" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-size" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/p6.jpg" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text text-justify">Este e dos nossos exemplos de bolo personalizados,
                                        contendo as características escolhidas pelo próprio cliente. Se quiserem saber
                                        mais e só clicar em
                                        ver.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://bit.ly/3hfNeck" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-size" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/p7.jpg" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text text-justify">Este e um dos exemplos de bolo para aquelas
                                        pessoas que adoram
                                        futebol,
                                        contendo as características escolhidas pelo próprio cliente. Se quiserem saber
                                        mais e só clicar em
                                        ver.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://bit.ly/2DOc7Oy" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-size" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/p8.jpg" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text text-justify">Este e um dos exemplos de bolo mais simples sem
                                        muita
                                        personalização,
                                        mas sem perde a sua delicadeza e
                                        ainda sim, contendo as características escolhidas pela própria cliente. Se
                                        quiserem saber mais e só
                                        clicar em ver.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://bit.ly/2ZoIriE" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 card-group">
                            <div class="card mb-4 shadow-sm border border-dark">
                                <img class="card-img-top img-sizeesp" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="img/p9.jpg" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text text-justify">Em parceria conosco, a <a href="https://bityli.com/OTNQ2">@docesafetoss</a> oferece
                                        um menu composto por produtos artesanais e de mais alta qualidade, esperamos que
                                        o sabor, amor e
                                        dedicação entregue as melhores e mais doces sensações para cada momento da vida!
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-card"><a href="https://www.instagram.com/docesafetoss/" class="linkdis">Ver</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="fundocolor">
        <!--Rodape da pagina-->
        <section class="rodape">
            <div class="text-center">
                <img src="img/icon.png" alt="logo" width="350px" height="300px">
                <p class="text-muted">
                    <a href="https://www.instagram.com/casafouet/" class="padding-suave">
                        <img src="img/icons/instagram.png" alt="instagram" width="30" height="30"></a>
                    <a href="https://www.facebook.com/Casa-Fouet-Confeitaria-100225865018385/" class="padding-suave">
                        <img src="img/icons/facebook.png" alt="facebook" width="30" height="30"></a>
                </p>
            </div>
        </section>
    </footer>

    <!--Direitos Autorais dos icones-->
    <div>
        Ícones feitos por
        <a href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a>
        from
        <a href="https://www.flaticon.com/br/" title="Flaticon"> www.flaticon.com</a>
    </div>

    <!--Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>