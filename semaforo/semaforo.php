<!DOCTYPE html>
<html>
    <head>
        <title>Semáforo</title>
        <script>
            let cor = "vermelho";
            function semaforo() {
                const vermelho = document.getElementById("vermelho");
                const amarelo = document.getElementById("amarelo");
                const verde = document.getElementById("verde");
                if (cor === "vermelho") {
                    cor = "verde";
                    verde.style.display = "block";
                    vermelho.style.display = "none";
                } else if (cor === "amarelo") {
                    cor = "vermelho";
                    vermelho.style.display = "block";
                    amarelo.style.display = "none";
                } else {
                    cor = "amarelo";
                    amarelo.style.display = "block";
                    verde.style.display = "none";
                }
            }
        </script>
    </head>
    <body>
        <button type="button" onclick="semaforo();">Mudar</button>
        <br>
        <img src="vermelho.png" id="vermelho" />
        <img src="amarelo.png"  id="amarelo"  style="display: none;"/>
        <img src="verde.png"    id="verde"    style="display: none;"/>
    </body>
</html>