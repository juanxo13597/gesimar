CREATE DATABASE gesimar;
USE gesimar;

CREATE TABLE users(
    id              int(11) auto_increment,
    username        varchar(255) not null,
    password        varchar(255) not null,
    role            varchar(255) default null,

    constraint pk_users primary key(id),
    unique(username)

)ENGINE=INNODB;

CREATE TABLE clientes(
    id              int(11) auto_increment,
    dni             varchar(255) default null,
    nombre          varchar(255) not null,
    direccion       varchar(255) default null,
    telefono        varchar(255) default null,
    email           varchar(255) default null,
    perfil_wimax    varchar(255) default null,
    T_creacion      datetime not null,
    T_actualizado   datetime default null,

    constraint pk_clientes primary key(id),
    unique(dni),
    unique(nombre)

)ENGINE=INNODB;

CREATE TABLE instalaciones(
    id              int(11) auto_increment,
    cliente         int(11) not null,
    cuota           int(255),
    activa          int(255) default 1,
    T_creacion      datetime not null,
    T_actualizado   datetime default null,

    constraint pk_instalaciones primary key(id),
    constraint fk_instalaciones_cliente foreign key (cliente) references clientes(id)

)ENGINE=INNODB;