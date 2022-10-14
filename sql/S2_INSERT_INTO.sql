-- Pour créer une ligne de donné d'abord on selectionne la table qui nous intéresse ainsi que tout OU seulement les champs qui nous intéresses :
-- INSERT INTO "table_cible" (categorie_1, categorie_2, categorie_3...)
-- VALUES (donnée_categorie_1, donnée_categorie_2, donnée_categorie_3...)

-- NOW(): est une fonction qui va permettre de rentré automatiquement dans le champs cible les information sur l'heure et la date ACTUELLE 

INSERT INTO users (email, pasword, pseudo, date_inscription) VALUES ('celianloisel@gmail.com', '1234', 'Célian', NOW())