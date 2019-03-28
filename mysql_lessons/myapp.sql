drop table if exists users;
create table users (
  id int unsigned primary key auto_increment,
  name varchar(20),
  score float
);

insert into users (name, score) values ('taguchi', 5.8);
insert into users (name, score) values ('fkoji', 8.2);
insert into users (name, score) values ('dotinstall', 6.1);
insert into users (name, score) values ('Tanaka', 4.2);
insert into users (name, score) values ('yamada', null);
insert into users (name, score) values ('tashiro', 7.9);

--  + - * / %
-- update users set score = score * 1.2 where id % 2 = 0;
-- select * from users;

-- select round(5.355); -- 5
-- select round(5.355, 1); -- 5.4
-- select floor(5.833); -- 5
-- select ceil(5.238); -- 6
-- select rand();

select * from users order by rand() limit 1;
