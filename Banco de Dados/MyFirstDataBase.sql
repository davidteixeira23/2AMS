drop database if exists dbinfox;
-- a proxíma linha cria um banco de dados
create database dbinfox;
-- a linha abaixo escolhe o banco de dados
use dbinfox;
-- o bloco abaixo criar uma tabela
-- toda tabela precisa ter uma chave primaria
create table tbusuarios(
iduser int primary key, 
usuario varchar(50) not null,
fone varchar (15),
login varchar (30) not null unique,
senha varchar (15) not null
);

-- o comando abaixo descreve a tabela 

describe tbusuarios;

-- a linha abaixa  insere dados na tabela (CRUD)
-- create
insert into tbusuarios(iduser, usuario, fone,login,senha)
values(1,'ADM', '999-9999', 'ADM25@gmail.com','****');
-- a linha abaixo exibe os dados da tabela (CRUD)
-- read 
select * from tbusuarios;
insert into tbusuarios(iduser, usuario, fone,login,senha)
values(2,'David Teixeira', '999-9999', 'davidpedreira250@gmail.com','123456789');

insert into tbusuarios(iduser, usuario, fone,login,senha)
values(3,'Terry daves', '999-9999', 'Terry123@gmail.com','theycanseeme');
-- a linha abaixo modifica  dados na tabela  (CRUD)
update tbusuarios set fone ='24566834' where iduser=2;

-- a linha abaixo apaga um registro da tabela (CRUDE)

delete from tbusuarios where iduser=3;
