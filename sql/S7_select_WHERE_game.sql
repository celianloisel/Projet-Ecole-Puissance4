---------------------------------------[ STORY 7 ]---------------------------------------
-- requete très similaire a chaque fois, on change cependant la condition WHERE pour pouvoir s'adapter en fonction des besoins sur le moment
-- quel besoins ? : "il est possible de filtrer les resultat par jeu, joueur et difficulté de la partie" cependant les infos retourné sont les meme et leurs classement alphabétique reste inchangé
SELECT pseudo, game, difficulty, score FROM scores INNER JOIN users ON scores.user_id = users.id INNER JOIN games ON scores.game_id = games.id WHERE game = "" ORDER BY game, difficulty, score DESC
