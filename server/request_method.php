<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Servidor</title>
    </head>
    <body>
        <?php
            /*if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $valor = $_POST["nome"];
            } else {
                $valor = $_GET["nome"];
            }*/
            if (isset($_REQUEST["nome"])) {
                $valor = $_REQUEST["nome"];
            } else {
                $valor = "Sem nome";
            }
        ?>
        <p><?= $valor ?></p>
        <p><?= $_SERVER["REQUEST_METHOD"] ?></p>
        <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="POST">
            <input type="text" name="nome" />
            <button type="submit">Enviar</submit>
        </form>
    </body>
</html>