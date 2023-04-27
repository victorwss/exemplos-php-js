<!DOCTYPE html>
<?php
    function valor($qual) {
        if (isset($_GET[$qual])) {
            return $_GET[$qual];
        } else {
            return "não informado";
        }
    }
?>
<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <p>
            Você digitou:<br>
            <?php echo valor("nome");     ?><br>
            <?php echo valor("telefone"); ?><br>
            <?php echo valor("email");    ?><br>
            <?php echo valor("endereco"); ?><br>
        </p>
    </body>
</html>