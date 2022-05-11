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
                    <h2>Pas Loin d'Alger</h2>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="pldAlger.php"><i class="fa fa-clone"></i>Pas loin d'Alger</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid non-bg">

        <div class="container top-30">
            <p class="para-float">Vous n’avez pas peur de prendre la route … amoureux de l’archéologie, de la nature, de l’histoire, amateur de randonnées.  À 50km d’Alger venez découvrir d’autres merveilles cachées de l’Algérie !</p>
        </div>

        <section class="container top-30">
             <div class="row">
                <div class="col-lg-6">
                    <div class="colonne1">
                        <a href="ruines.php"><img src="image/ruine.jpg" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Les ruines romaines de Tipaza</h2>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="colonne1">
                        <a href="mausolée.php"><img src="image/mauso.jpeg" class="image-centre-2" alt=""></a>
                        <h2 class="titre"> Le Mausolée Royal  </h2>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="colonne1">
                        <a href="monastere.php"><img src="image/monastere.jpg" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Le monastére de Tibhirine </h2>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="colonne1">
                       <a href="parc.php"> <img src="image/chrea.jpg" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Parc de Chréa</h2>

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