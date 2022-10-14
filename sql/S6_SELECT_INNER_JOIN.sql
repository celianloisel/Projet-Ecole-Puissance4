---------------------------------------[ STORY 6 ]---------------------------------------
-- on doit faire apparaitre un tableau ponctuel d'infos 
-- la difficulté de cette story reside dans le fait que les différent donné/champs de donné ne viennent pas des meme tables
-- c'est pour ça qu'on va utiliser les inner join

-- En fait avec inner join tu viens créer un echange de donnée , au moment de la requete en elle meme, ce rejoignant 
-- SeleCT ..., ..., ..., ... affiche et permet de stocker les info demandé et nous les presenté en un tableau unique si souhaité
-- FROM ...(table principale utilisé qui va "recevoir" les infos)
-- JOIN ... Table cible qui contient une info qu'on veut
-- ON ... champs table principale receveuse = champs cible 

-- ORDER BY : permet de trier les infos ici retournée par ordre alphabétique (Par défaut les résultats sont classés par ordre ascendant)

SELECT pseudo, game, difficulty, score 
FROM scores 
INNER JOIN users ON scores.user_id = users.id 
INNER JOIN games ON scores.game_id = games.id 
ORDER BY game, difficulty, score DESC