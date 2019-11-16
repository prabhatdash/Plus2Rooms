<!--Created by PhpStorm.-->
<!--* User: prabhatdas-->
<!--* Date: 2019-02-25-->
<!--* Time: 01:01-->
<?php
if(isset($_POST['signup_btn'])) {

    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/image/favicon.png" type="image/png">
        <title>Plus 2 Rooms</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/royal_assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/royal_assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="../assets/royal_assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/royal_assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet"
              href="../assets/royal_assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../assets/royal_assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../assets/royal_assets/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../assets/royal_assets/css/style.css">
        <link rel="stylesheet" href="../assets/royal_assets/css/responsive.css">
        <!--CUSTOM CSS--->
        <link rel="stylesheet" href="../assets/plus2rooms_assets/css/animation/animate.css">
        <link rel="stylesheet" href="../assets/plus2rooms_assets/css/page_css/verify_OTP.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="../assets/plus2rooms_assets/css/float_over_input.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--------------->
    </head>
    <body>
    <!--================Header Area =================-->
    <?php
    session_start();
    include_once "../miscellaneous_functions.php";
    include_once "../config.php";
    include_once "../UrlHandler.php";

    $fname = $_POST['fname'];
    $dob = $_POST['dob'];
    $gender=$_POST['ritem'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    ?>

    <!--================Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0"
             data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Accomodation</h2>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a></li>
                    <li class="active">Hotels</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ Accomodation Area  =================-->
    <br><br><br>
    <section id="list">

        <p id="navigation"><a href="<?php echo $_SESSION['redirect_url'] ?>">Registration</a> <i
                    class="fa fa-chevron-right" aria-hidden="true"></i> <a style="cursor: not-allowed">OTP
                Verification</a></p>
        <div id="p1">


            <div id="otp_card" class="card mx-auto">

                <div class="card-body">

                    <p style="text-align: center !important;color: #ffb228;font-weight: bold">An OTP has been send to
                        your mobile no: <?php echo $phone ?></p>

                    <form onsubmit="return otpValidate()" method="post" action="register_user.php">
                        <input hidden name="fname" type="text" value="<?php echo $fname ?>">
                        <input hidden name="dob" type="text" value="<?php echo $dob ?>">
                        <input hidden name="email" type="email" value="<?php echo $email ?>">
                        <input hidden name="phone" type="text" value="<?php echo $phone ?>">
                        <input hidden name="pass" type="password" value="<?php echo $pass ?>">
                        <input hidden name="gender" type="text" value="<?php echo $gender ?>">

                        <div class="inputs full">
                            <input id="otpInput" required type="text" placeholder=" "/>
                            <label>Enter OTP</label>
                        </div>
                        <br>

                        <center>

                            <br><br><br>

                            <div id="button_div">

                                <button id="sendOtp" class="btn btn-dark" onclick="clock()">RESEND OTP</button>

                                <button class="btn btn-success" name="verifiedotp" type="submit">SUBMIT</button>


                    </form>


                    <div id="countdown"></div>

                </div>
                </center>
            </div>
        </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->
    <!--================Booking Tabel Area =================-->

    <!--================Booking Tabel Area  =================-->
    <!--================ Accomodation Area  =================-->

    <!--================ Accomodation Area  =================-->
    <!--================ start footer Area  =================-->

    <!--================ End footer Area  =================-->


    <script>
        var enableBtn = function () {
            $('.btn').attr("disabled", false);
        }
        $('.btn-dark').click(function () {
            var that = this;
            $('.btn-dark').attr("disabled", true);
            setTimeout(function () {
                enableBtn(that)
            }, 30000);
        });

        function clock() {
           window.generatedOTP = generateOTP();
            console.log(window.generatedOTP);
            var timeleft = 30;
            var downloadTimer = setInterval(function () {
                document.getElementById("countdown").innerHTML = "OTP can be resend after : " + timeleft + " seconds";
                timeleft -= 1;
                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    document.getElementById("countdown").innerHTML = ""
                }
            }, 1000);
        }
    </script>

    <script>
        function generateOTP() {
            var digits = '0123456789';
            let OTP = '';
            for (let i = 0; i < 6; i++) {
                OTP += digits[Math.floor(Math.random() * 10)];
            }
            return OTP;
        }

        function otpValidate() {
            if (window.generatedOTP != document.getElementById("otpInput").value) {
                alert("Invalid Otp !");
                return false;
            }
        }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/royal_assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/royal_assets/js/popper.js"></script>
    <script src="../assets/royal_assets/js/bootstrap.min.js"></script>
    <script src="../assets/royal_assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../assets/royal_assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/royal_assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/royal_assets/vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="../assets/royal_assets/js/mail-script.js"></script>
    <script src="../assets/royal_assets/js/stellar.js"></script>
    <script src="../assets/royal_assets/vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="../assets/royal_assets/js/custom.js"></script>


    <script>
        window.onload = function () {
            document.getElementById("sendOtp").click();
        }
    </script>

    </body>
    </html>
    <?php
}
else{
    echo"
    <script>
    window.location.href='../';
    </script>
    ";
}
    ?>