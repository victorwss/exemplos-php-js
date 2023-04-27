<!DOCTYPE html>
<html>
    <head>
        <title>Manipulando o DOM</title>
        <script>
            function mostrar() {
                const es = document.querySelectorAll("input");
                for (let i = 0; i < es.length; i++) {
                    const e = es[i];
                    console.log(e.id + ": " + e.name + "=>" + e.value);
                }
                document.querySelector("#cnome").value = "Victor";
            }
        </script>
    </head>
    <body>
        <input type="text" name="nome" id="cnome" value="Digite">
        <input type="text" name="telefone" id="ctelefone" value="Digite">
        <input type="text" name="cep" id="ccep" value="Digite">
        <button type="button" onclick="mostrar();">Mostrar</button>
    </body>
</html>
