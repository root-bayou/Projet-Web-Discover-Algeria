<div id="id01" class="modal">
                        <form class="modal-content animate" action="connection.php" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <img src="image/logt.png" alt="logo">
                            </div>

                            <div class="container">
                                <label for="name"><b>Nom Utilisateur</b></label>
                                <input type="text" placeholder="Nom d'utilisateur" name="name" required>

                                <label for="psw"><b>Mot De Passe</b></label>
                                <input type="password" placeholder="Mot de passe" name="psw" required>

                                <button class="btn btn-primary" type="submit">Connexion</button>
                            </div>

                            <div class="container">
                                <button type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
                                <span class="psw">Mot de passe <a href="recmp.php">oublié?</a></span>
                            </div>
                        </form>
                    </div>