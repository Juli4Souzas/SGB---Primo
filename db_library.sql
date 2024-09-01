create database db_library;
use db_library;
drop database db_library;

create table tb_livro(
cd_livro int not null auto_increment,
nm_titulo varchar(100) not null,
nm_editora varchar(100) not null,
aa_ano_publicacao int not null,
qtd_paginas int not null,
cd_genero int,
nm_autor1 varchar(100) not null,
nm_autor2 varchar(100),
nm_autor3 varchar(100),
nm_autor4 varchar(100),
nm_autor5 varchar(100),
nm_status varchar(100) not null,
primary key (cd_livro)

);
select * from tb_livro;
drop table tb_livro;

create table imagens(
	id_imagem int AUTO_INCREMENT PRIMARY key,
    nome_imagem varchar(100),
    fk_cd_livro int,
    FOREIGN key(fk_cd_livro) REFERENCES tb_livro(cd_livro) ON DELETE CASCADE
);
select * from imagens;

create table tb_autor(
cd_autor int not null auto_increment,
nm_autor varchar (100) not null,
primary key (cd_autor)
);
select * from tb_autor;

create table tb_genero(
cd_genero int not null auto_increment,
nm_genero varchar(50) not null,
primary key (cd_genero)
);
select * from tb_genero;

create table tb_emprestimo(
cd_emprestimo int not null auto_increment,
cd_usuario int not null,
cd_admin int not null,
dt_data_emprestimo date not null,
primary key (cd_emprestimo)
);
select * from tb_emprestimo;

create table tb_emprestimo_livro(
cd_emprestimo_livro int not null auto_increment,
fk_cd_livro int,
fk_cd_usuario int,
nm_titulo varchar(100) not null,
nm_nome_usuario varchar(100) not null,
dt_data_emprestimo datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
dt_data_devolucao DATETIME not null DEFAULT (CURRENT_TIMESTAMP + INTERVAL 10 DAY),
primary key (cd_emprestimo_livro),
foreign key (fk_cd_usuario) references tb_usuario (cd_usuario),
foreign key (fk_cd_livro) references tb_livro (cd_livro)
);
select * from tb_emprestimo_livro;
insert into tb_emprestimo_livro (nm_titulo, nm_nome)values
('teste', 'adm');
drop table tb_emprestimo_livro;

create table tb_emprestimo_historico(
cd_emprestimo_historico int not null auto_increment,
nm_titulo varchar(100) not null,
nm_nome_usuario varchar(100) not null,
dt_data_emprestimo datetime NOT NULL,
dt_data_devolucao DATETIME not null DEFAULT CURRENT_TIMESTAMP,

primary key (cd_emprestimo_historico)
);
select * from tb_emprestimo_historico;
drop table tb_emprestimo_historico;

create table tb_usuario(
cd_usuario int not null auto_increment,
nm_nome varchar(100) not null,
tel_telefone varchar(11) not null,
nm_email varchar(100) not null,
nm_nome_usuario varchar (50) not null,
nm_senha char(8) not null,
ds_status char(1) default (0),
primary key (cd_usuario)
);
select * from tb_usuario;
drop table tb_usuario;

create table tb_admin(
cd_admin int not null auto_increment,
nm_nome varchar(100) not null,
nm_nome_usuario varchar (50) not null,
nm_email varchar(100) not null,
nm_senha char(8) not null,
primary key (cd_admin)
);
select * from tb_admin;
drop table tb_admin;

insert into tb_admin (nm_nome, nm_nome_usuario, nm_email, nm_senha)values
('adm', 'adm', 'adm@gmail.com', '12345678');

insert into tb_genero (nm_genero) values
('Romance'),
('Ficção'),
('Biografia'),
('Autobiografia'),
('Infantojuvenil'),
('Poesia'),
('Suspense'),
('Religioso'),
('Terror');