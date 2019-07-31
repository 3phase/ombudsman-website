Drop Database IF EXISTS GuardCityDB;

Create Database GuardCityMyDB charset 'utf8';

Use GuardCityMyDB;

Create Table planets(
	id Integer Primary Key Auto_Increment,
    name Varchar(50) NOT NULL,
    level Integer Not NULL,
    reachable_population Integer Not NULL Default 0
);

Create Table aliens(
	Id Integer Primary Key Auto_Increment,
    name Varchar(255) NOt NULL,
	picture_path varchar(255) NOT NULL,
	planet_id Integer not null,
    foreign key(planet_id) references Planets(id)
);

Create Table users(
	Id Integer primary key auto_increment,
    name Varchar(255) Not NULL,
    email varchar(255) NOT NULL,
    email_verified_at timestamp,
    password varchar(255)
);

CREATE TABLE progress(
	id integer auto_increment not null,
    user_id integer not null,
	trust Integer Default 0,
    popularity Integer Default 0,
    energy Integer Default 0,
    jokers Integer Default 0,
    jokers_level Integer Default 0,
    days Integer Default 0,
    points Integer Default 0,
    planet_id Integer Not NULL,
    Foreign Key (planet_id) references Planets(Id),
	Foreign Key (user_id) references Users(id)
);

Create Table Nodes(
	id integer primary key auto_increment,
    dialog_file_path varchar(255)
);

Create Table options(
	start_id Integer,
    next_id Integer ,
    popularity Integer Not NULL Default 0,
    energy Integer Not NULL Default 0,
    days Integer NOT NULL Default 0,
    trust Integer Not NULL Default 0,
    reachable_trust Integer Not NULL Default 0,
    Foreign Key (start_id) references Nodes(id),
    Foreign Key (next_id) references Nodes(id)
);

Create Table aliens_missions(
    alien_id Integer Not NULL,
    node_id Integer Not NULL,
    reachable_popularity Integer,
    Foreign Key (reachable_popularity) references Aliens(id),
    Foreign Key (node_id) references Nodes(id)
);


