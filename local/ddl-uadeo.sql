create database if not exists uadeo;
use uadeo;

create table users (
    id int unsigned primary key auto_increment,
    uuid varchar(100) not null unique,
    name varchar(16) not null unique,
    password varchar(300) not null,
    email varchar(200) not null unique,
    created_at datetime not null default current_timestamp,
    status tinyint(1) unsigned not null default 1
);