Use thewse commands correspondingly to get mysql setup.



create user 'kam'@'localhost' identified by 'x123';
create user 'man'@'localhost' identified by 'x123';
create user 'sho'@'localhost' identified by 'x123';
create user 'nou'@'localhost' identified by 'x123';
create user 'mak'@'localhost' identified by 'x123';
create user 'yuv'@'localhost' identified by 'x123';

create database sample1;
create database samplemn;
create database samplemk;
create database samplenf;
create database samplesh;
create database sampleyu;

grant all privileges on sample1.* to 'kam'@'localhost';
grant all privileges on samplemn.* to 'man'@'localhost';
grant all privileges on samplemk.* to 'mak'@'localhost';
grant all privileges on samplenf.* to 'nou'@'localhost';
grant all privileges on samplesh.* to 'sho'@'localhost';
grant all privileges on sampleyu.* to 'yuv'@'localhost';

someone is requested to make individuaal versions of thid setup.

eg: 
    {
    create cmd[com1]
    create db cmd[com1]
    grant priv cmd[com1]
    }
    it would be useful to create individual setups, just add it to this file (append it).
{place setup code here}
    kam:
        create //will do this later

    man:
        use samplemn;
        create table supl (name varchar(255),age int,addr varchar(255),ph varchar(255));
        create table proc (name varchar(255),age int,addr varchar(255),ph varchar(255));







gen notes:
delete from proc where ph IS NULL;//to dlt null rows
