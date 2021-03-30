CREATE View stagiaire_formation as
SELECT `idStagiaire`, `nomStagiaire`, `prenomStagiaire`, `adresse`, `telephone`, `sexe`, `dateNaissance`, `dateEntree`, `idHebergement`, 
formation.idFormation,`idFormateur`, formation.idFormation,formation.nomFormation,formation.idGroupe 
FROM `stagiaire` 
INNER JOIN formation ON stagiaire.idFormation = formation.idFormation