function testeAbc(teste) {
    console.log(teste, "a"  , teste("a"  ));
    console.log(teste, "b"  , teste("b"  ));
    console.log(teste, "c"  , teste("c"  ));
    console.log(teste, "d"  , teste("d"  ));
    console.log(teste, "x"  , teste("x"  ));
    console.log(teste, ""   , teste(""   ));
    console.log(teste, "abc", teste("abc"));
    console.log(teste, "A"  , teste("A"  ));
    console.log(teste, "B"  , teste("B"  ));
    console.log(teste, "C"  , teste("C"  ));
}

function testar1(x) {
    return x === "a" || x === "b" || x === "c";
}

testeAbc(testar1);

function testar2(x) {
    const r = /[abc]/g;
    return x.match(r) !== null;
}

testeAbc(testar2);

function testar3(x) {
    const r = /^[abc]$/g;
    return x.match(r) !== null;
}

testeAbc(testar3);

function testar4(x) {
    const r = /^[abc]$/gi;
    return x.match(r) !== null;
}

testeAbc(testar4);

function testarCpf(x) {
    const r = /^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/g;
    return x.match(r) !== null;
}

console.log(testarCpf, "123.456.789-10" , testarCpf("123.456.789-10" ));
console.log(testarCpf, "123.456.7c9-10" , testarCpf("123.456.7c9-10" ));
console.log(testarCpf, "123.456.789.10" , testarCpf("123.456.789.10" ));
console.log(testarCpf, "123.456.789-102", testarCpf("123.456.789-102"));

function testarCpfNoMeio(x) {
    const r = /[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/g;
    return x.match(r) !== null;
}

console.log(testarCpfNoMeio, "123.456.789-10" , testarCpfNoMeio("blabla blabl bala 123.456.789-10 blabla blablk bla"));
console.log(testarCpfNoMeio, "123.456.7c9-10" , testarCpfNoMeio("blabla blabl bala 123.456.7c9-10 blabla blablk bla"));
console.log(testarCpfNoMeio, "123.456.789.10" , testarCpfNoMeio("blabla blabl bala 123.456.789.10 blabla blablk bla"));
console.log(testarCpfNoMeio, "123.456.789-102", testarCpfNoMeio("blabla blabl bala 123.456.789-102 blabla blablk bla"));