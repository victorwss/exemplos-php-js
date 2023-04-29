"use strict";

let masculino = {simbolo: "M"};
let feminino = {simbolo: "F"};

function Pessoa(nome, idade, sexo, cpf) {
    this.nome = nome;
    this.idade = idade;
    this.sexo = sexo;
    this.cpf = cpf;
    this.conjuge = null;

    Pessoa.prototype.casar = function(outraPessoa) {
        this.conjuge = outraPessoa;
        outraPessoa.conjuge = this;
    };
}

function Modelo(nome, montadora) {
    this.nome = nome;
    this.montadora = montadora;
}

function Carro(modelo, ano, cor) {
    this.modelo = modelo;
    this.ano = ano;
    this.cor = cor;
    this.passageiros = [];

    Carro.prototype.embarcar = function(pessoa) {
        this.passageiros.push(pessoa);
    };

    Carro.prototype.desembarcar = function(pessoa) {
        let ondeEsta = this.passageiros.indexOf(pessoa);
        this.passageiros.splice(ondeEsta, 1);
    };
}

function Aviao(prefixo, linhaAerea, voo) {
    this.prefixo = prefixo;
    this.linhaAerea = linhaAerea;
    this.voo = voo;
    this.tripulantes = [];

    Aviao.prototype.embarcar = function(pessoa) {
        this.tripulantes.push(pessoa);
    };

    Aviao.prototype.desembarcar = function(pessoa) {
        let ondeEsta = this.tripulantes.indexOf(pessoa);
        this.tripulantes.splice(ondeEsta, 1);
    };
}

let pessoa1 = new Pessoa("João da Silva", 38, masculino, "987.654.321-00");
let pessoa2 = new Pessoa("Maria Aparecida de Souza", 29, feminino, "123.456.789-10");
let pessoa3 = new Pessoa("Cláudia dos Santos", 32, feminino, "444.444.444-44");

let passaro1 = {
    especie: "Bem-te-vi",
    idade: 2,
    cores: ["amarelo", "preto"]
};

let focus = new Modelo("Focus", "Ford");
let strada = new Modelo("Strada", "Fiat");
let carro1 = new Carro(focus, 2017, "vermelho");
let carro2 = new Carro(strada, 2012, "azul");
let carro3 = new Carro(strada, 2014, "branco");

pessoa1.casar(pessoa2);

let aviao1 = new Aviao("ZX-123", "Gol", 1234);
let aviao2 = new Aviao("AB-987", "LATAM", 4321);

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

