<?php
try {
    include "abrir_transacao.php";
include_once "flores.php";

$pk = (int) $_POST["pk"];
$id = excluir_flor($pk);

header("Location: listar-flores.php");

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>