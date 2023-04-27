<!DOCTYPE html>
<html>
    <head>
        <title>Idade</title>
    </head>
    <body>
<?php
    function anosDesde($data) {
        $hoje = "15/03/2023";
        if (!dataValida($data) || !dataValida($hoje)) return "Data inválida";
        $partes1 = explode("/", $data);
        $partes2 = explode("/", $hoje);

        $dia1 = (int) $partes1[0];
        $mes1 = (int) $partes1[1];
        $ano1 = (int) $partes1[2];
        $dia2 = (int) $partes2[0];
        $mes2 = (int) $partes2[1];
        $ano2 = (int) $partes2[2];

        $d = $ano2 - $ano1;
        if ($mes2 < $mes1 || ($mes2 === $mes1 && $dia2 < $dia1)) $d--;
        return $d;
    }

    function dataValida($data) {
        $partes = explode("/", $data);
        if (count($partes) !== 3) return false;
        if (strlen($partes[0]) !== 2 || strlen($partes[1]) !== 2 || strlen($partes[2]) !== 4) {
            return false;
        }
        try {
            $dia = (int) $partes[0];
            $mes = (int) $partes[1];
            $ano = (int) $partes[2];
            if ($dia < 1 || $dia > 31 || $mes < 1 || $mes > 12 || $ano < 1 || $ano > 9999) {
                return false;
            }
            if (($mes === 2 || $mes === 4 || $mes === 6 || $mes === 9 || $mes === 11) && $dia === 31) return false;
            if ($mes === 2 && $dia === 30) return 4;
            if ($mes === 2 && $dia === 29 && ($ano % 4 !== 0 || ($ano % 100 === 0 && $ano % 400 !== 0))) return false;
        } catch (Exception $x) {
            return false;
        }
        return true;
    }
?>
        <p>14/03/2000 : <?= anosDesde("14/03/2000") ?></p>
        <p>15/03/2000 : <?= anosDesde("15/03/2000") ?></p>
        <p>16/03/2000 : <?= anosDesde("16/03/2000") ?></p>
        <p>17/03/2000 : <?= anosDesde("17/03/2000") ?></p>
        <p>18/03/2000 : <?= anosDesde("18/03/2000") ?></p>
        <p>15/03/2023 : <?= anosDesde("15/03/2023") ?></p>
        <p>29/02/2024 : <?= anosDesde("29/02/2024") ?></p>
        <p>29/03/2024 : <?= anosDesde("29/03/2024") ?></p>
        <p>29/02/1600 : <?= anosDesde("29/02/1600") ?></p>
        <p>01/01/0001 : <?= anosDesde("01/01/0001") ?></p>

        <p>Olha as gambis:</p>
        <p>29/02/1700 : <?= anosDesde("29/02/1700") ?></p>
        <p>31/02/2000 : <?= anosDesde("31/02/2000") ?></p>
        <p>29/02/2023 : <?= anosDesde("29/02/2023") ?></p>
        <p>08/03/0000 : <?= anosDesde("08/03/0000") ?></p>
        <p>32/02/2000 : <?= anosDesde("32/02/2000") ?></p>
        <p>batata : <?= anosDesde("batata") ?></p>
    </body>
</html>