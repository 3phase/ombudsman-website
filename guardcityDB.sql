Drop Database IF EXISTS GuardCityDB;

Create Database GuardCityDB charset 'utf8';

Use GuardCityDB;

Create Table planets(
	id Integer Primary Key Auto_Increment,
    name Varchar(50) NOT NULL,
    level Integer Not NULL,
    reachable_population Integer Not NULL Default 0
);

Create Table aliens(
	id Integer Primary Key Auto_Increment,
    name Varchar(255) NOt NULL,
	picture_path varchar(255) NOT NULL,
	planet_id Integer not null,
    foreign key(planet_id) references planets(id)
);

Create Table users(
	id Integer primary key auto_increment,
    name Varchar(255) Not NULL,
    email varchar(255) NOT NULL,
    email_verified_at timestamp,
    password varchar(255)
);

create table players(
	id integer primary key auto_increment,
    nickname varchar(255) NOT NULL,
    user_id integer NOT NULL,
    foreign key(user_id) references users(id) on delete cascade
);

CREATE TABLE progress(
	id integer auto_increment not null primary key,
    player_id integer not null,
	trust Integer Default 0,
    popularity Integer Default 0,
    energy Integer Default 0,
    jokers Integer Default 0,
    jokers_level Integer Default 0,
    days Integer Default 0,
    points Integer Default 0,
    planet_id Integer Not NULL,
    Foreign Key (planet_id) references planets(Id),
	Foreign Key (player_id) references players(id)
);

Create Table nodes(
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
    Foreign Key (start_id) references nodes(id) on delete cascade,
    Foreign Key (next_id) references nodes(id) on delete cascade
);


Create Table aliens_missions(
    alien_id Integer Not NULL,
    node_id Integer Not NULL,
    reachable_popularity Integer,
    Foreign Key (alien_id) references aliens(id) on delete cascade,
    Foreign Key (node_id) references nodes(id) on delete cascade
);

Create Table users_missions(
	progress_id integer NOT NULL,
    node_id integer NOT NULL,
    Foreign key (progress_id) references progress(id) on delete cascade,
    Foreign key (node_id) references nodes(id) on delete cascade
);


