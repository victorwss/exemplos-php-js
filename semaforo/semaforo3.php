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
    <body>
        <button id="muda_semaforo" type="button" onclick="verde();">Mudar</button>
        <br>
        <img src="vermelho.png" id="imagem" />
    </body>
</html>