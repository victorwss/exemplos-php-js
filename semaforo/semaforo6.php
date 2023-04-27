<!DOCTYPE html>
<html>
    <head>
        <title>Semáforo</title>
        <style>
            button {
                background: pink;
            }
        </style>
        <script>
            function vermelho() {
                document.querySelector("img").src = "vermelho.png";
                document.querySelector("button").onclick = verde;
            }

            function amarelo() {
                document.querySelector("img").src = "amarelo.png";
                document.querySelector("button").onclick = vermelho;
            }

            function verde() {
                document.querySelector("img").src = "verde.png";
                document.querySelector("button").onclick = amarelo;
            }
        </script>
    </head>
    <body onload="verde();">
        <button type="button">Mudar</button>
        <br>
        <img src=""/>
    </body>
</html>