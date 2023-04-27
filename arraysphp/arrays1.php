<!DOCTYPE html>
<?php
function mostrar($lista) {
    // Forma tradicional com contadores.
    /*for ($i = 0; $i < count($lista); $i++) {
        echo $i . ": " . $lista[$i];
        echo "<br>";
    }*/

    // Forma com foreach se eu quiser me preocupar com a chave.
    foreach ($lista as $chave => $valor) {
        echo $chave . ": " . $valor;
        //echo $chave . ": " . $lista[$chave];
        echo "<br>";
    }

    // Forma com foreach se eu não tiver interesse na chave.
    /*foreach ($lista as $valor) {
        echo $valor;
        echo "<br>";
    }*/
}
?>
<html>
    <head><title>Arrays.</title></head>
    <body>
        <h1>Números</h1>
        <?php
            $numeros = array(0, 1, 4, 9, 16);
            mostrar($numeros);
        ?>

        <h1>Naipes</h1>
        <?php
            $naipes = array("ouros", "paus", "copas", "espadas");
            mostrar($naipes);
        ?>

        <h1>Eevolutions</h1>
        <?php
            mostrar(array(
                "Eevee", "Vaporeon", "Jolteon", "Flareon",
                "Espeon", "Umbreon", "Leafeon", "Glaceon", "Sylveon"
            ));
        ?>

        <h1>Frutas</h1>
        <?php
            mostrar(array(
                "banana" => "amarelo",
                "uva" => "roxo",
                "morango" => "vermelho",
                "maçã" => "vermelho"
            ));
        ?>

        <h1>Mais frutas</h1>
        <?php
            $a = array("banana" => "amarelo", "uva" => "roxo");
            $a["cereja"] = "vermelho";
            mostrar($a);
        ?>

        <h1>Vai dar zica</h1>
        <?php
            $a = array("banana" => "amarelo", "uva" => "roxo");
            echo $a["abacaxi"];
        ?>
    </body>
</html>
