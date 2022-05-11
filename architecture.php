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
                    <h2> Patrimoine Architectural </h2>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="exploreAlger1.php"><i class="fa fa-clone"></i>Explorer</a></li>
                        <li><a href="architecture.php"><i class="fa fa-clone"></i>Patrimoine architectural </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid non-bg">
        <section class="container top-30">
            <div class="row">
                <div class="col-lg-6">
                    <H1>Patrimoine Architectural</H1>
                    <h2><b>La Casbah d’Alger : </b></h2>
                    <p class="para-1">Loin, très loin, au delà des monts Mots, à mille lieues des pays Voyellie et Consonnia, demeurent les Bolos Bolos. Ils vivent en retrait, à Bourg-en-Lettres, sur les côtes de la Sémantique, un vaste océan de langues. Un petit ruisseau, du nom de Larousse, coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiagmatique, dans lequel des pans entiers de phrases prémâchées vous volent litéralement tout cuit dans la bouche. Pas même la toute puissante Ponctuation ne régit les Bolos Bolos - une vie on ne peut moins orthodoxographique. Un jour pourtant, une petite ligne de Bolo Bolo du nom de Lorem Ipsum décida de s'aventurer dans la vaste Grammaire. Le grand Oxymore voulut l'en dissuader, le prevenant que là-bas cela fourmillait de vils Virgulos, de sauvages Pointdexclamators et de sournois Semicolons qui l'attendraient pour sûr au prochain paragraphe, mais ces mots ne firent écho dans l'oreille du petit Bolo qui ne se laissa point déconcerter. Il pacqua ses 12 lettrines, glissa son initiale dans sa panse et se mit en route. Alors qu'il avait gravi les premiers flancs de la chaîne des monts Italiques, il jeta un dernier regard sur la skyline </p>
                    <h2><b> D’El-Djazaïr à Alger :  </b></h2>
                    <p class="para-1">Loin, très loin, au delà des monts Mots, à mille lieues des pays Voyellie et Consonnia, demeurent les Bolos Bolos. Ils vivent en retrait, à Bourg-en-Lettres, sur les côtes de la Sémantique, un vaste océan de langues. Un petit ruisseau, du nom de Larousse, coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiagmatique, dans lequel des pans entiers de phrases prémâchées vous volent litéralement tout cuit dans la bouche. Pas même la toute puissante Ponctuation ne régit les Bolos Bolos - une vie on ne peut moins orthodoxographique. </p>
                    <h2><b> Alger à la Belle Époque : le modèle haussmannien   </b></h2>
                    <p class="para-1">Loin, très loin, au delà des monts Mots, à mille lieues des pays Voyellie et Consonnia, demeurent les Bolos Bolos. Ils vivent en retrait, à Bourg-en-Lettres, sur les côtes de la Sémantique, un vaste océan de langues. Un petit ruisseau, du nom de Larousse, coule en leur lieu et les approvisionne en règlalades nécessaires en tout genre; un pays paradisiagmatique, dans lequel des pans entiers de phrases prémâchées vous volent litéralement tout cuit dans la bouche. Pas même la toute puissante Ponctuation ne régit les Bolos Bolos - une vie on ne peut moins orthodoxographique. </p>
                    

                </div>
                <div class="col-lg-6">
                    <img src="image/img.png" alt="" class="image-display">
                </div>

            </div>

        </section>
    </div>

<?php require("include/footer.php"); ?>
    <!--/ End footer -->
    <script src="java.js"></script>

</body>

</html>