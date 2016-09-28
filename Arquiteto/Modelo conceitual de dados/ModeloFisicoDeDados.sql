-- Gera��o de Modelo f�sico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Usu�rio (
ID Texto(1) PRIMARY KEY,
Nome Texto(1)
)

CREATE TABLE Professor (
Email Texto(1),
ID Texto(1),
-- Erro: nome do campo duplicado nesta tabela!
ID Texto(1),
FOREIGN KEY(ID) REFERENCES Usu�rio (ID)
)

CREATE TABLE Funcion�rio da Secretaria (
Setor Texto(1),
Final do expediente Texto(1),
In�cio do expediente Texto(1),
ID Texto(1),
FOREIGN KEY(ID) REFERENCES Usu�rio (ID)
)

CREATE TABLE Permiss�o (
ID Texto(1) PRIMARY KEY,
Nome Texto(1)
)

CREATE TABLE Sala (
ID Texto(1) PRIMARY KEY,
N�mero Texto(1),
Vagas Texto(1)
)

CREATE TABLE Turma (
ID Texto(1) PRIMARY KEY,
N�mero Texto(1),
Hor�rio Texto(1)
)

CREATE TABLE Solicita��o de altera��o (
ID Texto(1) PRIMARY KEY,
Descri��o Texto(1)
)

CREATE TABLE Disciplina (
ID Texto(1) PRIMARY KEY,
Nome Texto(1)
)

CREATE TABLE Aloca��o (
ID Texto(1) PRIMARY KEY,
Data da aloca��o Texto(1),
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
FOREIGN KEY(ID) REFERENCES Usu�rio (ID),
FOREIGN KEY(ID) REFERENCES Permiss�o (ID)
)

CREATE TABLE pertence (
ID Texto(1),
-- Erro: nome do campo duplicado nesta tabela!
ID Texto(1),
FOREIGN KEY(ID) REFERENCES Disciplina (ID),
FOREIGN KEY(ID) REFERENCES Turma (ID)
)

ALTER TABLE Professor ADD FOREIGN KEY(ID) REFERENCES Solicita��o de altera��o (ID)
