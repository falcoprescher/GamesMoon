CREATE DATABASE gamesmoon;

USE gamesmoon;

CREATE TABLE users (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
alias varchar(50) UNIQUE,
pwd_hash char(40)
);

CREATE TABLE sessions (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
user_id int,
session_key char(40),
login TIMESTAMP,
logout TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE games (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_name char(50) UNIQUE,
display_name varchar(50),
path varchar(50),
width int,
height int,
startfile varchar(150)
);

CREATE TABLE games_libs (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
game_id int,
lib_name varchar(50)
);

CREATE TABLE game_sessions (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
session_id int,
game_id int,
session_key char(40)
);

CREATE TABLE scores (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
game_id int,
user_id int,
created TIMESTAMP,
points int
);
