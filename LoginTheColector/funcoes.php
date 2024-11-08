<?php

function validar_admin($username, $password) {
    if ($username == "admin" && $password == "1234") {
        return true;
    }
    return false;
}

function autenticar() {
    session_start();

    // verifica se a variável de sessao para o admin está configurada
    // se nâo estover, redirecionamos o usuário para a página de loginS
    if (!isset($_SESSION["admin"])) {
        header("Location: http://localhost/LoginTheColector/admin/login.php");
    }    
}

?>