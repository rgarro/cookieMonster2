CREATE TABLE kites (
	id integer PRIMARY KEY AUTOINCREMENT,
	name varchar,
	area integer
);

CREATE TABLE spots (
	id integer PRIMARY KEY AUTOINCREMENT,
	name varchar,
	latitude numeric,
	longitude numeric
);

CREATE TABLE sessions (
	id integer PRIMARY KEY AUTOINCREMENT,
	kite_id integer,
	spot_id integer,
	start datetime,
	end datetime,
	minutes float,
	board_id integer,
	user_id integer,
	knots integer,
	wind_direction varchar
);

CREATE TABLE boards (
	id integer PRIMARY KEY AUTOINCREMENT,
	name varchar,
	size numeric
);

CREATE TABLE users (
	id integer PRIMARY KEY AUTOINCREMENT,
	email varchar,
	password varchar
);






