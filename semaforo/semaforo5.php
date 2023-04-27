<!DOCTYPE html>
<html>
    <head>
        <title>Semáforo</title>
        <style>
            #muda_semaforo {
                background: pink;
            }
        </style>
        <script>
            function vermelho() {
                document.querySelector("#imagem").src = "vermelho.png";
                document.querySelector("#muda_semaforo").onclick = verde;
            }

            function amarelo() {
                document.querySelector("#imagem").src = "amarelo.png";
                document.querySelector("#muda_semaforo").onclick = vermelho;
            }

            function verde() {
                document.querySelector("#imagem").src = "verde.png";
                document.querySelector("#muda_semaforo").onclick = amarelo;
            }
        </script>
    </head>
    <body onload="verde();">
        <button id="muda_semaforo" type="button">Mudar</button>
        <br>
        <img src="" id="imagem" />
    </body>
</html>