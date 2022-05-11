   <header class="header-no">
         <div class="container-fluid bg-principale1">
            <nav class="navbar navbar-expand-md navbar">
                <!-- Brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="image/logt.png" alt="LOGO"></a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"> <i class="fa fa-bars"> </i></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
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
                    </ul>
                    <button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" id="btn1">Connexion</button>
                    <a href="inscription.php"><button type="button" class="btn btn-primary" id="btn2">Inscription</button></a>
                <!-- Affichage formulaire de connexion-->
               <?php require("include/connexion.php"); ?>
               <!-- Connexion-->

                </div>
            </nav>
        </div>
        </div>
    </header>