

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>The Collector</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/estiloLogin.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="bg-light py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <div class="logo">
                            <img src="imagem/logoMini.png" alt="logo do The Collector. Um C com um adorno renascentista no fundo." class="img-fluid">
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                    
                            <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="home.html#homeAboutSection">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>                          
    <div>
        <main class="container-fluid p-5">
            <div class="row">
                <section class="container d-flex justify-content-center align-items-center "> <!-- vh-100 para ocupar a altura total da tela -->
                    <div class="col-md-6 col-lg-4 loginForm text-center"> <!-- Ajuste de tamanho da coluna -->
                        <header>
                            <h1 class="display-4 mt-4">Dashboard</h1>
                        </header>
                        <form class="form-horizontal mb-4 mx-auto text-center" method="POST" action="validar.php">
                            <fieldset class="d-flex flex-column justify-content-center align-items-center">
                                
                                <div class="form-group col-md-10 col-xs-10 mb-3">
                                    <label for="username" class="form-label">Usuário:</label>  
                                    <input id="username" name="username" type="text" placeholder="Digite seu usuário" class="form-control" required="">
                                </div>
                                
                                
                                <div class="form-group col-md-10 col-xs-10 mb-3">
                                    <label for="password" class="form-label">Senha:</label>  
                                    <input id="password" name="password" type="password" placeholder="Digite sua senha" class="form-control" required="">
                                </div>
                
                                
                                <div class="btn-login">
                                    <button id="login" name="login" class="btn btn-primary">Entrar</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </main>
    </div>
    <footer class="bg-light py-3">
        <div class="container text-center">
            <p>&copy; 2024. All rights reserved.</p>
            <p>Contact: <a href="mailto:the.collector@outlook.com">the.collector@outlook.com</a></p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
