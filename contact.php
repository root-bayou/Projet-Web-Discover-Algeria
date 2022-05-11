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
                    <h2>Formulaire de contact</h2>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="contact.php"><i class="fa fa-clone"></i>Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container non-bg top-30">
        <form class="contact-form m-top-30" method="post" action="form-de-contacte.php">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <span><i class="fa fa-user-o"></i></span>
                        <input type="text" name="name" placeholder="Nom / Prénom" required="required">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group">
                        <span><i class="fa fa-envelope-o"></i></span>
                        <input type="email" name="email" placeholder="Votre Adresse Mail" required="required">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <span><i class="fa fa-clone"></i></span>
                        <input type="text" name="object" placeholder="Sujet" required="required">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group message">
                        <span><i class="fa fa-pencil"></i></span>
                        <textarea name="message" rows="6" placeholder="Votre  Message"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group button">
                        <button type="submit" class="btn theme-2 effect">Envoyer Message<i class="fa fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php require("include/footer.php"); ?>
    <!--/ End footer -->

    <script src="java.js"></script>
</body>

</html>