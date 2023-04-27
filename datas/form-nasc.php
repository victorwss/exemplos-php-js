<!DOCTYPE>
<?php
    date_default_timezone_set("America/Sao_Paulo");
    $hoje = (new DateTimeImmutable("now"))->setTime(0, 0, 0, 0);

    function anosDesde($de) {
        global $hoje;
        if (!dataValida($de)) return "Data inválida";
        $data_de = new DateTimeImmutable($de);
        $intervalo = $hoje->diff($data_de);
        return $intervalo->y;
    }

    function dataValida($data) {
        try {
            $d = new DateTimeImmutable($data);
            if ($data !== $d->format("Y-m-d")) return false;
            if ((int) $d->format("Y") <= 0) return false;
        } catch (Exception $x) {
            return false;
        }
        return true;
    }

    function verificarData($data) {
        global $hoje;
        if (!dataValida($data)) return "Digite uma data válida.";
        if (new DateTimeImmutable($data) > $hoje) return "Digite a sua data de nascimento corretamente.";
        if (anosDesde($data) > 120) return "Digite a sua data de nascimento corretamente.";
        if (anosDesde($data) < 18) return "Somente maiores de idade podem prosseguir.";
        return "";
    }

    function aniversariante($data) {
        global $hoje;
        $nasc = new DateTimeImmutable($data);
        $mes1 = $nasc->format("m");
        $mes2 = $hoje->format("m");
        $dia1 = $nasc->format("d");
        $dia2 = $hoje->format("d");
        return $dia1 === $dia2 && $mes1 === $mes2;
    }

    $valido = false;
    $aniversario = false;
    if (!isset($_POST["data-nasc"])) {
        $erro = "";
    } else {
        $data = $_POST["data-nasc"];
        $erro = verificarData($data);
        if (aniversariante($data)) $aniversario = true;
        if ($erro === "") $valido = true;
    }
?>
<html>
    <head>
        <title>Data de nascimento</title>
        <style>
            .erro {
                background-color: red;
            }
        </style>
    </head>
    <body>
        <?php if (!$valido) { ?>
        <form method="POST" action="form-nasc.php">
            <label for="cdata">Data de nascimento</label>
            <input type="date" name="data-nasc" required id="cdata">
            <button type="submit">Enviar</button>
            <?php if ($erro !== "") { ?>
                <div class="erro"><?= $erro; ?></div>
            <?php } ?>
        </form>
        <?php } else { ?>
            <p>Seja bem-vindo ao nosso site!</p>
            <?php if ($aniversario) { ?>
                <img src="https://static.giulianaflores.com.br/images/product/19110gg.jpg?ims=405x405" alt="Bolo">
            <?php } ?>
        <?php } ?>
    </body>
</html>