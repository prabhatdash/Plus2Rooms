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
    <link rel="stylesheet" href="../assets/royal_assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/royal_assets/vendors/linericon/style.css">
    <link rel="stylesheet" href="../assets/royal_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/royal_assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/royal_assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="../assets/royal_assets/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../assets/royal_assets/vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../assets/royal_assets/css/style.css">
    <link rel="stylesheet" href="../assets/royal_assets/css/responsive.css">
    <!--CUSTOM CSS--->
    <link rel="stylesheet" href="../assets/plus2rooms_assets/css/animation/animate.css">
    <link rel="stylesheet" href="../assets/plus2rooms_assets/css/page_css/my_profile.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="../assets/plus2rooms_assets/css/checkbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--------------->

</head>
<body>
<!--================Header Area =================-->
<?php
include_once "../navbar.php";
include_once "../miscellaneous_functions.php";
include_once "../config.php";
include_once "../UrlHandler.php";

if(isset($_SESSION['user_data'])){


$pagename = "";
$_SESSION['redirect_url'] = $basePath . $pagename;

?>

<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Accomodation</h2>
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
<section id="list">

    <center>
        <br>

        <div id="main_card" class="card">
            <br>
            <form method="post" action="update_profile.php">

                <?php


                if (isset($_SESSION['user_data']['imageLink'])) {
                    $imageUrl = $_SESSION['user_data']['imageLink'];

                    $obj = new UrlHandler();
                    $statusCode = $obj->validateUrl($imageUrl);

                    if ($statusCode !== 404) {
                        echo "  
                
                         <img style=\"border-radius: 400px;height:200px\" src=$imageUrl >
                    
                        ";
                    } else {
                        if ($_SESSION['user_data']['gender'] == 'Male') {
                            echo "
                         <img style=\"border-radius: 400px;height: 200px\" src=\"../assets/plus2rooms_assets/images/default%20avatar/male_default.png\"> 
                        ";
                        } else {
                            echo "
                         <img style=\"border-radius: 400px;height: 200px\" src=\"../assets/plus2rooms_assets/images/default%20avatar/default-female.png\"> 
                        ";

                        }

                    }


                } else {
                    if ($_SESSION['user_data']['gender'] == 'Male') {
                        echo "
                         <img style=\"border-radius: 400px;height: 200px\" src=\"../assets/plus2rooms_assets/images/default%20avatar/male_default.png\"> 
                        ";
                    } else {
                        echo "
                         <img style=\"border-radius: 400px;height: 200px\" src=\"../assets/plus2rooms_assets/images/default%20avatar/default-female.png\"> 
                        ";
                    }
                }

                ?>


                <div class="card-body">
                    <p style="color:#ff007a;font-size: 25px;font-weight:400;"
                       class="card-text"><?php echo $_SESSION['user_data']['name'] ?></p>
                    <br>


                    <div id="flexi_div">
                        <input required type="text" name="fullName" placeholder=" "
                               value="<?php echo $_SESSION['user_data']['name'] ?>"/>
                        <label>Full Name</label>
                    </div>
                    <div id="flexi_div">
                        <input required type="date" name="dob" max="2001-12-31" placeholder=" "
                               value="<?php echo $_SESSION['user_data']['dateOfBirth'] ?>"/>
                        <label>Birthday</label>
                    </div>
                    <div id="flexi_div">
                        <input required readonly type="email" name="email" placeholder=" "
                               value="<?php echo $_SESSION['user_data']['email'] ?>"/>
                        <label>Email</label>
                    </div>
                    <div id="flexi_div">
                        <input required name="phone" type="number" placeholder=" "
                               value="<?php echo $_SESSION['user_data']['phone'] ?>"/>
                        <label>Phone No</label>
                    </div>
                    <div id="flexi_div">
                        <input readonly required name="age" type="number" placeholder=" "
                               value="<?php echo $_SESSION['user_data']['age'] ?>"/>
                        <label>Age</label>
                    </div>
                    <div id="flexi_div">
                        <input type="file" placeholder=" "/>
                        <label>Upload / Change Profile Picture</label>
                    </div>
                    <p id="gender_selection">Gender</p>
                    <div class="radio-item">
                        <?php
                        $mgender = "";
                        $fgender = "";

                        if ($_SESSION['user_data']['gender'] == 'Male') {
                            $mgender = 'checked';
                        } else {
                            $fgender = 'checked';
                        }

                        ?>
                        <input <?php echo $mgender; ?> type="radio" id="ritema" name="ritem" value="Male">
                        &nbsp;&nbsp;
                        <label style="font-size: 20px;color: #4d4d4d;font-weight: bold" for="ritema">Male</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input <?php echo $fgender; ?> type="radio" id="ritemb" name="ritem" value="Female">
                        &nbsp;&nbsp;
                        <label style="font-size: 20px;color: #4d4d4d;font-weight: bold" for="ritemb">Female</label>
                    </div>
                    <hr>
                    <div class="inputs full">
                        <input readonly style="font-size: 20px;font-weight: bold" required type="text" placeholder=" "
                               value="&#8377;<?php echo $_SESSION['user_data']['walletBalance'] ?>"/>
                        <label>Available Wallet Balance:</label>
                    </div>
                    <p id="wallet_transaction"><b style="cursor: pointer" data-dismiss="modal" data-toggle="modal"
                                                  data-target=".bd-wallet_transaction_detail-modal-lg"
                                                  data-backdrop="static" data-keyboard="false">Click Here</b> to view
                        wallet transaction details</p>


                    <button name="updateprofile" class="hvr-ripple-out" type="submit" id="btn">SUBMIT</button>


                </div>


            </form>

        </div>

        <br>
    </center>




</section>


<?php
include_once "my_wallet.php";
?>


<!--================ Accomodation Area  =================-->
<!--================Booking Tabel Area =================-->

<!--================Booking Tabel Area  =================-->
<!--================ Accomodation Area  =================-->

<!--================ Accomodation Area  =================-->
<!--================ start footer Area  =================-->
<?php
include_once "../footer.php"
?>
<!--================ End footer Area  =================-->

<script src="../assets/plus2rooms_assets/js/room_add_remove_css_class.js"></script>
<script src="../assets/plus2rooms_assets/js/dategenerator.js"></script>
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
</body>
</html>
<?
}
else{
    echo"
    <script>
     window.location.href='../';
    </script>
    ";
}
 ?>