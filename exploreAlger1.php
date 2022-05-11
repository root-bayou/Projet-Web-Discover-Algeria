<?php session_start(); ?>
<!DOCTYPE html>
<html>
<!-- head -->
<?php require("include/head.php"); ?>
<body class="boxed-bg">
	<!-- Header + Nav -->
    <?php if ($_SESSION['active']) {
        require("include/header-1-ok.php");
    } else {
        require("include/header1.php");
    }
    ?>

    <section style="background-image: url('image/header.jpg')" class="breadcrumbs overlay top-30" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Explorer Alger</h2>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="exploreAlger1.php"><i class="fa fa-clone"></i>Explorer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid non-bg">

        <div class="container top-30">
            <p class="para-float">Au fond de sa baie, Alger est un port dont l'influence se vérifie depuis l'antiquité, époque où des marins venus de Phénicie y établirent un comptoir commercial.
			De l'Antiquité à nos jours, ce n'est pas peu dire que l'histoire d'Alger fut riche et mouvementée.</p>
        </div>

        <section class="container top-30">
            <div class="row">
                <div class="col-lg-4">
                    <div class="colonne1">
                      <a href= "histoireVille.php" >  <img src="image/img4.jpg" class="image-centre-2" alt=""> </a>
                        <h2 class="titre">Histoire de la ville </h2>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                       <a href= "architecture.php" > <img src="image/makam.jpg" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Patrimoine Architecturale</h2>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                       <a href= "monuments.php" > <img src="image/mus.jpg" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Monuments Historique</h2>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                        <a href= "jardin.php" ><img src="image/jardin.jpg" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Jardins</h2>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                      <a href= "musées.php" >  <img src="image/mama.jpg" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Musées</h2>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                        <a href= "quartier.php" ><img src="image/quart.jpg" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Quartiers</h2>

                    </div>
                </div>
            </div>
        </section>


    </div>
<!-- Footer -->
<?php require("include/footer.php"); ?>
    <!--/ End footer -->

    <script src="java.js"></script>
</body>

</html>