<?php

$utilisateur = false;
//vérification des variables saisie par l'utilisateur 

if (isset($_POST["name"]) && isset($_POST["psw"])) {
    $NomUtilisateur = htmlspecialchars($_POST["name"]);
    $Mp = htmlspecialchars($_POST["psw"]);
    $saisievalable = true;
}

try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=alger', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
// on prépare avant tout la requette grace a prepare
$requette = $bdd->prepare('SELECT * FROM profil WHERE nom = ? AND mp <= ? ORDER BY mp');
// on envoie notre requette grace a execute
$requette->execute(array($NomUtilisateur, $Mp));
//Traitement des donnes 
while ($donnees = $requette->fetch()) {
    if ($donnees['nom'] == $NomUtilisateur && $donnees['mp'] == $Mp) {
        $utilisateur = true;
        session_start();
        $_SESSION['lenom'] = $donnees['nom']; 
        $_SESSION['active'] = true ;
        $_SESSION['sec'] = true; 
    }
}
if ($utilisateur) {
    header('Location: index-profile-ok.php');
    exit();
} else {
    echo ('Oups un probléme est servenue !! Nom ou mot de passe erroné <meta http-equiv="refresh" content="5; url=inscription.php" />');
}

?> 


<?php
$requette->closeCursor(); // Termine le traitement de la requête
?>