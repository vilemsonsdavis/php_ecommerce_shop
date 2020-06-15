create table users(
	user_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    username varchar(60),
    password varchar(60),
    email varchar(60)
);