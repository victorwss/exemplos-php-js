<?php
try {
    include "abrir_transacao.php";
include_once "flores.php";

$idflor = $_GET["idflor"];
$flor = buscar_flor($idflor);
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
        </script>
    </head>
    <body>
        <form method="POST" action="alterar-flor-post.php" id="formulario">
            <div>
                <label for="pk">Chave:</label>
                <input type="text" id="pk" name="pk" value="<?= $flor["pk"] ?>" readonly>
            </div>
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
                <input type="text" id="local" name="local" value="<?= $flor["local_onde_foi_plantado"] ?>">
            </div>
            <div>
                <label for="folhas">Folhas:</label>
                <input type="text" id="folhas" name="folhas" value="<?= $flor["numero_folhas"] ?>">
            </div>
            <div>
                <button type="button" onclick="confirmar()">Salvar</button>
            </div>
        </form>
    </body>
</html>

<?php
$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>