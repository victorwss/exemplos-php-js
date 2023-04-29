"use strict";

let masculino = {simbolo: "M"};
let feminino = {simbolo: "F"};

function Pessoa(nome, idade, sexo, cpf) {
    const pessoa = {};
    pessoa.nome = nome;
    pessoa.idade = idade;
    pessoa.sexo = sexo;
    pessoa.cpf = cpf;
    pessoa.conjuge = null;

    function casar(outraPessoa) {
        pessoa.conjuge = outraPessoa;
        outraPessoa.conjuge = pessoa;
    }

    pessoa.casar = casar;
    return pessoa;
}

function Modelo(nome, montadora) {
    const modelo = {};
    modelo.nome = nome;
    modelo.montadora = montadora;
    return modelo;
}

function Carro(modelo, ano, cor) {
    const carro = {};
    carro.modelo = modelo;
    carro.ano = ano;
    carro.cor = cor;
    carro.passageiros = [];

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

function Aviao(prefixo, linhaAerea, voo) {
    const aviao = {};
    aviao.prefixo = prefixo;
    aviao.linhaAerea = linhaAerea;
    aviao.voo = voo;
    aviao.tripulantes = [];

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

let pessoa1 = Pessoa("João da Silva", 38, masculino, "987.654.321-00");
let pessoa2 = Pessoa("Maria Aparecida de Souza", 29, feminino, "123.456.789-10");
let pessoa3 = Pessoa("Cláudia dos Santos", 32, feminino, "444.444.444-44");

let passaro1 = {
    especie: "Bem-te-vi",
    idade: 2,
    cores: ["amarelo", "preto"]
};

let focus = Modelo("Focus", "Ford");
let strada = Modelo("Strada", "Fiat");
let carro1 = Carro(focus, 2017, "vermelho");
let carro2 = Carro(strada, 2012, "azul");
let carro3 = Carro(strada, 2014, "branco");

pessoa1.casar(pessoa2);

let aviao1 = Aviao("ZX-123", "Gol", 1234);
let aviao2 = Aviao("AB-987", "LATAM", 4321);

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

