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

-- select length ('hello'); -- 5
-- select substr('hello', 2); -- ello
-- select substr('hello', 2, 3); -- ell
-- select upper('hello'); -- HELLO
-- select lower('hello'); -- hello
-- select concat('hello', 'world'); -- helloworld

select length(name), name from users order by length(name);
select length(name) as len, name from users order by len;
