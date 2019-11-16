<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: prabhatdas-->
<!-- * Date: 2019-02-25-->
<!-- * Time: 14:07-->
<!-- */-->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/image/favicon.png" type="image/png">
    <title>Plus 2 Rooms</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/royal_assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/royal_assets/vendors/linericon/style.css">
    <link rel="stylesheet" href="assets/royal_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/royal_assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/royal_assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/royal_assets/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="assets/royal_assets/vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="assets/royal_assets/css/style.css">
    <link rel="stylesheet" href="assets/royal_assets/css/responsive.css">
    <!--CUSTOM CSS--->
    <link rel="stylesheet" href="assets/plus2rooms_assets/css/animation/animate.css">
    <link rel="stylesheet" href="assets/plus2rooms_assets/css/page_css/contactUs.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="assets/plus2rooms_assets/css/checkbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--------------->
</head>
<body>
<!--================Header Area =================-->
<?php
include_once "navbar.php";
include_once "miscellaneous_functions.php";
include_once "config.php";
include_once "UrlHandler.php";

$pagename="contactUs.php";
$_SESSION['redirect_url'] = $basePath.$pagename;

?>

<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Contact Us</h2>
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../hotels/disp_hotels.php">Hotels</a></li>
                <li class="active">Rooms</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ Accomodation Area  =================-->
<div id="list">

    <center>
        <br>

        <div id="main_card" class="card">
            <br>
            <form method="post" action="contactUs_post.php">

               <input type="text" required class="form-control" style="width: 98%" placeholder="Your Name">
                <br>
                <input type="email" required class="form-control" style="width: 98%" placeholder="Your Email">
                <br>
                <input type="number" required class="form-control" style="width: 98%" placeholder="Your Phone">
                <br>
                <textarea class="form-control" style="width: 98%;height: 150px" placeholder="Your Query"></textarea>
                <br>

                <button class="btn btn-primary" type="submit">SEND QUERY</button>

                <br><br><br>

            </form>

        </div>

        <br>
    </center>


</div>






<!--================ Accomodation Area  =================-->
<!--================Booking Tabel Area =================-->

<!--================Booking Tabel Area  =================-->
<!--================ Accomodation Area  =================-->

<!--================ Accomodation Area  =================-->
<!--================ start footer Area  =================-->
<?php
include_once "footer.php"
?>
<!--================ End footer Area  =================-->

<script src="assets/plus2rooms_assets/js/room_add_remove_css_class.js"></script>
<script src="assets/plus2rooms_assets/js/dategenerator.js"></script>
<!-- Optional JavaScript -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/royal_assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/royal_assets/js/popper.js"></script>
<script src="assets/royal_assets/js/bootstrap.min.js"></script>
<script src="assets/royal_assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/royal_assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/royal_assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="assets/royal_assets/vendors/nice-select/js/jquery.nice-select.js"></script>
<script src="assets/royal_assets/js/mail-script.js"></script>
<script src="assets/royal_assets/js/stellar.js"></script>
<script src="assets/royal_assets/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="assets/royal_assets/js/custom.js"></script>
</body>
</html>