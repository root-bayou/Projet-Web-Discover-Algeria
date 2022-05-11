<body class="boxed-bg">
 <header class="containe header">
        <div class="container-fluid bg-principale1">
            <nav class="navbar navbar-expand-md navbar">
                <!-- Brand -->
                <a class="navbar-brand" href="index-profile-ok.php">
                    <img src="image/logt.png" alt="LOGO"></a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"><i class="fa fa-home"></i></span>
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
                    <button type="button" onclick="window.location.href = 'profile.php' " class="btn btn-primary" id="btn2"><?php echo" ".$_SESSION["lenom"]." "?></button>
                    <button type="button" onclick="window.location.href ='dec.php'" class="btn btn-primary" id="btn2">Déconnection</button>
                </div>
            </nav>
        </div>
        </div>
    </header>