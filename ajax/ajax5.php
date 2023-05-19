<!DOCTYPE html>
<html>
    <head>
        <title>AJAX - Asynchronous Javascript and XML</title>
        <script async>
            function lerDados() {
                fetch("http://localhost/flores3/listagem.php")
                    .then(resposta => resposta.text())
                    .then(html => {
                        console.log(html);
                        document.getElementById("listagem").innerHTML = html;
                    })
                    .catch(erro => {
                        console.log("Deu chabu", erro);
                    });
            }
        </script>
    </head>
    <body>
        <p>A listagem é ...</p>
        <div id="listagem"></div>
        <button type="button" onclick="lerDados()">Ler o resultado</button>
    </body>
</html>