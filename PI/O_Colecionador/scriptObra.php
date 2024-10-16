<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('comentario-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita o envio do formulário para o servidor
            
            // Obtém o valor do comentário
            var comentario = document.getElementById('comentario').value;
            
            // Cria um novo elemento de comentário
            var comentarioElemento = document.createElement('div');
            comentarioElemento.className = 'comentario alert alert-secondary mt-3';
            comentarioElemento.textContent = comentario;
            
            // Adiciona o novo comentário à lista de comentários fixados
            document.getElementById('comentarios-fixados').appendChild(comentarioElemento);
            
            // Limpa o campo de texto
            document.getElementById('comentario').value = '';
        });
</script>