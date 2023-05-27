function validarTelefone(x) {
    const regex = /^\([0-9]{2}\) (?:9[1-9]|[2-8])[0-9]{3}-[0-9]{4}$/g;
    return x.match(regex);
}

function teste(x) {
    const ok = validarTelefone(x);
    if (ok) {
        console.log(`${x} é um número de telefone válido`);
    } else {
        console.log(`${x} não é um número de telefone válido`);
    }
}

teste("(11) 98765-4321");
teste("(11) 90765-4321");
teste("(51) 91765-4321");
teste("(11) 8765-4321");
teste("(11) 1765-4321");
teste("(11) 0765-4321");
teste("(11) 98765-43210");
teste("(11) 98765-432");
teste("(11) 987654321");