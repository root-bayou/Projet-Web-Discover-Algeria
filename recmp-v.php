<?php
// vérification de la saisie 
if (isset($_POST["name"]) && isset($_POST["num"]) && isset($_POST["psw"])) {
    $NomU = htmlspecialchars($_POST["name"]);
    $NumU = htmlspecialchars($_POST["num"]);
    $NvMpU = htmlspecialchars($_POST["psw"]);
}
else {
    echo ('un probléme est servenue vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=recmp.php" />');
    exit();
}
//exigé un mots de passe de plus de 6 caractére 
if(strlen($NvMpU)<6){
    echo ('Mots de passe trop petit veuillez saisir plus de 6 caractére vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=recmp.php" />');
    exit();
}
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

$trouve = false ; 

$reponse = $bdd->query('SELECT nom , numtele FROM profil');
while ($donnees = $reponse->fetch()) {
    if($donnees['numtele'] == $NumU && $donnees['nom'] == $NomU){
        echo ('mot de passe changer <br>');
        $trouve = true ; 
    }

}
if($trouve){
    // on prépare avant tout la requette grace a prepare
    $requette = $bdd->prepare('UPDATE profil SET mp = :nvmp WHERE numtele = :nvm');
    // on envoie notre requette grace a execute
    $requette->execute(array(
        'nvmp'=>$NvMpU,
        'nvm'=>$NumU, 

    
    )); } else {
        echo ('un probléme est servenue le nom ou le numéro n\'existent pas vous allez étre redérigé vers la page de récupération ! <meta http-equiv="refresh" content="5; url=recmp.php" />');
    exit();

    }
    echo ('<meta http-equiv="refresh" content="2; url=index.php" />');
    exit();



?>
