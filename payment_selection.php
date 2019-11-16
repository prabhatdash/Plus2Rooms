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
    <link rel="stylesheet" href="assets/plus2rooms_assets/css/radio.css" >
    <link rel="stylesheet" href="assets/plus2rooms_assets/css/page_css/payment_selection.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="assets/plus2rooms_assets/css/checkbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--------------->
    <script>
        $(document).ready(function(){
            $('#check-one').click(function() {
                $('.menu').toggle("slide");
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#promo').click(function() {
                $('.promomenu').toggle("slide");
            });
        });
    </script>

    <style>

        input[type="radio"] {
            -ms-transform: scale(1.5); /* IE 9 */
            -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
            transform: scale(1.5);
        }

    </style>

</head>
<body>
<!--================Header Area =================-->
<?php
session_start();
include_once "navbar.php";
include_once "miscellaneous_functions.php";
include_once "config.php";
?>

<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Bookings</h2>
            <ol class="breadcrumb">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../hotels/disp_hotels.php">Hotels</a></li>
                <li class="active">Rooms</li>
            </ol>
        </div>
    </div>
</section>

<section>

    <center>
        <br>

        <div id="main_card" class="card">
            <br>
            <i style="font-size: 100px;color: #ffb228" class="fa fa-check-circle" aria-hidden="true"></i>
            <div class="card-body">
                <p style="color:#ff007a;font-size: 30px;font-weight: bold" class="card-text">BOOKING SUCCESSFUL</p>
                <p style="color: #000a38;font-size: 15px;font-weight: bold">BOOKING ID: 100073</p>
                <hr>
                <b style="font-weight: bold">Check In: </b><a style="font-weight: bold">26-02-19</a> |  <b style="font-weight: bold">Check Out: </b><a style="font-weight: bold">26-02-19</a>
                <br><br>
                <p style="color: #8f8f8f;font-size: 20px;font-weight:bold" >Kiranshree Portico</p>
                <a style="color: #4c4c4c;font-size: 15px;font-weight:300">Guwahati, Assam</a>
                <hr>

                <a style="font-weight: bold">Guest: </a> <a style="font-weight: bold">Prabhat Das</a>
                <br>
                <a style="font-weight: bold">Pending Amount: </a> <b style="font-weight: bold;font-size: 20px">&#8377;2000</b>

                <br>

                <div  class="radio-item">
                    <input  type="radio" id="ritema" name="ritem" value="ropt1">
                    <label style="font-size: 20px;color: #4d4d4d;font-weight: bold" for="ritema">PAY AT HOTEL</label>
                </div>

                <div class="radio-item">
                    <input type="radio" id="ritemb" name="ritem" value="ropt2">
                    <label style="font-size: 20px;color: #4d4d4d;font-weight: bold" for="ritemb">PAY ONLINE</label>
                </div>
                <br><br>

                <button style="width: 200px" class="btn btn-primary">DONE</button>

            </div>
        </div>

        <br>
    </center>
</section>
<!--================Breadcrumb Area =================-->

<!--================ Accomodation Area  =================-->





<!--================ Accomodation Area  =================-->
<!--================HOTEL ADDRESS =================-->


<!--Mobile view modal-->




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