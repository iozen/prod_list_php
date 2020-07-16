create table orders (
	id int not null primary key auto_increment,
	usr_id int,
	ip varchar(45) not null, 
	time timestamp 
);
create table orders_connection (
	id int not null primary key auto_increment,
	prod_id int,
	order_id int
);
create table users (
	id int not null primary key auto_increment,
	name varchar(300), 
	last_name varchar(300), 
	solr varchar(300), 
	pass varchar(300), 
	email varchar(300), 
	mobile varchar(300), 
	time timestamp 
);
