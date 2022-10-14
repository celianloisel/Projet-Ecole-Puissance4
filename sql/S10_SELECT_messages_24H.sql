---------------------------------------[ STORY 10 ]---------------------------------------

-- SELECT : on va selectionner toute les info demandees
-- CASE WHEN : permet d'utiliser les condition SI SINON (en gros ça permet de faire du branchement conditionel)
-- case va envoyer true ou false dans une colonne temporaire en verifiant la condition
-- SENDER : nouvelle colonne pour stocker boolean (Expédideur)
-- on utilise INNER JOIN pour recuperer au moment de la requete des donné presente dans la table cible users et les "importer" dans la table courrange/receveuse message que l'on manipule
-- DATE_SUB() soustraire une valeur au format TIME à une date permet de calculé ainsi l'intervalle de temps necessaire (les dernière 24H)

SELECT message, user_id, date, CASE WHEN user_id = "" THEN TRUE ELSE FALSE END AS SENDER FROM messages INNER JOIN users ON messages.user_id = users.id WHERE date > DATE_SUB(NOW(), INTERVAL 1 DAY);

