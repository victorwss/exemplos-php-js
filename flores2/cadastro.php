<?php
try {
    include "abrir_transacao.php";
include_once "operacoes.php";

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

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $alterar = isset($_GET["chave"]);
    if ($alterar) {
        $chave = $_GET["chave"];
        $flor = buscar_flor($chave);
        if ($flor == null) die("Não existe!");
    } else {
        $chave = "";
        $flor = [
            "chave" => "",
            "cor" => "",
            "especie" => "",
            "localizacao" => "",
            "folhas" => "",
            "tipo" => ""
        ];
    }
    $validacaoOk = true;

} else if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
        header("Location: listagem.php");
        $transacaoOk = true;
    }
} else {
    die("Método não aceito");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de folhas</title>
        <script>
            function confirmar() {
                if (!confirm("Tem certeza que deseja salvar os dados?")) return;
                document.getElementById("formulario").submit();
            }

            function excluir() {
                if (!confirm("Tem certeza que deseja excluir a flor?")) return;
                document.getElementById("excluir-flor").submit();
            }
        </script>
    </head>
    <body>
        <form method="POST" action="cadastro.php" id="formulario">
            <?php if (!$validacaoOk) {?>
                <div>
                    <p>Preencha os campos corretamente!</p>
                </div>
            <?php } ?>
            <?php if ($alterar) { ?>
                <div>
                    <label for="chave">Chave:</label>
                    <input type="text" id="chave" name="chave" value="<?= $flor["chave"] ?>" readonly>
                </div>
            <?php } ?>
            <div>
                <label for="cor">Cor:</label>
                <input type="text" id="cor" name="cor" value="<?= $flor["cor"] ?>">
            </div>
            <div>
                <label for="especie">Espécie:</label>
                <input type="text" id="especie" name="especie" value="<?= $flor["especie"] ?>">
            </div>
            <div>
                <label for="local">Local:</label>
                <input type="text" id="localizacao" name="localizacao" value="<?= $flor["localizacao"] ?>">
            </div>
            <div>
                <label for="folhas">Folhas:</label>
                <input type="text" id="folhas" name="folhas" value="<?= $flor["folhas"] ?>">
            </div>
            <div>
                <label for="tipo">Tipo de flor:</label>
                <select id="tipo" name="tipo">
                    <option>Escolha...</option>
                    <?php foreach ($tipos as $tipo) { ?>
                        <option value="<?= $tipo ?>"
                            <?php if ($flor["tipo"] === $tipo) { ?>
                            selected
                            <?php } ?>
                        >
                            <?= $tipo ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <button type="button" onclick="confirmar()">Salvar</button>
            </div>
        </form>
        <?php if ($alterar) { ?>
            <form action="excluir.php"
                    method="POST"
                    style="display: none"
                    id="excluir-flor">
                <input type="hidden" name="chave" value="<?= $flor["chave"] ?>" >
            </form>
            <button type="button" onclick="excluir()">Excluir</button>
        <?php } ?>
    </body>
</html>

<?php
$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>