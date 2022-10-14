CREATE TABLE IF NOT EXISTS `users`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(255),
    `pasword` VARCHAR(50),
    `pseudo` VARCHAR(20),
    `date_inscription` DATETIME,
    `date_last_connexion` DATETIME,
    PRIMARY KEY (`id`)
);