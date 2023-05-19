<!DOCTYPE html>
<html>
    <head>
        <title>AJAX - Asynchronous Javascript and XML</title>
        <script async>
            function lerDados() {
                console.log("Chamou...");
                const xhr = new XMLHttpRequest();
                xhr.onload = function() {
                    const resposta = xhr.responseText;
                    document.getElementById("resultado").innerHTML = resposta;
                };
                xhr.open("GET", "http://localhost/helloworld/hello.php", true);
                xhr.send();
            }
        </script>
    </head>
    <body>
        <p>O resultado é <span id="resultado">...</span></p>
        <button type="button" onclick="lerDados()">Ler o resultado</button>
    </body>
</html>