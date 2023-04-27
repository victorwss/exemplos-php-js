<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

function listarClientesPorSexo($sexo) {
    global $pdo;
    $sql = "SELECT * FROM clientes WHERE sexo = :sexo";
    $resultados = [];
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["sexo" => $sexo]);
    while ($linha = $stmt->fetch()) {
        $resultados[] = $linha;
    }
    return $resultados;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tabela</title>
    </head>
    <body>
        <?php $resultado = listarClientesPorSexo($_GET["sexo"]); ?>
        <table>
            <tr>
                <th scope="column">ID</th>
                <th scope="column">Nome</th>
                <th scope="column">Telefone</th>
                <th scope="column">Sexo</th>
                <th scope="column"></th>
            </tr>
            <?php foreach ($resultado as $linha) { ?>
                <tr>
                    <td><?= $linha["idcliente"] ?></td>
                    <td><?= $linha["nome"] ?></td>
                    <td><?= $linha["telefone"] ?></td>
                    <td><?= $linha["sexo"] ?></td>
                    <td>
                        <button type="button">
                            <a href="buscar-cliente.php?idcliente=<?= $linha["idcliente"] ?>">Visualizar</a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <button type="button"><a href="criar-cliente.php">Criar novo</a></button>
        <button type="button"><a href="listar-todos-clientes.php">Listar tudo</a></button>
    </body>
</html>




<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>