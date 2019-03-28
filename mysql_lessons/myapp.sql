drop table if exists posts;
create table posts (
  id int unsigned primary key auto_increment,
  title varchar(225),
  body text
);

drop table if exists logs;
create table logs (
  id int unsigned primary key auto_increment,
  msg varchar(225)
);

drop trigger if exists posts_insert_trigger;
create trigger posts_insert_trigger after insert on posts for each row insert into
logs (msg) values ('post added!');

insert into posts (title,body) values('title1','body 1');
insert into posts (title,body) values('title2','body 2');
insert into posts (title,body) values('title3','body 3');

select * from posts;
select * from logs;

-- show triggers;
show triggers \G;
