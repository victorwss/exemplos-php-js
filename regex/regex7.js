function validarTexto1(x) {
    const regex = /^ab*c$/g;
    return x.match(regex);
}

function validarTexto2(x) {
    const regex = /^ab+c$/g;
    return x.match(regex);
}

function validarTexto3(x) {
    const regex = /^ab?c$/g;
    return x.match(regex);
}

function teste(x) {
    let ok = validarTexto1(x);
    if (ok) {
        console.log(`${x} é um texto válido1`);
    } else {
        console.log(`${x} não é um texto válido1`);
    }
    ok = validarTexto2(x);
    if (ok) {
        console.log(`${x} é um texto válido2`);
    } else {
        console.log(`${x} não é um texto válido2`);
    }
    ok = validarTexto3(x);
    if (ok) {
        console.log(`${x} é um texto válido3`);
    } else {
        console.log(`${x} não é um texto válido3`);
    }
}

teste("ac");
teste("abc");
teste("abbbbbbbbbbbbbbbbbbbbc");
teste("axc");