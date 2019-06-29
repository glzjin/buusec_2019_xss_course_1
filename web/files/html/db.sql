CREATE DATABASE IF NOT EXISTS treehole;
USE treehole;
create table if not exists admin
(
	id int auto_increment
		primary key,
	username varchar(100) not null,
	password varchar(100) not null
)
;

create table if not exists treehole
(
	id varchar(1000) not null
		primary key,
	content varchar(10000) not null,
	is_viewed tinyint default '0' not null
)
;

INSERT INTO admin(username, password) VALUES('admin', REPLACE(REPLACE(load_file('/init_password'), CHAR(10), ''), CHAR(13), ''));
