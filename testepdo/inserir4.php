<?php
include_once "inserir-cliente.php";

$cliente = [
    "nome" => "Andressa de Souza",
    "fone" => "(65) 92345-6789",
    "sexo" => "F"
];
inserir($cliente);