<!DOCTYPE html>
<html>
    <head>
        <title>Semáforo</title>
        <script>
            function vermelho() {
                document.getElementById("imagem").src = "vermelho.png";
                document.getElementById("muda_semaforo").onclick = verde;
            }

            function amarelo() {
                document.getElementById("imagem").src = "amarelo.png";
                document.getElementById("muda_semaforo").onclick = vermelho;
            }

            function verde() {
                document.getElementById("imagem").src = "verde.png";
                document.getElementById("muda_semaforo").onclick = amarelo;
            }
        </script>
    </head>
    <body onload="verde();">
        <button id="muda_semaforo" type="button">Mudar</button>
        <br>
        <img src="" id="imagem" />
    </body>
</html>