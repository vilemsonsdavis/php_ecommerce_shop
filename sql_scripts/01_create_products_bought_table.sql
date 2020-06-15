create table products_bought(
    purchase_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    product varchar(30) not null,
    price float not null,
    username varchar(60) DEFAULT 'Unknown'
);