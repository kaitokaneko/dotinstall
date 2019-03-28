drop table if exists posts;
create table posts (
  id int unsigned primary key auto_increment,
  title varchar(225),
  body text,
  created datetime default current_timestamp,
  updated datetime default current_timestamp on update current_timestamp
);

insert into posts (title,body) values('title1','body 1');
insert into posts (title,body) values('title2','body 2');
insert into posts (title,body) values('title3','body 3');

select * from posts;
