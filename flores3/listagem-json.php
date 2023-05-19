<?php
try {
    include "abrir_transacao.php";
include_once "operacoes.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$resultado = listar_todas_flores();
$tipos = listar_todos_tipos();
$numResultados = count($resultado);
$numTipos = count($tipos);
?>
{
    "listagem": [
        <?php foreach ($resultado as $linha) { ?>
            {
                "chave": <?= $linha["chave"] ?>,
                "cor": "<?= $linha["cor"] ?>",
                "especie": "<?= $linha["especie"] ?>",
                "localizacao": "<?= $linha["localizacao"] ?>",
                "folhas": <?= $linha["folhas"] ?>,
                "tipo": "<?= $linha["tipo"] ?>"
            }
            <?php if ($linha !== $resultado[$numResultados - 1]) echo ","; ?>
        <?php } ?>
    ],
    "tipos": [
        <?php foreach ($tipos as $tipo) { ?>
            "<?= $tipo ?>"
            <?php if ($tipo !== $tipos[$numTipos - 1]) echo ","; ?>
        <?php } ?>
    ]
}
<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>