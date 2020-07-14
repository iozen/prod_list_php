create table prods (
	id int not null primary key auto_increment,
	title varchar(300) not null,
	about text,
	img varchar(300) not null,
	price float,
	status int)
	
