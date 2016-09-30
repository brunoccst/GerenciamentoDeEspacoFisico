-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Usuário (
ID Texto(1) PRIMARY KEY,
Nome Texto(1)
)

CREATE TABLE Professor (
Email Texto(1),
ID Texto(1),
-- Erro: nome do campo duplicado nesta tabela!
ID Texto(1),
FOREIGN KEY(ID) REFERENCES Usuário (ID)
)

CREATE TABLE Funcionário da Secretaria (
Setor Texto(1),
Final do expediente Texto(1),
Início do expediente Texto(1),
ID Texto(1),
FOREIGN KEY(ID) REFERENCES Usuário (ID)
)

CREATE TABLE Permissão (
ID Texto(1) PRIMARY KEY,
Nome Texto(1)
)

CREATE TABLE Sala (
ID Texto(1) PRIMARY KEY,
Número Texto(1),
Vagas Texto(1)
)

CREATE TABLE Turma (
ID Texto(1) PRIMARY KEY,
Número Texto(1),
Horário Texto(1)
)

CREATE TABLE Solicitação de alteração (
ID Texto(1) PRIMARY KEY,
Descrição Texto(1)
)

CREATE TABLE Disciplina (
ID Texto(1) PRIMARY KEY,
Nome Texto(1)
)

CREATE TABLE Alocação (
ID Texto(1) PRIMARY KEY,
Data da alocação Texto(1),
-- Erro: nome do campo duplicado nesta tabela!
ID Texto(1),
-- Erro: nome do campo duplicado nesta tabela!
ID Texto(1),
FOREIGN KEY(ID) REFERENCES Turma (ID),
FOREIGN KEY(ID) REFERENCES Sala (ID)
)

CREATE TABLE possui (
ID Texto(1),
-- Erro: nome do campo duplicado nesta tabela!
ID Texto(1),
FOREIGN KEY(ID) REFERENCES Usuário (ID),
FOREIGN KEY(ID) REFERENCES Permissão (ID)
)

CREATE TABLE pertence (
ID Texto(1),
-- Erro: nome do campo duplicado nesta tabela!
ID Texto(1),
FOREIGN KEY(ID) REFERENCES Disciplina (ID),
FOREIGN KEY(ID) REFERENCES Turma (ID)
)

ALTER TABLE Professor ADD FOREIGN KEY(ID) REFERENCES Solicitação de alteração (ID)
