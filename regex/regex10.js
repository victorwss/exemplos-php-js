function validarTexto1(x) {
    const regex = /\s/g;
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
teste("abc\txxxx hhh");
teste("abc\nxxxxx hhh");
teste("abc\rxxxxxx hhh");
teste("abc\fxxxxxxx hhh");
teste("abc_xxx-hhh");