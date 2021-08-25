DROP DATABASE IF EXISTS hourbeauty;
CREATE DATABASE hourbeauty;
use hourbeauty;

DROP TABLE IF EXISTS usuario;
Create table usuario(
	idusuario int(11) primary key auto_increment, 
	nomeusuario varchar(50),
	email varchar(50) unique,
	senha varchar(11),
	telefone char(11),
	permissao boolean
)engine=InnoDB;

DROP TABLE IF EXISTS procedimento;
Create table procedimento(
	idproced int(11) primary key auto_increment, 
	nomeprocedimento varchar(50),
	valor float(5,2),
	tempo int(10)
)engine=InnoDB;

DROP TABLE IF EXISTS hora;
Create table hora(
	idhora int(11) primary key auto_increment, 
	hora time
)engine=InnoDB;

DROP TABLE IF EXISTS agendar;
Create table agendar(
	idagend int(11) primary key auto_increment, 
	data date,
	idusuario int(11),
	idproced int(11),
	idhora int(11),
	
	Foreign key (idusuario) references usuario(idusuario),
	Foreign key (idproced) references procedimento(idproced),
	Foreign key (idhora) references hora(idhora)

)engine=InnoDB;

DROP TABLE IF EXISTS disponibilidade;
Create table disponibilidade(
	iddisp int(11) primary key auto_increment, 
	disp boolean,
	idagend int(11),
	Foreign key (idagend) references agendar(idagend)
)engine=InnoDB;