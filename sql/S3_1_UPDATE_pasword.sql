---------------------------------------[ STORY 3 ]---------------------------------------
--UPDATE permet modifications sur des lignes existantes.cette commande peut est utilisée avec WHERE pour spécifier quelles lignes 

--UPDATE "table_cible" SET "champ_cible" = "donnée_souhaitée" WHERE "condition de ciblage"
-- ici where sert plutot de condition de "sécurité" / de "vérification" pour ne permettre une action que si les informations sont bonnes

UPDATE users SET pasword = "" WHERE id = ""