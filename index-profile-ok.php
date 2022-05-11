<?php session_start();
?>

<?php 
if ("GET" === $_SERVER["REQUEST_METHOD"] && $_SESSION['sec'] == false) {
    // Renvoie l'utilisateur à la racine du serveur
    header("Location: index.php");
    // Met fin au script par mesure de sécurité
    die();
}
include("include/head.php");
include("include/header-ok.php"); 
include("include/section.php") ;
include("include/footer.php");
?> 