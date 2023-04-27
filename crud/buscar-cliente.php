<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

function buscarClientePorId($id) {
    global $pdo;
    $sql = "SELECT * FROM clientes WHERE idcliente = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["id" => $id]);
    return $stmt->fetch();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tabela</title>
        <script>
            function confirmar() {
                if (!confirm("Tem certeza que deseja alterar os dados?")) return;
                document.getElementById("formulario-salvar").submit();
            }

            function excluir() {
                if (!confirm("Tem certeza que deseja EXCLUIR os dados?")) return;
                document.getElementById("formulario-excluir").submit();
            }

            function voltar() {
                window.location = "listar-todos-clientes.php";
            }
        </script>
    </head>
    <body>
        <?php $resultado = buscarClientePorId($_GET["idcliente"]); ?>
        <form method="POST" action="alterar-cliente-post.php" id="formulario-salvar">
            <div>
                <label for="idcliente">ID:</label>
                <input type="text" id="idcliente" name="idcliente" readonly value="<?= $resultado["idcliente"] ?>">
            </div>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?= $resultado["nome"] ?>">
            </div>
            <div>
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" value="<?= $resultado["telefone"] ?>">
            </div>
            <div>
                <label for="sexo">Sexo:</label>
                <input type="text" id="sexo" name="sexo" value="<?= $resultado["sexo"] ?>">
            </div>
            <div>
                <button type="button" onclick="confirmar()">Salvar</button>
                <button type="button" onclick="excluir()">Excluir</button>
                <button type="button" onclick="voltar()">Voltar</button>
            </div>
        </form>
        <form method="POST" action="excluir-cliente-post.php" id="formulario-excluir">
            <input type="hidden" name="idcliente" readonly value="<?= $resultado["idcliente"] ?>">
        </form>
    </body>
</html>

<?php

$transacaoOk = true;

} finally {
    include "fechar_transacao.php";
}
?>