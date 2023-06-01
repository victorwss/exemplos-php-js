<?php
try {
    include "abrir_transacao.php";
include_once "operacoes.php";

$json = file_get_contents("php://input");
$dados = json_decode($json, true);
$chave = (int) $dados["chave"];
excluir_flor($chave);

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>