<!DOCTYPE html>
<html>
    <head>
        <title>Manipulando o DOM</title>
        <script>
            function msg(texto) {
                // document.getElementById("saudacao").innerHTML = texto;
                const saudacao = document.getElementById("saudacao");
                console.log(saudacao);
                saudacao.innerHTML = texto;
                console.log(document.body);
            }
        </script>
    </head>
    <body>
        <p id="saudacao">Clique num botão</p>
        <button type="button" onclick="msg('Bom dia');">
            Bom dia
        </button>
        <button type="button" onclick="msg('Boa tarde');">
            Boa tarde
        </button>
        <button type="button" onclick="msg('Boa noite');">
            Boa noite
        </button>
    </body>
</html>
