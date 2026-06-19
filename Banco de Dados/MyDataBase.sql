-- a proxíma linha cria um banco de dados
create database dbinfox;
-- a linha abaixo escolhe o banco de dados
use dbinfox;
dr
-- o bloco abaixo criar uma tabela
-- toda tabela precisa ter uma chave primaria
create table tbusuarios(
iduser int primary key, 
usuario varchar(50) not null,
fone varchar (15),
login varchar (15) not null unique,
senha varchar (15) not null
);
-- o comando abaixo descreve a tabela 
describe tbusuarios;
