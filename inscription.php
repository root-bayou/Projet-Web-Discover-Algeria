<?php 
session_start();
?> 
<!DOCTYPE html>
<html>

<!-- head -->
<?php require("include/head.php"); ?>

   <body class="boxed-bg">
<!-- header page d'acceuil-->
    <header class="header-no">
        <div class="container-fluid bg-principale1">
            <nav class="navbar navbar-expand-md navbar">
                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="image/logt.png" alt="LOGO"></a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"> <i class="fa fa-bars"> </i></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="exploreAlger1.php">Explorer |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Afaire.php">A faire |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pldAlger.php">Pas loin d'Alger |</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact |</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </header>

    <section style="background-image: url('image/header.jpg')" class="breadcrumbs overlay top-30" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>inscription</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <form action="inscription-v.php" style="background-color: white;" method="POST">
            <div class="container">
                <h1 class="centre">Inscription</h1>
                
                <hr>

                <label for="email"><b>email</b></label>
                <input type="text" placeholder="Votre Mail" name="email" id="email" required>
                

                <label for="nomprofile"><b>pseudo</b></label>
                <input type="text" placeholder="Votre pseudo" name="nomprofile" id="email" required>

                <label for="mppofile"><b>Mot de passe</b></label>
                <input type="password" placeholder="Mot De Passe" name="mpprofile" id="psw" required>
                
                <label for="mpr"><b>Confirmation mot de passe</b></label>
                <input type="password" placeholder="Confirmez Le Mot De Passe" name="mpr" id="psw-repeat" required>
                
                <label for="adrrprofile"><b>Adressse</b></label>
                <input type="text" placeholder="Adresse" name="adrrprofile" id="email" required>
                
                <label for="teleprofile"><b>Numéro de Téléphone</b></label>
                <input type="text" placeholder="Adresse" name="teleprofile" id="email" required>


                <hr>
                <p>J'ai et j'accepte la<a href="#"></a>Politique de confidentialité</p>

                <button type="submit" class="registerbtn">S'inscrir</button>
            </div>

            <div class="container signin">
                <p>Vous avez un compte <a href="index.php">connectez-vous</a>.</p>
            </div>
        </form>
    </div>
<!-- Footer -->
<?php require("include/footer.php"); ?>
</body>
</html>