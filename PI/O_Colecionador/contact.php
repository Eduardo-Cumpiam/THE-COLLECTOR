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
    <div>
        <main class="container-fluid p-5">
            <div class="row">
            <section class="container d-flex justify-content-between align-items-center col-12 flex-column flex-md-row">
                <div class="imgContact-container col d-flex justify-content-center">
                    <img src="imagem/venusdetail.jpg" class="img-fluid imgContact">
                </div>
                <div class="col-md-8 contactForm text-center"> <!-- Adjusted column size and added text-center -->
                    <header>
                        <h2 class="display-2 mt-4">Contact</h2>
                    </header>
                    <p>Want to visit us? Have any questions?
                        <br>Throw us an email!</p>
                    <form class="form-horizontal mb-4 mx-auto text-center">
                        <fieldset class="d-flex flex-column justify-content-center align-items-center">
                            <!-- Text input-->
                            <div class="form-group col-md-10 col-xs-10 mb-3" >
                                <label for="name" class="form-label">Name:</label>  
                                <input id="name" name="name" type="text" placeholder="your name!" class="form-control" required="">
                            </div>
                            
                            <!-- Text input-->
                            <div class="form-group col-md-10 col-xs-10 mb-3">
                                <label for="email" class="form-label">E-mail:</label>  
                                <input id="email" name="email" type="email" placeholder="youremail@domain.com" class="form-control" required="">
                            </div>
                            
                            <!-- Textarea -->
                            <div class="form-group col-md-10 col-xs-10 mb-3">
                                <label for="message" class="form-label">Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="4">I'm contacting The Collector...</textarea>
                            </div>
            
                            <!-- Button -->
                            <div class="form-group ">
                            <button id="send" name="send" class="btn btn-secondary" onclick="alert('mensagem enviada!')">Send</button>
                            </div>
            
                        </fieldset>
                    </form>
                </div>
                <div class="imgContact-container col d-flex justify-content-center">
                    <img src="imagem/thebark.png" class="img-fluid imgContact">
                </div>
            </section>
            
            
            </div>
        </main>
    </div>
    <?php
        include "footer.php"
    ?>
    
    <?php
        include "script.php"
    ?>
</body>
</html>
