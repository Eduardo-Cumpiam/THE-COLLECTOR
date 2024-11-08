<?php
    session_start();

    include "funcoes.php";

    if (validar_admin($_POST["username"], $_POST["password"])) {
        $_SESSION["admin"] = $_POST["usuario"];
        header("Location: http://localhost/THE-COLLECTOR/LoginTheColector/admin/login.php");    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ACESSO NEGADO</title>
    </head>
    <body>
        <h1 style="color: red;">ACESSO NEGADO</h1>
    </body>
</html>