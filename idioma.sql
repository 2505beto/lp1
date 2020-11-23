create database idiomas;
use idiomas;

create table profesor(
id_prof int auto_increment,
nombre varchar(20) not null,
idioma varchar(20) not null,
constraint pk_profesor primary key (id_prof)
);

create table programacion(
id_pr int auto_increment, 
inicio varchar(10) not null,
tipo varchar(10) not null,
id_prof int,
constraint pk_proramacion primary key (id_pr),
constraint fk_programacion_profesor foreign key (id_prof) references profesor(id_prof)
);

create table leccion(
id_lecc int auto_increment, 
numero int not null,
estado varchar(20) not null,
comentario_profesor varchar(80) not null,
comentario_alumno varchar(80) not null,
id_pr int,
constraint pk_proramacion primary key (id_lecc),
constraint fk_leccion_programacion foreign key (id_pr) references programacion(id_pr)
);


create table estudiante(
id_estu int, 
nombre varchar(25) not null,
email varchar(60) not null,
id_lecc int,
constraint pk_estudiante primary key (id_estu),
constraint fk_estudiante_leccion foreign key (id_lecc) references leccion(id_lecc)
);
