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
        <?php $inicio = intval($_GET["a"]); ?>
        <?php $limite = intval($_GET["b"]); ?>
        <h1>Números primos de <?php echo $inicio; ?> até <?php echo $limite; ?></h1>
        <ul>
            <?php
                for ($i = $inicio; $i <= $limite; $i++) {
                    if (eh_primo($i)) echo "<li>" . $i . "</li>";
                }
            ?>
        </ul>
    </body>
</html>