create table products(
	product_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    product varchar(30) not null,
    price float not null,
    description varchar (100),
    origin_country varchar(20)
);