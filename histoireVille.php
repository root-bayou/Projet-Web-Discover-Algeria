<?php session_start(); ?>
<!DOCTYPE html>
<html>

<!-- head -->
<?php require("include/head.php"); ?>

<body class="boxed-bg">
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
                    <h2>Histoire de La ville </h2>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="exploreAlger1.php"><i class="fa fa-clone"></i>Explorer</a></li>
                        <li><a href="histoireVille.php"><i class="fa fa-clone"></i>Histoire-de-la-ville-d'Alger</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid non-bg">
        <section class="container top-30">
            <div class="row">
                <div class="col-lg-6">
                    <H1>Histoire de la ville d'Alger</H1>
                    <p class="para-1">La création de la ville d’Alger, qui remonte à l’époque punique, son développement urbain ultérieur comme petite bourgade romaine, son essor comme capitale de la Régence d’Alger sous le pouvoir ottoman à partir de 1516, son érection comme capitale de la nouvelle colonie française après la conquête de 1830, s’expliquent par la qualité de son site portuaire qui, adossé au massif de Bouzaréah culminant à 500 m d’altitude, abrite la baie des vents dominants d’ouest. Ce site géographique exceptionnel a constitué cependant, depuis les l’époque moderne jusqu’à nos jours, une des contraintes principales à l’expansion et la création de cette ville appelée <b> <i> Alger la Blanche </i></b>.</p>
                </div>
                <div class="col-lg-6">
                    <img src="image/notre.jpg" alt="" class="image-display">
                </div>

            </div>

        </section>
    </div>

<?php require("include/footer.php"); ?>
    <!--/ End footer -->
    <script src="java.js"></script>

</body>

</html>