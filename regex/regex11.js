function validarTexto1(x) {
    const regex = /\n[0-9]+/gm;
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

teste("abc 0123 hhh\nxxxx");
teste("abc\n0123 hhh\nxxx");