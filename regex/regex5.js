function validarTexto(x) {
    const regex = /^abc.xyz$/g;
    return x.match(regex);
}

function teste(x) {
    const ok = validarTexto(x);
    if (ok) {
        console.log(`${x} é um texto válido`);
    } else {
        console.log(`${x} não é um texto válido`);
    }
}

teste("abcdxyz");
teste("abc xyz");
teste("xyz abc");
teste("abcwxyz");