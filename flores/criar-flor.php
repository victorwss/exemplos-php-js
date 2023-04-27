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
        <form method="POST" action="inserir-flor-post.php" id="formulario">
            <div>
                <label for="cor">Cor:</label>
                <input type="text" id="cor" name="cor">
            </div>
            <div>
                <label for="especie">Espécie:</label>
                <input type="text" id="especie" name="especie">
            </div>
            <div>
                <label for="local">Local:</label>
                <input type="text" id="local" name="local">
            </div>
            <div>
                <label for="folhas">Folhas:</label>
                <input type="text" id="folhas" name="folhas">
            </div>
            <div>
                <button type="button" onclick="confirmar()">Salvar</button>
            </div>
        </form>
    </body>
</html>