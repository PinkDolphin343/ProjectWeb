create database proyecto;
use proyecto;

create table usuarios(
	boleta varchar(10) not null,
	nombre varchar(20),
	apellidop varchar(20),
	apellidom varchar(20),
	fechanacim date,
	curp varchar(18),
	calle varchar(30),
	numero varchar(5),
	colonia varchar(30),
	alcaldia varchar(30),
	cp varchar(5),
	tel varchar(10),
	email varchar(20),
	escuela varchar(60),
	entidadf varchar(30),
	promedio float,
	primary key(boleta)
	);

create table cita(
	id_cita int auto_increment,
	salon int,
	horario time,
    boleta varchar(10),
	primary key(id_cita),
    constraint foreign key(boleta) references usuarios(boleta)
	);


create table administrador(
 nombre varchar(10),
 contra varchar(10),
 primary key(nombre)
);

insert into administrador values('Rafael','more1015');
select * from administrador;
select * from usuarios;
select * from cita;