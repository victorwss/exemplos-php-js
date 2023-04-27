<?php
function obterTipo($triangulo): string {
    if ($triangulo["a"] == $triangulo["b"] && $triangulo["b"] == $triangulo["c"]) return "Equilátero";
    if ($triangulo["a"] == $triangulo["b"] || $triangulo["b"] == $triangulo["c"] || $triangulo["a"] == $triangulo["c"]) return "Isósceles";
    return "Escaleno";
}

function obterPerimetro($triangulo): float {
    return $triangulo["a"] + $triangulo["b"] + $triangulo["c"];
}

function obterArea($triangulo): float {
    $s = obterPerimetro($triangulo);
    return sqrt($s * ($s - $triangulo["a"]) * ($s - $triangulo["b"]) * ($s - $triangulo["c"]));
}
?>
<html>
    <body>
        <p>
<?php
//$t1 = new Triangulo(5, 7, 6);
$t1 = array("a" => 5, "b" => 7, "c" => 6);
echo obterTipo($t1);
$t1["b"] = 666;
echo obterPerimetro($t1);
$t1["f"] = "abóbora";
echo obterArea($t1);
?>
</p>
<p>
<?php
$t2 = array("a" => 7, "b" => 7, "c" => 6);
echo obterTipo($t2);
echo obterPerimetro($t2);
echo obterArea($t2);
?>
</p>
<p>
<?php
$t3 = array("a" => 5, "b" => 7, "c" => 7);
echo obterTipo($t3);
echo obterPerimetro($t3);
echo obterArea($t3);
?>
</p>
<p>
<?php
/*$quadrado = array("a" => 5, "b" => 7, "c" => 7, "d" => 7);
echo obterTipo($quadrado);
echo obterPerimetro($quadrado);*/
?>
</p>
</body>
</html>