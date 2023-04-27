<!DOCTYPE html>
<html>
    <head>
        <title>Semáforo</title>
        <script>
            function vermelho() {
                document.getElementById("vermelho").style.display = "block";
                document.getElementById("amarelo").style.display = "none";
                document.getElementById("muda_semaforo").onclick = verde;
            }

            function amarelo() {
                document.getElementById("amarelo").style.display = "block";
                document.getElementById("verde").style.display = "none";
                document.getElementById("muda_semaforo").onclick = vermelho;
            }

            function verde() {
                document.getElementById("verde").style.display = "block";
                document.getElementById("vermelho").style.display = "none";
                document.getElementById("muda_semaforo").onclick = amarelo;
            }
        </script>
    </head>
    <body>
        <button id="muda_semaforo" type="button" onclick="verde();">Mudar</button>
        <br>
        <img src="vermelho.png" id="vermelho" />
        <img src="amarelo.png"  id="amarelo"  style="display: none;"/>
        <img src="verde.png"    id="verde"    style="display: none;"/>
    </body>
</html>