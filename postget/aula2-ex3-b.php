<!DOCTYPE html>
<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <p>
            Você digitou:<br>
            <?php echo $_POST["nome"]; ?><br>
            <?php echo $_POST["telefone"]; ?><br>
            <?php echo $_POST["email"]; ?><br>
            <?php echo $_POST["endereco"]; ?><br>
        </p>
    </body>
</html>