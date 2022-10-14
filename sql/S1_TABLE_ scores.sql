CREATE TABLE IF NOT EXISTS `scores`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT,
    `game_id` INT,
    `difficulty` VARCHAR(15),
    `score` INT,
    `date` DATETIME,
    PRIMARY KEY (`id`)

    CONSTRAINT FK_GET_users_id_for_scores 
    FOREIGN KEY (user_id)
    REFERENCES users(id),

    CONSTRAINT FK_GET_games_id_for_scores -- la contrainte ça permet de donner un nom a tout ce bloc et de le cibler plus facilement avec son nom "fk..."
    FOREIGN KEY (game_id) --notre cible DANS LA TABLE COURRANTE
    REFERENCES games(id) -- notre cible DANS LA TABLE ETRANGERE CIBLE
    -- ON DELETE CASCADE , -- ça ça me permet d'automatiser la supression des donnée lié entre elle pour eviter d'avoir des score sans joueurs
);