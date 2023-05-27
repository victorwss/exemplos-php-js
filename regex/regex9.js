function validarTexto1(x) {
    const regex = / \w{5,8} /g;
    return x.match(regex);
}

function teste(x) {
    let ok = validarTexto1(x);
    if (ok) {
        console.log(`${x} é um texto válido1: ${ok}`);
    } else {
        console.log(`${x} não é um texto válido1`);
    }
}

teste("abc xxx hhh");
teste("abc xxxx hhh");
teste("abc xxxxx hhh");
teste("abc xxxxxx hhh");
teste("abc xxxxxxx hhh");
teste("abc xxxxxxxx hhh");
teste("abc xxxxxxxxx hhh");