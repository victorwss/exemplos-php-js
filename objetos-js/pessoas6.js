"use strict";

let masculino = {simbolo: "M"};
let feminino = {simbolo: "F"};

function criarPessoa(nome, idade, sexo, cpf) {
    const pessoa = {
        nome: nome,
        idade: idade,
        sexo: sexo,
        cpf: cpf,
        conjuge: null
    };

    function casar(outraPessoa) {
        pessoa.conjuge = outraPessoa;
        outraPessoa.conjuge = pessoa;
    }

    pessoa.casar = casar;
    return pessoa;
}

function criarModelo(nome, montadora) {
    return {
        nome: nome,
        montadora: montadora
    };
}

function criarCarro(modelo, ano, cor) {
    const carro = {
        modelo: modelo,
        ano: ano,
        cor: cor,
        passageiros: []
    };

    function embarcar(pessoa) {
        carro.passageiros.push(pessoa);
    }

    function desembarcar(pessoa) {
        let ondeEsta = carro.passageiros.indexOf(pessoa);
        carro.passageiros.splice(ondeEsta, 1);
    }

    carro.embarcar = embarcar;
    carro.desembarcar = desembarcar;

    return carro;
}

function criarAviao(prefixo, linhaAerea, voo) {
    const aviao = {
        prefixo: prefixo,
        linhaAerea: linhaAerea,
        voo: voo,
        tripulantes: []
    };

    function embarcar(pessoa) {
        aviao.tripulantes.push(pessoa);
    }

    function desembarcar(pessoa) {
        let ondeEsta = aviao.tripulantes.indexOf(pessoa);
        aviao.tripulantes.splice(ondeEsta, 1);
    }

    aviao.embarcar = embarcar;
    aviao.desembarcar = desembarcar;

    return aviao;
}

let pessoa1 = criarPessoa("João da Silva", 38, masculino, "987.654.321-00");
let pessoa2 = criarPessoa("Maria Aparecida de Souza", 29, feminino, "123.456.789-10");
let pessoa3 = criarPessoa("Cláudia dos Santos", 32, feminino, "444.444.444-44");

let passaro1 = {
    especie: "Bem-te-vi",
    idade: 2,
    cores: ["amarelo", "preto"]
};

let focus = criarModelo("Focus", "Ford");
let strada = criarModelo("Strada", "Fiat");
let carro1 = criarCarro(focus, 2017, "vermelho");
let carro2 = criarCarro(strada, 2012, "azul");
let carro3 = criarCarro(strada, 2014, "branco");

pessoa1.casar(pessoa2);

let aviao1 = criarAviao("ZX-123", "Gol", 1234);
let aviao2 = criarAviao("AB-987", "LATAM", 4321);

console.log("Pessoa 1", pessoa1);
console.log("Pessoa 2", pessoa2);
console.log("Pessoa 3", pessoa3);
console.log("Carro 1", carro1);
console.log("Carro 2", carro2);
console.log("Carro 3", carro3);
console.log("Mesmo modelo?", carro2.modelo === carro3.modelo);
carro2.embarcar(pessoa1);
carro2.embarcar(pessoa2);
carro1.embarcar(pessoa3);
console.log("Passageiros no carro 2 [a]", [...carro2.passageiros]);
carro2.desembarcar(pessoa1);
console.log("Passageiros no carro 1 [b]", [...carro1.passageiros]);
console.log("Passageiros no carro 2 [b]", [...carro2.passageiros]);
aviao1.embarcar(pessoa1);
console.log("Passageiros no avião 1 [a]", [...aviao1.tripulantes]);
aviao1.desembarcar(pessoa1);
console.log("Passageiros no avião 2 [b]", [...aviao1.tripulantes]);

