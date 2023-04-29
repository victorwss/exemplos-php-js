"use strict";

class Sexo {
    constructor(simbolo) {
        this.simbolo = simbolo;
    }
}
let masculino = new Sexo("M");
let feminino = new Sexo("F");

class Conta {
    constructor(nome, valor) {
        this.nome = nome;
        this.valor = valor;
    }
}

class Pessoa {
    #nome;
    #idade;
    #sexo;
    #cpf;
    #conjuge;
    #cartao;

    constructor(nome, idade, sexo, cpf) {
        this.#nome = nome;
        this.#idade = idade;
        this.#sexo = sexo;
        this.#cpf = cpf;
        this.#conjuge = null;
        this.#cartao = null;
        Object.seal(this);
    }

    set nome(novoNome) {
        if (typeof(novoNome) !== "string" || novoNome === "") {
            throw new Error("Não pode redefinir o nome assim.");
        }
        this.#nome = novoNome;
    }

    get nome() {
        return this.#nome;
    }

    get idade() {
        return this.#idade;
    }

    get sexo() {
        return this.#sexo;
    }

    get cpf() {
        return this.#cpf;
    }

    set conjuge(outraPessoa) {
        if (!(outraPessoa instanceof Pessoa)) {
            throw new Error("Pessoas só casam com outras pessoas!");
        }
        if (outraPessoa === this) {
            throw new Error("Pessoas não podem se casar consigo mesmas!");
        }
        this.#conjuge = outraPessoa;
        outraPessoa.#conjuge = this;
    }

    set cartao(cartao) {
        this.#cartao = cartao;
    }

    get conjuge() {
        return this.#conjuge;
    }

    pagarConta(conta) {
        if (!this.#cartao) throw new Error("Esta pessoa não tem cartão");
        console.log(`Pagando a conta ${conta} com o cartão ******`);
    }
}

class Modelo {
    nome;
    montadora;

    constructor(nome, montadora) {
        this.nome = nome;
        this.montadora = montadora;
    }
}

class Carro {
    modelo;
    ano;
    cor;
    passageiros;

    constructor(modelo, ano, cor) {
        this.modelo = modelo;
        this.ano = ano;
        this.cor = cor;
        this.passageiros = [];
    }

    embarcar(pessoa) {
        this.passageiros.push(pessoa);
    }

    desembarcar(pessoa) {
        let ondeEsta = this.passageiros.indexOf(pessoa);
        this.passageiros.splice(ondeEsta, 1);
    }
}

class Aviao {
    prefixo;
    linhaAerea;
    voo;

    constructor(prefixo, linhaAerea, voo) {
        this.prefixo = prefixo;
        this.linhaAerea = linhaAerea;
        this.voo = voo;
        this.tripulantes = [];
    }

    embarcar(pessoa) {
        this.tripulantes.push(pessoa);
    }

    desembarcar(pessoa) {
        let ondeEsta = this.tripulantes.indexOf(pessoa);
        this.tripulantes.splice(ondeEsta, 1);
    }
}

let pessoa1 = new Pessoa("João da Silva", 38, masculino, "987.654.321-00");
let pessoa2 = new Pessoa("Maria Aparecida de Souza", 29, feminino, "123.456.789-10");
let pessoa3 = new Pessoa("Cláudia dos Santos", 32, feminino, "444.444.444-44");

pessoa3.cartao = "Visa 4444-4444-444-444";

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

pessoa1.conjuge = pessoa2;

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
console.log(Pessoa.prototype);
try {
    pessoa2.pagarConta(new Conta("telefone", 60));
    console.log("Ué...");
} catch (e) {
    console.log("Não pagou");
    console.error(e);
}
pessoa3.pagarConta(new Conta("telefone", 60));
console.log("Cartão", pessoa3.cartao);
//console.log("Cartão", pessoa3.#cartao);
pessoa3.nome = "Cláudia Maria dos Santos";
try {
    pessoa3.conjuge = "Abacaxi";
    console.log("Ué...");
} catch (e) {
    console.log("Pessoa 3 com abacaxi = Nada feito");
}
console.log("Pessoa 3", pessoa3);
console.log("Cônjuge de pessoa 2 [a]", pessoa2.conjuge);
//console.log("Cônjuge de pessoa 2 [b]", pessoa2.obterConjuge());
try {
    pessoa2.conjuge = "Abacaxi";
    console.log("Ué...");
} catch (e) {
    console.log("Pessoa 2 com abacaxi = Nada feito");
}
try {
    pessoa1.conjuge = pessoa1;
    console.log("Ué...");
} catch (e) {
    console.log("Pessoa 1 com pessoa 1 = Nada feito");
}
try {
    pessoa1.nome = 1234;
    console.log("Ué...");
} catch (e) {
    console.log("Pessoa 1 com nome numérico = Nada feito");
}
try {
    pessoa1.nome = "";
    console.log("Ué...");
} catch (e) {
    console.log("Pessoa 1 com nome vazio = Nada feito");
}