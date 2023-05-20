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

    $json = file_get_contents("php://input");
    $dados = json_decode($json, true);
    $alterar = isset($dados["chave"]);

    if ($alterar) {
        $flor = [
            "chave" => (int) $dados["chave"],
            "cor" => $dados["cor"],
            "especie" => $dados["especie"],
            "localizacao" => $dados["localizacao"],
            "folhas" => (int) $dados["folhas"],
            "tipo" => $dados["tipo"]
        ];
        $validacaoOk = validar($flor);
        if ($validacaoOk) alterar_flor($flor);
    } else {
        $flor = [
            "cor" => $dados["cor"],
            "especie" => $dados["especie"],
            "localizacao" => $dados["localizacao"],
            "folhas" => (int) $dados["folhas"],
            "tipo" => $dados["tipo"]
        ];
        $validacaoOk = validar($flor);
        if ($validacaoOk) $id = inserir_flor($flor);
    }

    if ($validacaoOk) {
        $transacaoOk = true;
        echo "OK";
    } else {
        echo "ERRO";
    }
} else {
    die("Método não aceito");
}

} finally {
    include "fechar_transacao.php";
}
?>