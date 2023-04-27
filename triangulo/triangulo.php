<?php
class Triangulo {
    private float $a;
    private float $b;
    private float $c;

    public function __construct(float $a, float $b, float $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function obterTipo(): string {
        if ($this->a == $this->b && $this->b == $this->c) return "Equilátero";
        if ($this->a == $this->b || $this->b == $this->c || $this->a == $this->c) return "Isósceles";
        return "Escaleno";
    }

    public function obterPerimetro(): float {
        return $this->a + $this->b + $this->c;
    }

    public function obterArea(): float {
        $s = $this->obterPerimetro();
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }
}
?>
<html>
    <body>
        <p>
<?php
//$t1 = new Triangulo(5, 7, 6);
$t1 = new Triangulo(5, 7, 6);
echo $t1->obterTipo();
echo $t1->obterPerimetro();
$t1->f = "abóbora";
echo $t1->obterArea();
?>
</p>
<p>
<?php
$t2 = new Triangulo(7, 7, 6);
echo $t2->obterTipo();
echo $t2->obterPerimetro();
echo $t2->obterArea();
?>
</p>
<p>
<?php
$t3 = new Triangulo(7, 7, 7);
echo $t3->obterTipo();
echo $t3->obterPerimetro();
echo $t3->obterArea();

/*$quadrado = array("a" => 5, "b" => 7, "c" => 7, "d" => 7);
echo $quadrado->obterTipo();
echo $quadrado->obterPerimetro();*/
?>
</p>
</body>
</html>