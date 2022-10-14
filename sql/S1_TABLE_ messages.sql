-- On vient ici creers plusieurs TABLE qui vont etre des "sous-unitées" de notre base de donné organisé sous la forme de table a 1 entrée
--   Chaque en-tete de colonne est le nom de la "catégorie" / du champs et est définie en fonction de son nom, 
--   son type de donné ainsi que diverses propriétés de définition.

-- CREATE TABLE "nom_table" (
-- 'nom_champ_1' "parametres_champs"
-- 'nom_champ_2' "parametres_champs"
--)

-- NOT NULL : la/les valeurs rentré dans ce champs ne peuvent etre egale a 0
-- AUTO_INCREMENT : la valeur de ce champs est un chiffre entié qui, non défini par l'utilisateur va augmenter d'1 en 1 a chaque nouvelle ligne de donnée de la table créer
-- DATETIME : Format/type de donnée spécifique pour avoir un affichage "propre" de la date et de l'heure qui y est stockée
-- PRIMARY KEY (nom d'un des champs defini précédement dans la table): la valeur de ce champs servirat d'identificateur pour gérer l'indexage des donnée

CREATE TABLE IF NOT EXISTS `messages` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `game_id` INT,
    `user_id` INT,
    `message` TEXT,
    `date` DATETIME,
    PRIMARY KEY (`id`),

    CONSTRAINT FK_get_game_id_for_messages FOREIGN KEY (game_id) REFERENCES games(id),
    CONSTRAINT FK_get_users_id_for_messages FOREIGN KEY (user_id) REFERENCES users(id)
);