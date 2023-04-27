<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

include_once "transferir1.php";

transferir($_POST["de"], $_POST["para"], $_POST["valor"]);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exemplo</title>
    </head>
    <body>
        <h1>Transferido</h1>
    </body>
</html>

<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>