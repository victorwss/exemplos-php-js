"use strict";

let masculino = {simbolo: "M"};
let feminino = {simbolo: "F"};

function casar(p1, p2) {
    p1.conjuge = p2;
    p2.conjuge = p1;
}

function criarPessoa(nome, idade, sexo, cpf) {
    return {
        nome: nome,
        idade: idade,
        sexo: sexo,
        cpf: cpf,
        conjuge: null
    };
}

function criarModelo(nome, montadora) {
    return {
        nome: nome,
        montadora: montadora
    };
}

function criarCarro(modelo, ano, cor) {
    return {
        modelo: modelo,
        ano: ano,
        cor: cor
    };
}

let pessoa1 = criarPessoa("João da Silva", 38, masculino, "987.654.321-00");
let pessoa2 = criarPessoa("Maria Aparecida de Souza", 29, feminino, "123.456.789-10");
let pessoa3 = criarPessoa("Cláudia dos Santos", 32, feminino, "444.444.444-44");

let passaro1 = {
    "especie": "Bem-te-vi",
    "idade": 2,
    "cores": ["amarelo", "preto"]
};

let focus = criarModelo("Focus", "Ford");
let strada = criarModelo("Strada", "Fiat");
let carro1 = criarCarro(focus, 2017, "vermelho");
let carro2 = criarCarro(strada, 2012, "azul");
let carro3 = criarCarro(strada, 2014, "branco");

casar(pessoa1, pessoa2);

console.log("Pessoa 1", pessoa1);
console.log("Pessoa 2", pessoa2);
console.log("Pessoa 3", pessoa3);
console.log("Carro 1", carro1);
console.log("Carro 2", carro2);
console.log("Carro 3", carro3);
console.log("Mesmo modelo?", carro2.modelo === carro3.modelo);