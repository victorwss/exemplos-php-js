function temVogal(x) {
    const regex = /[aeiou]/gi;
    return x.match(regex);
}

function teste(x) {
    const ok = temVogal(x);
    if (ok) {
        console.log(`${x} tem vogal`);
    } else {
        console.log(`${x} não tem vogal`);
    }
}

teste("ae");
teste("xx");
teste("A");
teste("xxxyyy zzz a ggg");
teste("");
teste("ttt");