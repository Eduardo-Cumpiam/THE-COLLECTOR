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
    
    <?php include "parts/navbar.php" ?>

    <main>
        <div class="container mt-5 text-center">
            <section class="homeIntro fadeInUp-animation">
                <div class="row">
                    <div class="homeMainBox col-12 d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <img src="imagem/logoHome.png" alt="Logo completa do The Collector." class="img-fluid foreground mb- mb-md-0">
                        <p class="display-6">Focused on preserving art from the Renaissance time period, The Collector brings to you lesser known artworks from the time period.</p>
                        <img src="imagem/fundohome1.png" alt="TBA" class="img-fluid background">
                    </div>
                </div>

                <div class="blankDiv"></div>

            </section>
            <br>
            <br>
            <section class="homeAbout flex-column flex-md-row justify-content-between align-items-left" id="homeAboutSection">
                <div class="row reveal">
                    <div class="homeAboutElements col-12 d-flex flex-column flex-md-row justify-content-between align-items-baseline">
                        <div class="galleryAbout text-center mb-4 mb-md-0">
                            <header><h3 class="display-6">THE GALLERY</h3></header>
                            <div class="aboutImgscont">
                                <img src="imagem/gallerypicture6.jpg" class="img-fluid mb-2">
                            </div>
                            <p class="fs-6 mt-3">Located in Bellevue, Washington, United States, the gallery has a space of 15m², together with temperature and moisture control.</p>
                        </div>

                        <div class="collectorAbout text-center">
                            <header><h3 class="display-6">THE COLLECTOR</h3></header>
                            <div class="aboutImgscont">
                                <img src="imagem/the collector.jpeg" class="img-fluid mb-2">
                            </div>
                            <p class="fs-6 mt-3">Marcel Santos is an art collector hobbyist, currently studying art preservation at <schoolname>. With 20+ years of experience in the art world as a museum manager, he decided to open his own gallery for his art collection. Owns a TikTok account.</p>
                        </div>
                    </div>
                </div>

                <div class="blankDiv"></div>

                <div id="togglebtnthinguie" class="d-flex align-items-left reveal">
                    <a class="link-dark" type="button" data-bs-toggle="collapse" data-bs-target="#galleryPlus" aria-expanded="false" aria-controls="galleryPlus">
                    Location and Pictures     <span class="arrow-icon">&#10095;</span>
                    </a>
                  </div>
                  <div class="collapse mt-3 reveal" id="galleryPlus">
                    <div class="galleryPlus">
                        <div class="d-flex row justify-content-around">
                            <div class="map me-4 col order-2 order-md-1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86094.32819821405!2d-122.23362227178838!3d47.597982632852705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906bcfa3a66041%3A0xbacf5482ead00765!2sBellevue%2C%20WA%2C%20USA!5e0!3m2!1sen!2sbr!4v1718464404240!5m2!1sen!2sbr" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="big-gallery col order-1 order-md-2 mb-4">
                                <img id="bigImage" src="imagem/gallerypicture6.jpg" class="img-fluid mb-2">
                                <div class="pictureFolder mt-2">
                                    <img src="imagem/gallerypicture2.jpg" class="img-thumbnail" onclick="changeImage('imagem/gallerypicture2.jpg')">
                                    <img src="imagem/gallerypicture3.jpg" class="img-thumbnail" onclick="changeImage('imagem/gallerypicture3.jpg')">
                                    <img src="imagem/gallerypicture4.jpg" class="img-thumbnail" onclick="changeImage('imagem/gallerypicture4.jpg')">
                                    <img src="imagem/gallerypicture5.jpg" class="img-thumbnail" onclick="changeImage('imagem/gallerypicture5.jpg')">
                                    <img src="imagem/gallerypicture6.jpg" class="img-thumbnail" onclick="changeImage('imagem/gallerypicture6.jpg')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blankDiv"></div>
            </section>
        </div>
    </main>
    <?php include "parts/footer.php" ?>

    <?php include "parts/scripts.php" ?>
</body>
</html>
