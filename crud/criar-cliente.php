<?php
try {
    include "abrir_transacao.php";
include_once "conecta-mysql.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tabela</title>
        <script>
            function confirmar() {
                if (!confirm("Tem certeza que deseja salvar os dados?")) return;
                document.getElementById("formulario").submit();
            }
        </script>
    </head>
    <body>
        <form method="POST" action="inserir-cliente-post.php" id="formulario">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div>
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone">
            </div>
            <div>
                <label for="sexo">Sexo:</label>
                <input type="text" id="sexo" name="sexo">
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