<?php
try {
    include "abrir_transacao.php";
include_once "operacoes.php";
$resultado = listar_todas_flores(); ?>
<table>
    <tr>
        <th scope="column">Chave</th>
        <th scope="column">Cor</th>
        <th scope="column">Espécie</th>
        <th scope="column">Localização</th>
        <th scope="column">Folhas</th>
        <th scope="column">Tipo</th>
        <th scope="column"></th>
        <th scope="column"></th>
    </tr>
    <?php foreach ($resultado as $linha) { ?>
        <tr>
            <td><?= $linha["chave"] ?></td>
            <td><?= $linha["cor"] ?></td>
            <td><?= $linha["especie"] ?></td>
            <td><?= $linha["localizacao"] ?></td>
            <td><?= $linha["folhas"] ?></td>
            <td><?= $linha["tipo"] ?></td>
            <td>
                <button type="button">
                    <a href="cadastro.php?chave=<?= $linha["chave"] ?>">Editar</a>
                </button>
            </td>
        </tr>
    <?php } ?>
</table>
<button type="button"><a href="cadastro.php">Criar novo</a></button>
<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>