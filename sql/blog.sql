create database blog;

use blog;

create table usuario(

id int not null auto_increment primary key,
nome varchar(50) not null,
senha varchar(50) not null,
email varchar(50) not null,
perfil varchar(50)


);

insert into usuario(nome,senha,email,perfil) values ('harrison','1234','harrison.mitchell@hotmail.com','admin');

select * from usuario;