CREATE DATABASE portfolioWebsite CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_0900_as_cs'; 
use portfolioWebsite;
CREATE TABLE `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `permissiongroup` ENUM("Admin","Editor"),
    `disabled` BOOLEAN,
    `activationcode` varchar(255),
    `password` varchar(64),
    `salt` varchar(64),
    PRIMARY KEY(id)
    );

CREATE TABLE `content` (
	`id` int NOT NULL AUTO_INCREMENT,
	`type`varchar(32),
	`inside` varchar(32),
	`location` varchar(32),
	`filename` varchar(64),
	`disabled` BOOLEAN,
	`content` LONGTEXT,
	PRIMARY KEY(id)
    );