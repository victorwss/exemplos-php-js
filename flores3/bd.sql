PRAGMA foreign_keys = ON;

CREATE TABLE IF NOT EXISTS tipo_flor (
    tipo TEXT NOT NULL PRIMARY KEY
);

INSERT INTO tipo_flor (tipo) VALUES ('Ornamental');
INSERT INTO tipo_flor (tipo) VALUES ('Árvore');
INSERT INTO tipo_flor (tipo) VALUES ('Exótica');

CREATE TABLE IF NOT EXISTS flor (
    chave INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    cor TEXT NOT NULL CHECK (LENGTH(cor) >= 4 AND LENGTH(cor) <= 30),
    especie TEXT NOT NULL CHECK (LENGTH(especie) >= 3 AND LENGTH(especie) <= 50),
    localizacao TEXT NOT NULL CHECK (LENGTH(localizacao) >= 4 AND LENGTH(localizacao) <= 200),
    folhas INTEGER NOT NULL CHECK (folhas >= 0 AND folhas <= 5000000),
    tipo TEXT NOT NULL,
    FOREIGN KEY (tipo) REFERENCES tipo_flor(tipo) ON DELETE RESTRICT ON UPDATE CASCADE
);