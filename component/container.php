<?php  include "includes/config.php"; ?>
<!DOCTYPE html>
<html lang="en">


<head>
        <!--=====Meta tags=======-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?= $Company['name'] ?>" />

    <meta name="description" content="<?= $Company['name'] ?> is a Professional Software Development Company, We develop all sorts of Computer applications, Mobile apps, websites and offer several I.T Services, SEO, Software Developers Outsourcing, Training and Consultancy. We give you an edge over your competitors.">

    <meta name="keywords" content="Web App Development, Mobile App Development, Software Development, Website Design Packages, Website Designing Services, Custom Website Development, websites designing company, Website optimization company, SEO Services, ecommerce website design, Mobile Apps, Software Programing,ecommerce website design, ecommerce website development">

    <meta name="author" content="<?= $Company['name'] ?>">
    <meta name="website" content="https://www.innovatrix.ng/" />
    <meta name="email" content="contact@innovatrix.ng" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--=====end of Meta=======-->

   
      


    <!--=====Title=======-->
    <title><?= $pgTitle." - ".$Company['name'] ?></title>

    <!--=====Fav icon=======-->
    <!-- <link rel="shortcut icon" href="assets/img/icons/fab2.png" type="image/x-icon"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo/favicon_io/favicon-32x32.png">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo/favicon_io/favicon-16x16.png"> -->
    <!-- <link rel="manifest" href="/site.webmanifest"> -->

    <!--=====CSS=======-->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/fonts.css">
    <link rel="stylesheet" href="assets/css/master.css">

    <!--===== jQuery=======-->
    <script src="assets/js/plugins/jquery-3-6-0.min.js"></script>
</head>

<body>

    <!--=====Preloader start=======-->
    <!-- <div class="preloader">
        <div class="loader"></div>
    </div> -->
    <!--=====Preloader end=======-->




    <?php
    include "header.php";
    include $pgFile;
    include "footer.php";
    ?>




    <!--=====Up arrow start=======-->

    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/fontawesome.js"></script>
    <script src="assets/js/plugins/slick-slider.js"></script>
    <script src="assets/js/plugins/mesonry.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <script src="assets/js/plugins/jquery.countup.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>