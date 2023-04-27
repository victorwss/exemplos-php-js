<!DOCTYPE html>
<?php
    function eh_primo($numero) {
        if ($numero < 2) return False;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) return False;
        }
        return True;
    }
?>
<html>
    <head>
        <title>Números primos</title>
    </head>
    <body>
        <?php $limite = 500; ?>
        <h1>Números primos de 1 até <?php echo $limite ?></h1>
        <ul>
            <?php
                for ($i = 1; $i <= $limite; $i++) {
                    if (eh_primo($i)) echo "<li>" . $i . "</li>";
                }
            ?>
        </ul>
    </body>
</html>