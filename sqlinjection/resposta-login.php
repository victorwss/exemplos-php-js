<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

include_once "login3.php";

$logado = login($_POST["user"], $_POST["senha"]);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exemplo</title>
    </head>
    <body>
        <?php if ($logado) { ?>
            <h1>Você está logado como <?= $logado["nome"] ?></h1>
        <?php } else { ?>
            <h1>Você não está logado.</h1>
        <?php } ?>
    </body>
</html>

<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>