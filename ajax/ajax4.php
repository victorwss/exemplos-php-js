<!DOCTYPE html>
<html>
    <head>
        <title>AJAX - Asynchronous Javascript and XML</title>
        <script async>
            function lerDados() {
                fetch("http://localhost/helloworld/hello.php")
                    .then(resposta => resposta.text())
                    .then(texto => {
                        document.getElementById("resultado").innerHTML = texto;
                    })
                    .catch(erro => {
                        console.log("Deu chabu", erro);
                    });
            }
        </script>
    </head>
    <body>
        <p>O resultado é <span id="resultado">...</span></p>
        <button type="button" onclick="lerDados()">Ler o resultado</button>
    </body>
</html>