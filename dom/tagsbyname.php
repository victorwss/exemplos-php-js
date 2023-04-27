<!DOCTYPE html>
<html>
    <head>
        <title>Manipulando o DOM</title>
        <script>
            function mostrar() {
                const es = document.getElementsByTagName("input");
                for (let i = 0; i < x.length; i++) {
                    const e = es[i];
                    console.log(e.id + ": " + e.name + "=>" + e.value);
                }
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
