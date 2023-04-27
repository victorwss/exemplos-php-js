<?php
function conectar() {
    try {
        $host = "localhost";
        $dbname = "testepdo";
        $user = "root";
        $senha = "";
        $port = 3307;
        return new PDO("mysql:host=$host:$port;dbname=$dbname", $user, $senha);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        throw $e;
    }
}
?>
