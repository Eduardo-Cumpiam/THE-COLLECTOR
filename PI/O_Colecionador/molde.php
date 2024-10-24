<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>The Collector</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        include "header.php"
    ?>

    <main class="container my-5">
        <div class="row flex-row-reverse">
            <aside class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body bg-light">
                        <h2 class="card-title">Title of the Work:<h2>
                        <p class="card-text"><?= $workTitle ?></p>
                        <h2 class="card-title">Author's Name</h2>
                        <p class="card-text"><?= $workAuthor ?></p>
                        <h2 class="card-title">Year of the Work:</h2>
                        <p class="card-text"><?= $workYear ?></p>
                        <h2 class="card-title">Description:</h2>
                        <p class="card-text"><?= $workDescription ?></p>
                    </div>                    
                </div>
            </aside>
            <div class="col-md-8">
                <section class="mb-4">
                    <img src="../../imagem/" class="img-fluid" alt="Portraited image">
                </section>
                <section>
                    <h1>Leave your Comment</h1>
                    <form id="comentario-form">
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comment:</label>
                            <textarea id="comentario" name="comentario" class="form-control" rows="4" placeholder="Type your comment here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div id="comentarios-fixados" class="mt-4">
                        <h2>Fixed Comments</h2>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php
        include "footer.php"
    ?>

    <?php
        include "scriptObra.php"
    ?>
</body>
</html>
