<?php
include_once "alterar-cliente.php";

$cliente = [
    "id" => 7,
    "nome" => "Cristian",
    "fone" => "(65) 99887-6677",
    "sexo" => "M"
];
alterar($cliente);