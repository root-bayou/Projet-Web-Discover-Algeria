<?php
// vérification de la saisie 
if (isset($_POST["nomprofile"]) && isset($_POST["mpprofile"]) && isset($_POST["email"]) && isset($_POST["mpr"]) && isset($_POST["adrrprofile"]) && isset($_POST["teleprofile"])) {
    $NomU = htmlspecialchars($_POST["nomprofile"]);
    $MpU = htmlspecialchars($_POST["mpprofile"]);
    $emailU = htmlspecialchars($_POST["email"]);
    $mpr = htmlspecialchars($_POST["mpr"]);
    $adrrU = htmlspecialchars($_POST["adrrprofile"]);
    $teleU = htmlspecialchars($_POST["teleprofile"]);
}
else {
    echo ('un probléme est servenue vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=inscription.php" />');
    exit();
}
//fonction qui vérifie la validité de l'adresse mail saisie 
function EmailValide($email)
{
    if (preg_match("/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i", $email)) {
        return true;
    } else {
        return false;
    }
}
//application
if (EmailValide($emailU) == false) {
    echo ('Mail non Valide vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=inscription.php" />');
    exit();
}
//vérification du numéro saisie 
if (preg_match("#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#", $teleU) == false) {
    echo ('Numéro non Valide vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=inscription.php" />');
    exit();
}
//comparaison des mots de passe 
if (strcmp($MpU, $mpr) !== 0) {

    echo ('les mots de passe ne sont pas identiques vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=inscription.php" />');
    exit();
}
//exigé un mots de passe de plus de 6 caractére 
if(strlen($MpU)<6){
    echo ('Mots de passe trop petit veuillez saisir plus de 6 caractére vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=inscription.php" />');
    exit();
}
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
?>

<?php
//vérification si le profile existe déja 
$reponse = $bdd->query('SELECT nom , mail , numtele FROM profil');
while ($donnees = $reponse->fetch()) {
    if($donnees['nom'] == $NomU){
        echo ('Nom déja utilisé vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=inscription.php" />');
        exit();
    }
    elseif($donnees['mail'] == $emailU){
        echo ('Mail déja utilisé vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=inscription.php" />');
        exit();
    }
    elseif($donnees['numtele'] == $teleU){
        echo ('Numéro déja utilisé vous allez étre redérigé vers la page d\'inscription ! <meta http-equiv="refresh" content="5; url=inscription.php" />');
        exit();
    }

}
$reponse->closeCursor();// Termine le traitement de la requête
?>
<?php
//si tout vas bien on ajoute le profile et en redérige le client vers la page de connexion
$req = $bdd->prepare('INSERT INTO profil(nom, mp, mail, adrrph, numtele) VALUES(:nome, :mps, :email, :adrr, :num)');
$req->execute(array(
    'nome' => $NomU,
    'mps' => $MpU,
    'email' => $emailU,
    'adrr' => $adrrU,
    'num' => $teleU,
));
echo ('inscription effectué vous allez étre redérigé vers la page de connexion ! <meta http-equiv="refresh" content="5; url=index.php" />');
?>

<?php
$req->closeCursor(); // Termine le traitement de la requête
?>