use portfolioWebsite;

CREATE TABLE `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `permissiongroup` ENUM("Admin", "Editor"),
    `disabled` BOOLEAN,
    `activationcode` varchar(255),
    `password` varchar(64),
    `salt` varchar(64),
    PRIMARY KEY(id)
);

CREATE TABLE `content` (
    `id` int NOT NULL AUTO_INCREMENT,
    `type` varchar(32),
    `inside` varchar(32),
    `location` varchar(32),
    `filename` varchar(64),
    `disabled` BOOLEAN DEFAULT 0,
    `content` LONGTEXT,
    PRIMARY KEY(id)
);

INSERT INTO `content` (
        `type`,
        `inside`,
        `location`,
        `filename`,
        `disabled`,
        `content`
    )
VALUES ('desktop', 'root', 'root', NULL, '0', NULL);