



use samplmk
create table donors(name varchar(255),age int,addr varchar(255),ph varchar(255));
create table dons (ph varchar(255),amt int,date varchar(255));
create table donsp (ph varchar(255),plant varchar(255),qty int,date varchar(255));
create table plant (plant varchar(255) primary key,inc int, outg int,bal int generated always as (inc-outg) stored);