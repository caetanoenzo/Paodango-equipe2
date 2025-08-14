create database db_paodango;
use db_paodango;

create table usuarios(
	id_usuario int primary key AUTO_INCREMENT not null,
    nome_usuario varchar(45) not null,
    email_usuario varchar(45) not null unique,
    cpf_usuario varchar(11) not null unique,
    idade_usuario int not null,
    senha_usuario varchar(20) not null,
    create_at timestamp default CURRENT_TIMESTAMP
    
);

create table produtos (
	id_produto int primary key AUTO_INCREMENT not null,
    nome_produto varchar(45) not null,
    quantidade_produto int not null,
    validade_produto DATE not null,
    preco_produto int not null
);

create table clientes(
	id_cliente int primary key not null AUTO_INCREMENT,
    nome_cliente varchar(45) not null,
    email_cliente varchar(45) not null unique,
    telefone_cliente varchar(11) not null,
    cep_cliente varchar(8) not null,
    cpf_cliente varchar(11) not null

);

create table pedidos (
	id_pedido int primary key AUTO_INCREMENT NOT null, 
	fk_cliente int not null,
    fk_produto int not null,
    data_pedido date not null,
    
    foreign key (fk_cliente) REFERENCES clientes(id_cliente),
    foreign key (fk_produto) REFERENCES produtos(id_produto)

)
