<!DOCTYPE html>
<html>
    <head>
        <title>Idade</title>
    </head>
    <body>
<?php
    date_default_timezone_set("America/Sao_Paulo");
    $hoje = (new DateTimeImmutable("now"))->setTime(0, 0, 0, 0);
    //$hoje = new DateTimeImmutable("2023-03-15");

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
?>
        <p>14/03/2000 : <?= anosDesde("2000-03-14") ?></p>
        <p>15/03/2000 : <?= anosDesde("2000-03-15") ?></p>
        <p>16/03/2000 : <?= anosDesde("2000-03-16") ?></p>
        <p>17/03/2000 : <?= anosDesde("2000-03-17") ?></p>
        <p>18/03/2000 : <?= anosDesde("2000-03-18") ?></p>
        <p>15/03/2023 : <?= anosDesde("2023-03-15") ?></p>
        <p>29/02/2024 : <?= anosDesde("2024-02-29") ?></p>
        <p>29/03/2024 : <?= anosDesde("2024-03-29") ?></p>
        <p>29/02/1600 : <?= anosDesde("1600-02-29") ?></p>
        <p>01/01/0001 : <?= anosDesde("0001-01-01") ?></p>

        <p>Olha as gambis:</p>
        <p>29/02/1700 : <?= anosDesde("1700-02-29") ?></p>
        <p>31/02/2000 : <?= anosDesde("2000-02-31") ?></p>
        <p>29/02/2023 : <?= anosDesde("2023-02-29") ?></p>
        <p>08/03/0000 : <?= anosDesde("0000-03-08") ?></p>
        <p>32/02/2000 : <?= anosDesde("2000-02-32") ?></p>
        <p>batata : <?= anosDesde("batata") ?></p>
    </body>
</html>