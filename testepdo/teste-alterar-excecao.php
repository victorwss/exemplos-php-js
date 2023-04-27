<?php

include_once "alterar-cliente-2.php";

$cliente = [
    "id" => -5,
    "nome" => "Matilde Lemos Silva",
    "fone" => "(71) 98888-7776",
    "sexo" => "F"
];

try {
    $resultado = alterarCliente($cliente);
    echo "<br>Resultado: $resultado";
} catch (PDOException $e) {
    echo "<br>Erro ao conectar no banco de dados: " . $e->getMessage();
} catch (ClienteNaoExisteException | InvalidArgumentException $e) {
    echo "Os dados do cliente não podem ser alterados desta forma: " . 
         $e->getMessage();
/*} catch (ClienteNaoExisteException $e) {
    echo "<br>O cliente não existe: " . $e->getMessage();
} catch (InvalidArgumentException $e) {
    echo "<br>Os dados do cliente não podem ser alterados desta forma: " . 
         $e->getMessage();
*/} catch (Exception $e) {
    echo "<br>Ocorreu um erro imprevisto: " . $e->getMessage();
} catch (Throwable $e) {
    echo "<br>Algo muito errado aconteceu: " . $e->getMessage();
}