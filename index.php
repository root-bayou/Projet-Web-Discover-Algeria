<?php session_start(); 
$_SESSION['active'] = false;
?>
<!DOCTYPE html> 
<html>
 <!-- head -->
<?php require("include/head.php"); ?>

<body class="boxed-bg">
<!-- header page d'acceuil-->
    <header class="containe header">
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


    <section class="">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active " data-interval="2000">
                    <img class="d-block w-100" src="image/image7.jpg" alt="First slide">

                </div>
                <div class="carousel-item" data-interval="2000">
                    <img class="d-block w-100" src="image/image9.jpg" alt="Second slide">

                </div>
                <div class="carousel-item" data-interval="2000">
                    <img class="d-block w-100" src="image/image3.jpg" alt="Third slide">

                </div>
                <div class="carousel-item" data-interval="2000">
                    <img class="d-block w-100" src="image/image4.jpg" alt="Third slide">

                </div>
                <div class="carousel-item" data-interval="2000">
                    <img class="d-block w-100" src="image/image5.jpg" alt="Third slide">

                </div>
                <div class="carousel-item" data-interval="2000">
                    <img class="d-block w-100" src="image/image6.jpg" alt="Third slide">

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class="container-fluid non-bg">

        <section class="container top-30 ">
            <div class="row">
                <div class="col-lg-4 bg-w">
                    <div class="colonne2">
                        <div class="container-fluid">
                            <h1 class="titre-rep"> Histoire <br> Et <br>  Patrimoine</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 bg-w">
                    <div class="colonne2 boxed">
                        <img src="image/casbah.png" class="image-centre boxed" alt="Ruelle Casbah">
                    </div>
                </div>
                <div class="col-lg-4 colonne2">
                    <div class="colonne2">
                        <div class="container-fuid top-30">
                            <img src="image/monument.png" class="image-20-left" alt="">
                            <a href="histoireVille.php"><h2>Monuments Historique</h2></a>
                            <p class="para-float"> Au c??ur de la M??diterran??e, surplombant des ??lots et s?????tendant sur quarante-cinq hectares, la Casbah d???Alger abrite depuis des si??cles une m??dina historique. Inscrite au patrimoine mondial de l???UNESCO.Le lieu est habit?? depuis au moins le quatri??me si??cle avant J.C par les ph??niciens.</p>
                        </div>
                        <div class="container-fuid top-30">
                            <img src="image/muse.png" class="image-20-right" alt="">
                            <a href="mus??es.php"><h2>Mus??es</h2></a>
                            <p class="para-float"> Alger, bien que peu touristique  a pourtant tout pour s??duire, charmer et attirer les visiteurs. La ville abrite en effet de nombreux monuments et mus??es qui valent vraiment le d??tour</p>
                        </div>
                        <div class="container-fuid top-30">
                            <img src="image/pys.png" class="image-20-left" alt="">
                            <a href="jardin.php"><h2>Paysage et Jardins</h2></a>
                            <p class="para-float"> Alger regorge  de spots ou on peut surplomber la ville.La route qui m??ne vers les hauteurs d'Alger est une aventure ?? part enti??re, avec des vues magnifiques, des routes qui traversent une partie des montagnes et quartiers, une nature impressionnante qui ne vous laissera pas indiff??rent.</p>
                        </div>
                    </div>
                </div>

        </section>

        <div class="container top-30">
            <h1 class="titre-section"> Alger En Chiffre</h1>
        </div>

        <section class="container top-30  ">
            <div class="row">
                <div class="col-lg-4">
                    <div class="colonne1">
                        <img src="image/monument.png" class="image-centre-1" alt="">
                        <h2 class="titre">20 Monuments</h2>
                        <p class="para-float">D??couvrez plusieurs ??difices qui retracent l'histoire d'Alger.Alger est pleine de vie, alors prenez le temps en vous promenant dans ses rues pour appr??cier les petits d??tails.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                        <img src="image/muse.png" class="image-centre-1" alt="">
                        <h2 class="titre">15 Mus??es</h2>
                        <p class="para-float">A la d??couverte des meilleurs mus??es Alg??rois, sur diverses th??matiques, les diff??rentes oeuvres allant des fresques et sculptures de l'??poque romaine au collections d'art contemporain. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                        <img src="image/pys.png" class="image-centre-1" alt="">
                        <h2 class="titre">2 Sites <br> arch??ologiques</h2>
                        <p class="para-float">?? Heureux celui des vivants qui a vu ces choses ?? ainsi ??tait glorifi??e la beaut?? de Tipasa et son site arch??ologique, par l?????crivain Albert Camus, dans son ??uvre  ?? Noces ?? Tipasa ??.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container top-30">
            <div class="container top-30">
                <h1 class="titre-section">Les Merveilles d'Alger</h1>
            </div>
            <p class="paragraghe-pricipale"> La capitale de l'Alg??rie est Alger, une ville c??ti??re qui a tant ?? offrir ! De l'architecture aux mus??es, en passant par la cuisine de rue, l'histoire et la nature !</p>
            </p>
        </div>
        <section class="container top-30">
            <div class="row">
                <div class="col-lg-4">
                    <div class="colonne1">
                        <a href="mus??es.php"><img src="image/mus1.png" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Sept mus??es d'Alger <br> a Visit??</h2>
                        <p class="para-float">Les mus??es d???Alger rec??lent des tr??sors insoup??onnables. Avec leur architecture et les objets s??culaires qu???ils renferment, ces mus??es offrent de merveilleux voyages pour remonter le temps. Du Mus??e National des Antiquit??s au Mus??e du Bardo, en passant par le Mus??e des Beaux-Arts.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                        <a href="pldAlger.php"><img src="image/tipaza.png" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Sur les traces de la ville romaine</h2>
                        <p class="para-float">Tipasa,la ville romaine, un hymne ?? la m??diterran??e, ?? l???histoire de l???homme qui s???inscrit dans la pierre et s???immortalise, berc??e par le chant de la mer. C???est ce bleu azur de la mer, gardienne de l???humanit??, dont l???histoire s???efface avec le temps. C???est ce  vert des pins qui s???allie avec l???ocre de la terre, cernant les vestiges t??moins de grandeurs pass??es..</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="colonne1">
                        <a href="afaire.php"><img src="image/alger3.png" class="image-centre-2" alt=""></a>
                        <h2 class="titre">Le Best of <br> d'Alger</h2>
                        <p class="para-float">Alger est un tissage de milliers d???ann??es de civilisation, son paysage est une composition de monuments, d???architecture et des sites naturels . quels sont les atouts imbattables qui font d???Alger une destination ?? visiter ?? tout prix au moins une fois dans votre vie !</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container top-30">
            <div class="container top-30">
                <h1 class="titre-section">Actualit??s</h1>
            </div>
        </div>

        <section class="container top-30">
            <div class="row">
                <div class="col-lg-4">
                    <div class="colonne3">
                        <img src="image/actu2.png" alt="Jane" style="width:100%">
                        <div class="container">
                            <h2 class="titre-centre">ALGER 2020</h2>
                            <p class="titre1">Auteur &amp; Date</p>
                            <p>TOURISME / ?? VOIR / FAIRE,Y ALLER, PRATIQUE, O?? DORMIR?</p>
                            
                            <a><button class="button1">Lire la suite </button></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="colonne3">
                        <img src="image/actu.png" alt="Jane" style="width:100%">
                        <div class="container">
                            <h2 class="titre-centre">Voyage</h2>
                            <p class="titre1">Auteur &amp; Date</p>
                            <p>Un autre pays Europ??en rouvre ses fronti??res avec l???Alg??rie.</p>
                           
                            <a><button class="button1">Lire la suite </button></a>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="colonne3">
                        <img src="image/tipasa2.png" alt="Jane" style="width:100%">
                        <div class="container">
                            <h2 class="titre-centre">Sorties</h2>
                            <p class="titre1">Auteur &amp; Date</p>
                            <p>BALADE LITT??RAIRE SUR LES TRACES DE CAMUS ?? LE 14 Ao??t ?? TIPAZA</p>
                            <a><button class="button1">Lire la suite </button></a>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        </div>
        <!-- FOOTER --> 
        <?php require("include/footer.php"); ?>


        <script src="java.js"></script>
</body>

</html>