<?php 
session_start();
?> 
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
                    <h2>Jardins</h2>
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="exploreAlger1.php"><i class="fa fa-clone"></i>Explorer</a></li>
                        <li><a href="jardin.php"><i class="fa fa-clone"></i>Jardins</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid non-bg">
        <section class="container top-30">
            <div class="row">
                <div class="col-lg-6">
                    <H1>Page en contruction</H1>
                    
                </div>
                <div class="col-lg-6">
                    <img src="" alt="" class="image-display">
                </div>

            </div>

        </section>
    </div>

<?php require("include/footer.php"); ?>
    <!--/ End footer -->
    <script src="java.js"></script>

</body>

</html>