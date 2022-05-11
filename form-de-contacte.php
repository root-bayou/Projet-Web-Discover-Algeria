<?php
// vérification de la saisie 
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["object"]) && isset($_POST["message"])) {
    $NomU = htmlspecialchars($_POST["name"]);
    $emailU = htmlspecialchars($_POST["email"]);
    $objectU = htmlspecialchars($_POST["object"]);
    $messageU = htmlspecialchars($_POST["message"]);
}
else{
    echo ('Mail non Valide vous allez étre redérigé vers la page de contact! <meta http-equiv="refresh" content="5; url=contact.php" />');
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
//si tout vas bien on enregistre le message et en redérige le client vers la page de connexion
$req = $bdd->prepare('INSERT INTO forme(nom, mail, objet, messag) VALUES(:nome, :mail, :obj, :msg)');
$req->execute(array(
    'nome' => $NomU,
    'mail' => $emailU,
    'obj' => $objectU,
    'msg' => $messageU,
    
));
echo ('Message reçus 5/5 vous allez étre redérigé vers la page d\'accueille ! <meta http-equiv="refresh" content="3; url=index.php" />');
?>