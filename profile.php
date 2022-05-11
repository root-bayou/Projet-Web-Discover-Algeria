<?php
session_start(); 
require("include/head.php"); 
if ("GET" === $_SERVER["REQUEST_METHOD"] && $_SESSION['sec'] == false) {
    // Renvoie l'utilisateur à la racine du serveur
    header("Location: index.php");
    // Met fin au script par mesure de sécurité
    die();

    

}
try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
$req = $bdd->prepare('SELECT mp , mail , numtele , adrrph FROM profil WHERE nom = ?');
$req->execute(array($_SESSION['lenom']));
while ($donnees = $req->fetch()) {
    $_SESSION['num'] = $donnees['numtele'];
    $_SESSION['mp'] = $donnees['mp'];
    $_SESSION['email'] = $donnees['mail']; 
    $_SESSION['adrr'] = $donnees['adrrph']; 



}
$req->closeCursor(); // Termine le traitement de la requête
?>

<body class="boxed-bg">
    <div id="id01" class="modal-b">
        <form class="modal-content animate" action="" method="post">
            <div class="imgcontainer">
                <img src="image/logt.png" alt="logo">
            </div>

            <div class="container">
                <label for="name"><b>Nom Utilisateur</b></label>
                <?php echo '<input type="text" placeholder="'. $_SESSION['lenom'].'" name="name" disabled>' ?>
                
                <label for="num"><b>Email</b></label>
                <?php echo '<input type="text" placeholder="'. $_SESSION['email'].'" name="name" disabled>' ?>

                <label for="num"><b>Numéro de téléphone</b></label>
                <?php echo '<input type="text" placeholder="'. $_SESSION['num'].'" name="name" disabled>' ?>

                <label for="num"><b>Adresse</b></label>
                <?php echo '<input type="text" placeholder="'. $_SESSION['adrr'].'" name="name" disabled>' ?>

                <label for="psw"><b>mot de passe</b></label>
                <?php echo '<input type="text" placeholder="'. $_SESSION['mp'].'" name="name" disabled>' ?>

            </div>

            <div class="container">
                <button type="button" class="btn btn-primary" onclick="window.location.href ='index-profile-ok.php'" class="cancelbtn">Annuler</button>
            </div>
        </form>
    </div>
</body>