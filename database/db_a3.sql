drop database if exists db_a3;
create database db_a3;

drop table if exists personal;
create table personal(
    id int primary key auto_increment not null,
    nik varchar(16) not null,
    pass varchar(20) not null
);

drop table if exists statistik;
create table statistik(
    personal_id int references personal(id),
    baik int not null,
    buruk int not null
);

insert into personal values
(1, '3201012103990008', '8000993012101023');

insert into statistik values
(1, 1, 0); 