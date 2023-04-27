<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Servidor</title>
    </head>
    <body>
        <?php session_start(); ?>
        <?php if (isset($_SESSION["nome"])) { ?>
            <p>Oi. <?= $_SESSION["nome"] ?></p>
        <?php } elseif (isset($_POST["nome"])) { ?>
            <?php $_SESSION["nome"] = $_POST["nome"]; ?>
            <p>Ok, <?= $_SESSION["nome"] ?>, vou me lembrar de ti.</p>
        <?php } else { ?>
            <form action="<?= $_SERVER["REQUEST_URI"]?>" method="POST">
                <p>Qual é o seu nome?</p>
                <input type="text" name="nome">
                <button type="submit">Enviar</button>
            </form>
        <?php } ?>
    </body>
</html>