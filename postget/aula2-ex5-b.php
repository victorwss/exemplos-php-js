<!DOCTYPE html>
<?php
    function resposta() {
        switch ($_POST["dia"]) {
            case "segunda-feira": return "DD+CMS";
            case "terça-feira": return "Banco de dados";
            case "quarta-feira": return "ATÉ SEXTA-FEIRA";
            case "quinta-feira": return "Projeto integrador";
            case "sexta-feira": return "VAMOS VALIDAR OS FORMS COM JAVASCRIPT DAQUI HÁ DOIS DIAS";
            case "sábado": return "cerveja e churrasco";
            case "domingo": return "netflix";
            default: return "Dããh, era para digitar um dia da semana. <a href='aula2-ex5-a.php'>Tentar de novo</a>";
        }
    }
?>
<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <p>
            <?php echo resposta(); ?>
        </p>
    </body>
</html>