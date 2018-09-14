CREATE DATABASE aptech_php_14_xuanvien890;
USE aptech_php_14_xuanvien890;
CREATE TABLE users (
id int AUTO_INCREMENT PRIMARY KEY,
name varchar(50),
email varchar(100),
password varchar(50),
created_date timestamp
);
SELECT * FROM aptech_php_14_xuanvien890.users;
INSERT INTO aptech_php_14_xuanvien890.users
(name,email,password,created_date)
value ('Vien', 'xuanvien@gmal.com', '123',now());
INSERT INTO aptech_php_14_xuanvien890.users
(name,email,password,created_date)
value ('viet', 'xuanvien@gmal.com', '124',now());

CREATE TABLE roles (
id int AUTO_INCREMENT PRIMARY KEY,
name varchar(10)
);
select * from roles;
insert into roles (name)
value ('admin');
insert into roles (name)
value ('copy writer');
insert into roles (name)
value ('manager');
insert into roles (name)
value ('director');
 CREATE TABLE role_user (
 id int AUTO_INCREMENT PRIMARY KEY,
 user_id int,
 role_id int
) ;
 insert into role_user(user_id, role_id) 
 value (1,5);
 select*FROM  role_user ;
 select*from roles where id =2;
 
USE aptech_php_14;
CREATE TABLE tasks(
uid INT ,
uLastname varchar (255),
uFirstname varchar (255),
uEmail varchar (255),
uRole int,
uState int,
uCreatedate datetime,
uModifiedDate datetime
);
select * from tasks;
INSERT INTO tasks 
(uid,uLastname,uFirstname,uEmail,uRole,uState,uCreatedate,uModifiedDate)
VALUES
	(1, 'vien', 'Nguyen', 'vien@gmail.com', 1, 1, NOW(),NOW()),
    (2, 'trang', 'ly', 'trang@hotmail.com', 2, 1, NOW(),NOW()),
    (3, 'Henry', 'Tran', 'tram@resolutioninc.com', 2, 1, NOW(),NOW()),
    (4, 'tu', 'ly', 'tu@pageworth.com', 1, 1, NOW(),NOW()),
    (5, 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2, 1, NOW(),NOW()); 
SELECT DISTINCT uRole
FROM tasks;
SELECT * FROM tasks LIMIT
2;
SELECT * FROM tasks
WHERE uRole = 1 and uState = 1;
SELECT * FROM tasks
WHERE uRole = 2;
UPDATE tasks
SET uState = -1
WHERE uid = 3;
DELETE FROM tasks
WHERE uid = 5;


