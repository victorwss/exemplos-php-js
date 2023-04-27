<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Servidor</title>
    </head>
    <body>
        <p>O nome do servidor é <?= $_SERVER["SERVER_NAME"] ?></p>
        <p>O IP do cliente parece ser <?= $_SERVER["REMOTE_ADDR"] ?></p>
        <p>O caminho invocado é <?= $_SERVER["REQUEST_URI"] ?></p>
        <p>O host do servidor é <?= $_SERVER["HTTP_HOST"] ?></p>
        <?php $url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>
        <p>O caminho completo é <?= $url ?></p>
        <p>Este arquivo está em <?= __DIR__ ?></p>
    </body>
</html>