<?php
try {
    include "abrir_transacao.php";
include_once "flores.php";

$flor = [
    "pk" => $_POST["pk"],
    "cor" => $_POST["cor"],
    "especie" => $_POST["especie"],
    "local" => $_POST["local"],
    "folhas" => $_POST["folhas"]
];
$id = alterar_flor($flor);

header("Location: listar-flores.php");

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>