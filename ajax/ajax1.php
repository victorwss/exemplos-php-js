<!DOCTYPE html>
<html>
    <head>
        <title>AJAX - Asynchronous Javascript and XML</title>
        <script async>
            function lerDados() {
                console.log("Chamou...");
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    console.log("Chegou...", xhr.readyState);
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        const resposta = xhr.responseText;
                        console.log(resposta);
                    }
                };
                console.log("Começando...", xhr.readyState);
                xhr.open("GET", "http://localhost/helloworld/hello.php", true);
                xhr.send();
            }
            lerDados();
        </script>
    </head>
    <body>
        <p>O resultado é <span id="resultado">...</span></p>
    </body>
</html>