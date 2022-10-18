CREATE DATABASE tarefas;
USE tarefas;

CREATE TABLE usuario (
  nome VARCHAR(100) PRIMARY KEY NOT NULL UNIQUE,
  senha VARCHAR(100) NOT NULL 
);

CREATE TABLE tarefa (
  nome VARCHAR(100) PRIMARY KEY NOT NULL,
  horaInicio TIME,
  horaFim TIME,
  data_tarefa DATE,
  conclusao BIT,
  descricao VARCHAR(1000),
  usuario FOREIGN KEY REFERENCES usuario(nome)
);

