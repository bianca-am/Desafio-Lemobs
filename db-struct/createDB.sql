-- Create SCHEMA and TABLES

CREATE SCHEMA desafio AUTHORIZATION postgres;

CREATE TABLE IF NOT EXISTS desafio.endereco (
    id SERIAL PRIMARY KEY,
    rua VARCHAR(255) NOT NULL,
    numero INTEGER NOT NULL,
    bairro VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS desafio.aluno (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    matricula VARCHAR(45) NOT NULL,
    nota FLOAT NOT NULL,
    endereco BIGINT NOT NULL REFERENCES desafio.endereco(id)
);




