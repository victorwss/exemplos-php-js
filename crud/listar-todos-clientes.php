<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

function listarTodosClientes() {
    global $pdo;
    $sql = "SELECT * FROM clientes";
    $resultados = [];
    $consulta = $pdo->query($sql);
    while ($linha = $consulta->fetch()) {
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
        <?php $resultado = listarTodosClientes(); ?>
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
        <button type="button"><a href="listar-clientes-sexo.php?sexo=F">Listar apenas mulheres</a></button>
        <button type="button"><a href="listar-clientes-sexo.php?sexo=M">Listar apenas homens</a></button>
    </body>
</html>




<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>