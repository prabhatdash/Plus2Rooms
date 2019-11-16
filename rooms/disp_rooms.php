<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: prabhatdas-->
<!-- * Date: 2019-02-25-->
<!-- * Time: 02:27-->
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
    <link rel="stylesheet" href="../assets/plus2rooms_assets/css/page_css/disp_rooms.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--------------->
</head>
<body>
<!--================Header Area =================-->
<?php
include_once "../navbar.php";
include_once "../miscellaneous_functions.php";
include_once "../config.php";
include_once "../UrlHandler.php";

$pagename="rooms/disp_rooms.php";
$_SESSION['redirect_url'] = $basePath.$pagename;

if(strtotime($_SESSION['checkin_date']) < strtotime(date('Y-m-d'))){
    $_SESSION['checkin_date']=date('Y-m-d');
}

if((strtotime($_SESSION['checkout_date']) < strtotime($_SESSION['checkin_date'])) || (strtotime($_SESSION['checkout_date']) == strtotime($_SESSION['checkin_date']))){
    $_SESSION['checkout_date']=date('Y-m-d',strtotime('+1 day'));
}


if(isset($_POST['hotel_id']))
{
    $hotel_id=$_POST['hotel_id'];
    $hotel=$_SESSION['hotels'][$hotel_id];
    $_SESSION['hotel']=$hotel;
    $rooms=$hotel['rooms'];
    $_SESSION['rooms']=$rooms;
}
else{
    if(isset($_SESSION['rooms'])){
        $rooms=$_SESSION['rooms'];
    }
    else{
        echo"
        <script>
        window.location.href='../';
        </script>
        
        ";
    }

}
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
    <br>
<section id="hotel_list">
    <?php
    $room_id=0;
    foreach($rooms as $room):
    ?>

    <form method="post" action="room.php">

    <div id="card" class="card">
        <input name="room_id" hidden  type="text"  value="<?php echo $room_id; ?>">
            <table>
                <tr>
                    <td id="room_image_box" rowspan="2">
                        <img id="room_image" style="border-radius: 3px;" src=" <?php echo $room['images'][0]['baseUrl'].$room['images'][0]['fileName']; ?>">

                    </td>
                    <td>
                        <b id="room_name">
                            <?php echo $room['name']; ?>
                        <b/><br>
                            <small id="person_no"> No of Person <?php echo $room['noOfPersons']; ?></small>
                            <br>
                            <i id="amenities" class="fa fa-coffee" aria-hidden="true"></i><span id="amenities_name"> Free Breakfast</span>
                            <br>
                            <i id="amenities" class="fa fa-wifi" aria-hidden="true"></i><span id="amenities_name"> Wi-Fi</span>
                    </td>
                    <td align="right" rowspan="2">
                        <button class="btn btn-primary" type="submit">BOOK</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a id="discount_price">&#8377;<?php echo round($room['price'],2); ?></a> <s id="original_price">&#8377;<?php echo round($room['tariffPrice'],2); ?></s> <a id="bar"> | </a>
                        <a id="discount"> <?php echo round($room['discountPercentage'],2).'%'.'&nbsp;off'?></a>
                    </td>
                </tr>
            </table>
    </div>
    </form>
 <?php $room_id++; endforeach; ?>
</section>
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../assets/plus2rooms_assets/js/add_remove_css_class.js"></script>

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