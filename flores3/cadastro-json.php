<?php
try {
    include "abrir_transacao.php";
include_once "operacoes.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$tipos = listar_todos_tipos();

function validar($flor) {
    global $tipos;
    return strlen($flor["cor"]) >= 4
        && strlen($flor["cor"]) <= 30
        && strlen($flor["especie"]) >= 4
        && strlen($flor["especie"]) <= 50
        && strlen($flor["localizacao"]) >= 4
        && strlen($flor["localizacao"]) <= 200
        && $flor["folhas"] >= 0
        && $flor["folhas"] <= 5000000
        && in_array($flor["tipo"], $tipos, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $alterar = isset($_POST["chave"]);

    if ($alterar) {
        $flor = [
            "chave" => $_POST["chave"],
            "cor" => $_POST["cor"],
            "especie" => $_POST["especie"],
            "localizacao" => $_POST["localizacao"],
            "folhas" => $_POST["folhas"],
            "tipo" => $_POST["tipo"]
        ];
        $validacaoOk = validar($flor);
        if ($validacaoOk) alterar_flor($flor);
    } else {
        $flor = [
            "cor" => $_POST["cor"],
            "especie" => $_POST["especie"],
            "localizacao" => $_POST["localizacao"],
            "folhas" => $_POST["folhas"],
            "tipo" => $_POST["tipo"]
        ];
        $validacaoOk = validar($flor);
        if ($validacaoOk) $id = inserir_flor($flor);
    }

    if ($validacaoOk) {
        $transacaoOk = true;
    }
} else {
    die("Método não aceito");
}

} finally {
    include "fechar_transacao.php";
}
?>OK