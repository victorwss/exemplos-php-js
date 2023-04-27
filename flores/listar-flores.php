<?php
try {
    include "abrir_transacao.php";
include_once "flores.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tabela</title>
        <script>
            function excluir(pk) {
                if (!confirm("Tem certeza que deseja excluir a flor?")) return;
                document.getElementById("excluir-flor-" + pk).submit();
            }
        </script>
    </head>
    <body>
        <?php $resultado = listar_todas_flores(); ?>
        <table>
            <tr>
                <th scope="column">ID</th>
                <th scope="column">Cor</th>
                <th scope="column">Local</th>
                <th scope="column">Espécie</th>
                <th scope="column">Folhas</th>
                <th scope="column"></th>
                <th scope="column"></th>
            </tr>
            <?php foreach ($resultado as $linha) { ?>
                <tr>
                    <td><?= $linha["pk"] ?></td>
                    <td><?= $linha["cor"] ?></td>
                    <td><?= $linha["local_onde_foi_plantado"] ?></td>
                    <td><?= $linha["especie"] ?></td>
                    <td><?= $linha["numero_folhas"] ?></td>
                    <td>
                        <button type="button">
                            <a href="editar-flor.php?idflor=<?= $linha["pk"] ?>">Editar</a>
                        </button>
                    </td>
                    <td>
                        <form action="excluir-flor.php"
                                method="POST"
                                style="display: none"
                                id="excluir-flor-<?= $linha["pk"] ?>">
                            <input type="hidden" name="pk" value="<?= $linha["pk"] ?>" >
                        </form>
                        <button type="button" onclick="excluir(<?= $linha["pk"] ?>)">Excluir</button>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <button type="button"><a href="criar-flor.php">Criar novo</a></button>
    </body>
</html>

<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>