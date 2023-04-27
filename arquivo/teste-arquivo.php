<?php
class ArquivoNaoEncontradoException extends Exception {
    public function __construct(
            $mensagem,
            $codigo = 0,
            Throwable $anterior = null)
    {
        parent::__construct($mensagem, $codigo, $anterior);
    }
}

function lerArquivo() {
    $nome = "exemplo.txt";
    try {
        $arq = fopen($nome, "r");
        if (!$arq) throw new ArquivoNaoEncontradoException("Não achou o arquivo $nome");
        throw new InvalidArgumentException("chabu");
        return fread($arq, filesize("exemplo.txt"));
    } finally {
        if ($arq) {
            echo "fechando o arquivo";
            fclose($arq);
        } else {
            echo "entrou no finally";
        }
    }
}

function salvarArquivo($texto) {
    $nome = "exemplo.txt";
    try {
        $arq = fopen($nome, "w");
        if (!$arq) throw new ArquivoNaoEncontradoException("Não achou o arquivo $nome");
        fwrite($arq, $texto);
    } finally {
        if ($arq) {
            echo "fechando o arquivo";
            fclose($arq);
        } else {
            echo "entrou no finally";
        }
    }
}

try {
    //salvarArquivo("Informação salva.");
    $x = lerArquivo();
    echo $x;
} catch (ArquivoNaoEncontradoException $e) {
    echo $e->getMessage();
//} catch (Exception $e) {
//    echo "ERRO! " . $e->getMessage();
}

?>
