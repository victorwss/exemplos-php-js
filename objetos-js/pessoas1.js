"use strict";

let masculino = {simbolo: "M"};
let feminino = {simbolo: "F"};

let pessoa1 = {
    nome: "João da Silva",
    idade: 38,
    sexo: masculino
};

let pessoa2 = {
    nome: "Maria Aparecida de Souza",
    idade: 29,
    sexo: feminino
};

let pessoa3 = {
    nome: "Cláudia dos Santos",
    idade: 32,
    sexo: feminino
};

let passaro1 = {
    especie: "Bem-te-vi",
    idade: 2,
    cores: ["amarelo", "preto"]
};

pessoa1.cpf = "987.654.321-00";
pessoa1.conjuge = pessoa2;
pessoa2.conjuge = pessoa1;

console.log(pessoa1);

let locais1 = {
    "Campinas": "SP",
    "Niterói": "RJ",
    "Porto Seguro": "BA",
    "Ribeirão Preto": "SP"
};

let locais2 = [
    {cidade: "Campinas", estado: "SP"},
    {cidade: "Niterói", estado:  "RJ"},
    {cidade: "Porto Seguro", estado: "BA"}
];

console.log(locais1["Campinas"]);
for (chave in locais1) {
    if (locais1[chave] === "SP") console.log(chave);
}