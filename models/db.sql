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

INSERT INTO users (username, password, role)
VALUES ('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'ADMIN');

CREATE TABLE clientes(
    id              int(11) auto_increment,
    user_creador    int(11) not null,
    dni             varchar(255) default null,
    nombre          varchar(255) not null,
    direccion       varchar(255) default null,
    telefono        varchar(255) default null,
    email           varchar(255) default null,
    perfil_wimax    varchar(255) default null,
    cuenta_bancaria varchar(255) default null,
    T_creacion      datetime not null,
    T_actualizado   datetime default null,

    constraint pk_clientes primary key(id),
    constraint fk_clientes_users foreign key (user_creador) references users(id),
    unique(nombre)

)ENGINE=INNODB;

CREATE TABLE instalaciones(
    id              int(11) auto_increment,
    user_creador    int(11) not null,
    cliente         int(11) not null,
    cuota           int(255),
    activa          int(255) default 1,
    tipo_conexion   varchar(255),
    T_creacion      datetime not null,
    T_actualizado   datetime default null,

    constraint pk_instalaciones primary key(id),
    constraint fk_instalaciones_users foreign key (user_creador) references users(id) on delete NO ACTION,
    constraint fk_instalaciones_cliente foreign key (cliente) references clientes(id) on delete cascade

)ENGINE=INNODB;

CREATE TABLE incidencias(
    id              int(11) auto_increment,
    user_creador    int(11) not null,
    cliente         int(11) not null,
    nota            text,
    T_creacion      datetime not null,
    T_actualizado   datetime default null,


    constraint pk_incidencias primary key(id),
    constraint fk_incidencias_users foreign key (user_creador) references users(id) on delete NO ACTION,
    constraint fk_incidencias_clientes foreign key (cliente) references clientes(id)
)ENGINE=INNODB;