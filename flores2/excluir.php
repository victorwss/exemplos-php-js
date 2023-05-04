<?php
try {
    include "abrir_transacao.php";
include_once "operacoes.php";

$chave = (int) $_POST["chave"];
$id = excluir_flor($chave);

header("Location: listagem.php");

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>