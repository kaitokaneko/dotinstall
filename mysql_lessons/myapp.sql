drop table if exists users;
create table users (
  id int unsigned,
  name varchar(20),
  score float
);

-- insert into users (id, name, score) values(1, 'taguchi', 5.8);
-- insert into users (id, name, score) values(2, 'fkoji', 8.2);
-- insert into users (id, name, score) values(3, 'dotinstall', 6.1);
-- insert into users (id, name, score) values(4, 'yamada', null);

insert into users (id, name, score) values
  (1, 'taguchi', 5.8),
  (2, 'fkoji', 8.2),
  (3, 'dotinstall', 6.1),
  (4, 'yamada', null);

select * from users;
