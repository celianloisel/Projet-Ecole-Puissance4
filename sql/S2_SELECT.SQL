-- selectionne toutes les donnée, si il y a un resulstat, l'utilisateur existe déjà, 
-- il faudra agir en conséquence (double vérification avec unique)
SELECT * FROM users WHERE pseudo = "" OR email = ""