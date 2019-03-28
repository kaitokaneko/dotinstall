drop table if exists posts;
create table posts (
  id int unsigned primary key auto_increment,
  title varchar(225),
  body text
);

drop table if exists comments;
create table comments (
  id int unsigned primary key auto_increment,
  post_id int not null,
  body text
);

insert into posts (title,body) values('title1','body 1');
insert into posts (title,body) values('title2','body 2');
insert into posts (title,body) values('title3','body 3');

insert into comments (post_id,body) values(1,'first comment for post 1');
insert into comments (post_id,body) values(1,'second comment for post 1');
insert into comments (post_id,body) values(3,'first comment for post 3');
insert into comments (post_id,body) values(4,'first comment for post 4');

select * from posts;
select * from comments;