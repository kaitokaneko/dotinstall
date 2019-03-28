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
delimiter //
create trigger posts_update_trigger after update on posts for each row
  begin
    insert into logs (msg) values ('post updated!');
    insert into logs (msg) values (concat(old.title, '->' , new.title));
      end;
//
  delimiter ;

insert into posts (title,body) values('title1','body 1');
insert into posts (title,body) values('title2','body 2');
insert into posts (title,body) values('title3','body 3');

update posts set title = 'title 2 updated' where id = 2;
select * from posts;
select * from logs;
