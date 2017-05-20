create database GR_constructora2
use GR_constructora2

CREATE TABLE Trabajadores(
    id_trabajador int primary key not null auto_increment,
    nombre varchar(50),
    apellido varchar(50),
    direccion varchar(50),
    telefono varchar(50),
    edad int
);

insert into Trabajadores (nombre,apellido,direccion,telefono,edad)values('Erick','torres','Rinconada','462345432','23')
select * from Trabajadores

create table cliente(
id_cliente int primary key not null auto_increment,
nombre varchar (50),
direccion varchar (50),
telefono varchar(50)
);

select * from cliente

create table proyecto(
id_proyecto int primary key not null auto_increment,
fecha_ini date,
fecha_fin date,
nombre varchar(30),
direccion varchar(30),
costo varchar(20),
descripcion varchar (50),
id_cliente int,
FOREIGN KEY (id_cliente)references cliente(id_cliente)
);

create table rol(
id_rol int primary key not null auto_increment,
nombre varchar(50)
);

create table tipo(
id_tipo int primary key not null auto_increment,
descripcion varchar(50)
);

create table maquinaria(
id_maquinaria int primary key not null auto_increment,
nombre varchar(50),
cantidad int,
id_tipo int,
foreign key (id_tipo) references tipo(id_tipo)
);

create table rol_trab(
id_rol_trab int primary key not null auto_increment,
fecha_inicio date,
fecha_fin date,
id_trabajador int,
id_rol int,
id_proyecto int,
foreign key (id_trabajador) references Trabajadores(id_trabajador),
foreign key (id_rol) references rol(id_rol),
foreign key (id_proyecto) references proyecto(id_proyecto)
);

create table proy_maq(
id_proy_maq int primary key not null auto_increment,
id_maquinaria int,
id_proyecto int,
foreign key (id_maquinaria) references maquinaria(id_maquinaria),
foreign key (id_proyecto) references proyecto(id_proyecto)
);
