<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Servidor</title>
    </head>
    <body>
        <p>Página de login</p>
        <?php session_start(); ?>
        <?php if (isset($_SESSION["usuario"])) { ?>
            <p>Você já está logado.</p>
        <?php } elseif (isset($_POST["nome"]) && isset($_POST["senha"])) {
            if ($_POST["nome"] === "Victor" && $_POST["senha"] === "12345") {
                $_SESSION["usuario"] = "Victor";
                ?><p>Você acabou de logar.</p><?php
            } else {
                ?><p>Senha errada.</p><?php
            }
        } else { ?>
            <form action="<?= $_SERVER["REQUEST_URI"]?>" method="POST">
                <p>Login</p>
                <input type="text" name="nome">
                <p>Senha</p>
                <input type="password" name="senha">
                <button type="submit">Enviar</button>
            </form>
        <?php } ?>
    </body>
</html>