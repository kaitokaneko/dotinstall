drop table if exists users;
create table users (
  id int unsigned primary key auto_increment,
  name varchar(20),
  score float,
  rank enum('gold', 'silver', 'bronze')
);

insert into users (name, score, rank) values ('taguchi', 5.8, 'silver');
insert into users (name, score, rank) values ('fkoji', 8.2, 'gold');
insert into users (name, score, rank) values ('dotinstall', 6.1, 'red');


-- select * from users;
select * from users where rank = 'silver';
select * from users where rank = 2;
