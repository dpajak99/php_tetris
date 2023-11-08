CREATE DATABASE `tetris` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */

create table gracz
(
    id_gracza       int auto_increment
        primary key,
    imie            varchar(255) null,
    nazwisko        varchar(255) null,
    nick            varchar(255) null,
    haslo           varchar(255) null,
    email           varchar(255) null,
    data_dolaczenia varchar(255) null,
    id_avatar       varchar(255) null
);

create table sesja
(
    id_sesji   int auto_increment
        primary key,
    id_gracza  varchar(255) null,
    data_sesji varchar(255) null,
    punkty     varchar(255) null
);


