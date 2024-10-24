<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>The Collector</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        include "header.php"
    ?>
    <main class="container-fluid p-5">
        <section class="obras-destaque mb-5">
            <div class="container">
                <h2 class="text-center mb-4" id="highlights">Highlights</h2>
                <div class="row obras-container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 carousel-image" src="imagem/PINTURAS FIXAS/O MARTIRIO DE SAO SEBASTIAO.png" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>The Martyrdom of Saint Sebastian</h5>
                                    <p>The most famous work of Antonio Pollaiuolo, to learn more <a href="pages/pinturas/omartiriodesaosebastiao.html">click here!</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 carousel-image" src="imagem/PINTURAS FIXAS/ANUNCIACAO.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Annunciation</h5>
                                    <p>A serene portrayal of the Virgin Mary accepting her divine motherhood, to learn more <a href="pages/pinturas/anunciacao.html">click here!</a></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 carousel-image" src="imagem/LITERATURA/LA SOL FA RE MI.jpeg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Missa Lá Sol Fá Ré Mi</h5>
                                    <p>One of the most renowned examples of the soggetto cavato technique, to learn more <a href="pages/literaturas/lasolfamire.html">click here!</a></p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

                    <div class="blankDiv"></div>

        <section class="pinturas mb-5 reveal" id="gallery">
            <div class="container">
                <h1 class="text-center mb-4">Paintings</h1>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/acrucificacao.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/A CRUCIFICACAO.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>The Crucifixion</h5>
                                <p>1504 - Luca Signorelli</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/adoracaodosmagos.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/ADORACAO DOS MAGOS.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Adoration of the Magi</h5>
                                <p>1475 - Sandro Botticelli</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/adoracaoreismagos.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/ADORACAO DOS REIS MAGOS.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Adoration of the Kings</h5>
                                <p>1485/1488 - Domenico Ghirlandaio</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/anunciacao.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/ANUNCIACAO.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Annunciation</h5>
                                <p>1443 - Fra Filippo Lippi</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/madonnaandchild.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/MADONNA AND CHILD.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Madonna and Child</h5>
                                <p>1512 - Francesco Francia</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/omartiriodesaosebastiao.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/O MARTIRIO DE SAO SEBASTIAO.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>The Martyrdom of Saint Sebastian</h5>
                                <p>1475 - Antonio Pollaiuolo</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/retratodeumcavaleiro.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/RETRATO DE UM CAVALEIRO.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Portrait of a Knight</h5>
                                <p>1510 - Vittore Capaccio</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/retratodeumadama.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/Retrato de uma Dama.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Portrait of a Lady</h5>
                                <p>1470 - Piero del Pollaiuolo</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/saogeronimonodeserto.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/SAO GERONIMO NO DESERTO.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Saint Jerome in the Desert</h5>
                                <p>1470 - Cosimo Tura</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/testamentoemortedemoises.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/TESTEAMENTO E MORTE DE MOISES.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Testament and Death of Moses</h5>
                                <p>1482 - Luca Signorelli</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/pinturas/ultimaceia.html">
                        <div class="card">
                            <img src="imagem/PINTURAS FIXAS/ULTIMA CEIA.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Last Supper</h5>
                                <p>1447 - Andrea del Castagno</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

                    <div class="blankDiv"></div>

        <section class="esculturas mb-5 reveal">
            <div class="container">
                <h1 class="text-center mb-4">Sculptures</h1>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <a href="pages/esculturas/davi.html">
                        <div class="card">
                            <img src="imagem/esculturas/DAVI.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>David</h5>
                                <p>1501 - Michelangelo</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/esculturas/pieta.html">
                        <div class="card">
                            <img src="imagem/esculturas/Pieta.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Pietà</h5>
                                <p>1498 - Michelangelo</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
                    <div class="blankDiv"></div>

        <section class="literatura mb-5 reveal">
            <div class="container">
                <h1 class="text-center mb-4">Literature</h1>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <a href="pages/literaturas/atempestade.html">
                        <div class="card">
                            <img src="imagem/literatura/A TEMPESTADE.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>The Tempest</h5>
                                <p>1611 - William Shakespeare</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/literaturas/decameron.html">
                        <div class="card">
                            <img src="imagem/literatura/DECAMERON.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Decameron</h5>
                                <p>1353 - Giovanni Boccaccio</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/literaturas/lasolfamire.html">
                        <div class="card">
                            <img src="imagem/literatura/LA SOL FA RE MI.jpeg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Missa Lá Sol Fá Ré Mi</h5>
                                <p>1502 - Josquin de Prez</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/literaturas/oprincipe.html">
                        <div class="card">
                            <img src="imagem/literatura/O PRINCIPE.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>The Prince</h5>
                                <p>1532 - Nicolau Machiavelli</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-4">
                        <a href="pages/literaturas/orlandofurioso.html">
                        <div class="card">
                            <img src="imagem/literatura/Orlando-Furioso.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5>Orlando Furioso</h5>
                                <p>1516 - Ludovico Ariosto</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php
        include "footer.php"
    ?>
    
    <?php
        include "script.php"
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
</body>
</html>