    <header class="containe header">
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
                        <a class="nav-link" href="exploreAlger1.php">Explorer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="afaire.php">A faire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pldAlger.php">Pas loin d'Alger</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                    </ul>
                    <button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" id="btn1">Connexion</button>
                    <button type="button" class="btn btn-primary" id="btn2">Inscription</button>

                    <div id="id01" class="modal">
                        <form class="modal-content animate" action="/action_page.php" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <img src="image/logt.png" alt="logo">
                            </div>

                            <div class="container">
                                <label for="uname"><b>Nom Utilisateur</b></label>
                                <input type="text" placeholder="Nom d'utilisateur" name="uname" required>

                                <label for="psw"><b>Mot De Passe</b></label>
                                <input type="password" placeholder="Mot de passe" name="psw" required>

                                <button class="btn btn-primary" type="submit">Connexion</button>
                                <label>
                              <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
                            </label>
                            </div>

                            <div class="container">
                                <button type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                                <span class="psw">Mot de passe <a href="#">oublié?</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        </div>
    </header>