drop table if exists posts;
create table posts (
  id int unsigned primary key auto_increment,
  title varchar(225),
  body text
);

drop table if exists comments;
create table comments (
  id int unsigned primary key auto_increment,
  post_id int unsigned not null,
  body text
);

insert into posts (title,body) values('title1','body 1');
insert into posts (title,body) values('title2','body 2');
insert into posts (title,body) values('title3','body 3');

insert into comments (post_id,body) values(1,'first comment for post 1');
insert into comments (post_id,body) values(1,'second comment for post 1');
insert into comments (post_id,body) values(3,'first comment for post 3');

delete from posts where id = 2;
  insert into posts (title,body) values('new title','new body');
  -- insert into comments (post_id,body) values(4,'first comment new post 3');
  insert into comments (post_id,body) values(last_insert_id(),'first comment for new post');

select * from posts;
select * from comments;
