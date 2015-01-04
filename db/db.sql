create database IF NOT EXISTS prj_angular;
use prj_angular;


create table tbl_admin
(
    id int auto_increment primary key not null,
    name varchar(30) CHARACTER SET utf8 not null,
    email varchar(50) not null,
    password varchar(50) not null
);
INSERT INTO tbl_admin(name, email, password) VALUES('Administrator', 'admin@gmail.com', 'admin');
