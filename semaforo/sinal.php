<!DOCTYPE html>
<html>
    <head>
        <title>Manipulando o DOM</title>
        <script>
            function cor(novaCor) {
                const e = document.getElementById("sinal");
                e.style.background = novaCor;
            }
        </script>
    </head>
    <body>
        <p id="sinal">Sinal</p>
        <button type="button" onclick="cor('red');">Vermelho</button>
        <button type="button" onclick="cor('yellow');">Amarelo</button>
        <button type="button" onclick="cor('lime');">Verde</button>
    </body>
</html>
