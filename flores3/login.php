<?php
try {
    include "abrir_transacao.php";
    include_once "operacoes.php";

    session_start();
    $senha_errada = false;
    if (isset($_SESSION["usuario"])) {
        $usuario = $_SESSION["usuario"];
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nome"]) && isset($_POST["senha"])) {
        $usuario = login($_POST["nome"], $_POST["senha"]);
        if ($usuario) {
            $_SESSION["usuario"] = $usuario;
        } else {
            $senha_errada = true;
        }
    } else {
        $usuario = null;
    }
    if ($usuario) {
        header("Location: http://localhost/ajax/ajax15.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Servidor</title>
    </head>
    <body>
        <p>Página de login</p>
        <?php if ($senha_errada) { ?>
            <p>Senha errada.</p>
        <?php } ?>
        <form action="<?= $_SERVER["REQUEST_URI"]?>" method="POST">
            <p>Login</p>
            <input type="text" name="nome">
            <p>Senha</p>
            <input type="password" name="senha">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
<?php
$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>