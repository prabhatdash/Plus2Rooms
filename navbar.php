<!--Created by PhpStorm.-->
<!--* User: prabhatdas-->
<!--* Date: 2019-02-25-->
<!--* Time: 01:01-->

<?php
session_start();
include_once "config.php";
?>

<head>
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="<?php echo $basePath.'assets/plus2rooms_assets/css/page_css/navbar.css'  ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $basePath.'assets/plus2rooms_assets/css/float_over_input.css'?>">
    <link rel="stylesheet" href="<?php echo $basePath.'assets/plus2rooms_assets/css/animation/hover.css'?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo $basePath.'assets/plus2rooms_assets/js/room_add_remove_css_class.js'?>"></script>
</head>

<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img  src="<?php echo $basePath.'assets/plus2rooms_assets/images/nav_logo.png'?>"><b style="font-weight: bold;color: #333333;font-size: 25px"></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href=<?php echo $basePath  ?> >Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about.html">About us</a></li>
                    <!--                    <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li>-->
                    <!--                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>-->
<!--                    <li class="nav-item submenu dropdown">-->
<!--                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Log In</a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>-->
<!--                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <!--                    <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li>-->
                    <?php
                    if(isset($_SESSION['user_data'])){
                        $logout_url=$basePath."user/logout_user.php";
                        $mybooking_url=$basePath."user/my_booking.php";
                        $myprofile_url=$basePath."user/my_profile.php";

                        echo"
                         <li class=\"nav-item submenu dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">  ".$_SESSION['user_data']['name']." <i style='font-size: 20px' class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"nav-item\"><a class=\"nav-link\" href=$myprofile_url>My Profile</a></li>
                            <li class=\"nav-item\"><a class=\"nav-link\" href=$mybooking_url>My Bookings</a></li>
                             <li class=\"nav-item\"><a class=\"nav-link\" href=''>My Wishlist</a></li>
                             <li class=\"nav-item\"><a class=\"nav-link\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\".bd-wallet_transaction_detail-modal-lg\" data-backdrop=\"static\" data-keyboard=\"false\" >My Wallet</a></li>
                              <li class=\"nav-item\"><a class=\"nav-link\" href=$logout_url>Log Out</a></li>
                        </ul>
                    </li>
                        
                        ";
                    }
                    else{
                        echo"
                         <li class=\"nav-item\"><a style=\"cursor: pointer\" data-toggle=\"modal\"  data-target=\".bd-login-modal-lg\" class=\"nav-link\">LogIn</a></li>
                        ";
                    }
                    ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $basePath.'contactUs.php' ?>">Contact</a></li>

                </ul>
            </div>
        </nav>
    </div>
</header>

<?php
if(isset($_SESSION['user_data'])){
    include_once "user/my_wallet.php";
}
?>



<!--Modal for login-->

<div class="modal fade bd-login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img style="height: 100% !important;" id="login_image"  src="<?php echo $basePath.'assets/plus2rooms_assets/images/login_card.jpg'?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <i id="close_icon" data-dismiss="modal"  class="fa fa-times" aria-hidden="true"></i>
                            <b id="title">LOGIN</b>
                            <br>
                            <form method="post" action="<?php echo $basePath.'user/validate_user.php'?>" autocomplete="off" >
                            <div class="inputs full">
                                <input name="username" required autocomplete="off" type="email" placeholder=" "/>
                                <label>Username</label>
                            </div>
                            <div class="inputs full">
                                <input name="password" required type="password" placeholder=" "/>
                                <label>Password</label>
                            </div>
                            <button name="login_btn" class="hvr-ripple-out" type="submit" id="login_btn">Login</button>
                             <a id="or">OR</a> <center id="mobile_or">OR</center>
                            <button class="hvr-ripple-out1" id="google_login_btn">Google Login <i class="fa fa-google" aria-hidden="true"></i></button>
                            </form>
                            <hr>
                            <b id="forgot_pswd">Forgot password</b> <a id="bar">|</a> <br id="line_break"> <b data-dismiss="modal" data-toggle="modal" data-target=".bd-registration-modal-lg" data-backdrop="static" data-keyboard="false" id="creat_acnt">Create a new account</b>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal for registration-->


<div class="modal fade bd-registration-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">

                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img style="height: 100% !important;" id="login_image" src="<?php echo $basePath.'assets/plus2rooms_assets/images/login_card.jpg'?>"  class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <i id="close_icon" data-dismiss="modal"  class="fa fa-times" aria-hidden="true"></i>
                                <b id="title">SIGN UP</b>
                                <br>

                                <form onsubmit="return final_validate()" method="post" action="<?php echo $basePath.'user/verify_OTP.php' ?>" autocomplete="off" >
                                    <div id="flexi_div">
                                        <input name="fname" onkeyup="pre_validation1()" pattern=".*\S+.*" id="fname" required autocomplete="off" type="text" placeholder=" "/>
                                        <label id="fname_label">Full Name</label>
                                    </div>
                                    <div id="flexi_div">
                                        <input name="dob" required autocomplete="off" type="date" placeholder=" "/>
                                        <label id="dob">Date of Birth</label>
                                    </div>
                                    <a style="margin-left: 2%">Select Gender</a>
                                    <center>
                                        <div class="radio-item">
                                            <input required  type="radio" id="ritema" name="ritem" value="Male">
                                            &nbsp;&nbsp;
                                            <label style="font-size: 20px;color: #4d4d4d;font-weight: bold" for="ritema">Male</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input required type="radio" id="ritemb" name="ritem" value="Female">
                                            &nbsp;&nbsp;
                                            <label style="font-size: 20px;color: #4d4d4d;font-weight: bold" for="ritemb">Female</label>
                                        </div>
                                    </center>
                                    <div id="flexi_div">
                                        <input name="email" onkeyup="pre_validation3()" id="email" autocomplete="off" required type="email" placeholder=" "/>
                                        <label id="email_label">Email</label>
                                    </div>
                                    <div id="flexi_div">
                                        <input name="phone" onkeyup="pre_validation4()" id="phone" autocomplete="off" required pattern= "[0-9]{10}" type="text" minlength="10" maxlength="10"  placeholder=" "/>
                                        <label id="phone_label">Phone No</label>
                                    </div>
                                    <div id="flexi_div">
                                        <input name="pass" onkeyup="pre_validation5()" id="pass" type="password" required minlength="8" placeholder=" "/>
                                        <label id="pass_label">Password</label>
                                    </div>
                                    <div id="flexi_div">
                                        <input name="cpass" onkeyup="pre_validation6()" id="cpass" type="password" required placeholder=" "/>
                                        <label id="cpass_label">Confirm Password</label>
                                    </div>
                                    <button name="signup_btn"  type="submit" class="hvr-ripple-out" id="signup_btn">SIGN UP</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo $basePath.'assets/plus2rooms_assets/js/signup_validation.js'?>"></script>


