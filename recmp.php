
<?php require("include/head.php"); ?>

<body class="boxed-bg">
    <div id="id01" class="modal-b">
        <form class="modal-content animate" action="recmp-v.php" method="post">
            <div class="imgcontainer">
                <img src="image/logt.png" alt="logo">
            </div>

            <div class="container">
                <label for="name"><b>Nom Utilisateur</b></label>
                <input type="text" placeholder="Nom d'utilisateur" name="name" required>
                
                <label for="num"><b>Numéro de téléphone</b></label>
                <input type="text" placeholder="Numéro / important " name="num" required>

                <label for="psw"><b>Nouveaux mot de passe</b></label>
                <input type="password" placeholder="Mot de passe" name="psw" required>

                <button class="btn btn-primary" type="submit">Soumettre</button>
            </div>

            <div class="container">
                <button type="button" class="btn btn-primary" onclick="window.location.href ='index-profile-ok.php'" class="cancelbtn">Annuler</button>
            </div>
        </form>
    </div>
</body>