function validarTexto1(x) {
    const regex = / \d{5,8} /g;
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

teste("abc 123 hhh");
teste("abc 1234 hhh");
teste("abc 12345 hhh");
teste("abc 123456 hhh");
teste("abc 1234567 hhh");
teste("abc 12345678 hhh");
teste("abc 123456789 hhh");