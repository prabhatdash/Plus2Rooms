<!--Created by PhpStorm.-->
<!--* User: prabhatdas-->
<!--* Date: 2019-02-25-->
<!--* Time: 01:01-->
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
  <link rel="stylesheet" href="../assets/plus2rooms_assets/css/page_css/disp_hotels.css" >
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

$pagename="hotels/disp_hotels.php";
$_SESSION['redirect_url'] = $basePath.$pagename;

if(isset($_POST['index_book_btn']))
{
    $_SESSION['checkin_date']=$_POST['setTodaysDate1'];
    $_SESSION['checkout_date']=$_POST['setTodaysDate2'];
    $_SESSION['latitude']=$_POST['lat'];
    $_SESSION['longitude']=$_POST['lng'];
}

else
{
   echo "
   <script>
   window.location.href='../';
   </script>
   ";
}

if(strtotime($_SESSION['checkin_date']) < strtotime(date('Y-m-d'))){
    $_SESSION['checkin_date']=date('Y-m-d');
}

if((strtotime($_SESSION['checkout_date']) < strtotime($_SESSION['checkin_date'])) || (strtotime($_SESSION['checkout_date']) == strtotime($_SESSION['checkin_date']))){
    $_SESSION['checkout_date']=date('Y-m-d',strtotime('+1 day'));
}

$checkin_time="12:00:00";
$checkout_time="11:00:00";

$obj = new UrlHandler();
$hotels=$obj->fetchContents($baseURL.'/hotels/'.$_SESSION['latitude'].'/'.$_SESSION['longitude'].'/1/'.$_SESSION['checkin_date'].'T'.$checkin_time.'/'.$_SESSION['checkout_date'].'T'.$checkout_time.'/1');
$_SESSION['hotels']=$hotels;

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
                <li class="active">Hotels</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!--================ Accomodation Area  =================-->
<section id="hotel_list">
    <?php
    echo $baseURL.'/hotels/'.$_SESSION['latitude'].'/'.$_SESSION['longitude'].'/1/'.$_SESSION['checkin_date'].'T'.$checkin_time.'/'.$_SESSION['checkout_date'].'T'.$checkout_time.'/1';
    ?>
    <div  id="p1">
        <?php
        $id=0;
        foreach($hotels as $hotel):
        ?>
        <div id="p2">
            <form method="post" action="../rooms/disp_rooms.php">
                <input name="hotel_id" hidden  type="text"  value="<?php echo $id; ?>">
            <div  class="card">
                <img class="card-img-top" src="<?php echo $hotel['imageLink']; ?>" alt="Card image cap">
                <div class="card-body">
                    <a id="hotel_name" class="card-title">
                        <?php echo $hotel['name']; ?>
                    </a>
                    <br>
                    <a class="card-text">
                        <small id="hotel_address" class="text-muted">
                            <?php echo $hotel['address']['street'].', '.$hotel['address']['city']; ?>
                        </small>
                    </a>
                    <p id="rating">
                        <?php
                        rating($hotel['rating']);
                        ?>
                    </p>
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <a id="discount_price">&#8377;<?php echo round($hotel['rooms'][0]['price'],2); ?></a> <s id="original_price">&#8377; <?php echo round($hotel['rooms'][0]['tariffPrice'],2); ?></s>
                                <br>
                                <a id="discount">
                                    <?php echo round($hotel['rooms'][0]['discountPercentage'],2).'%'.'&nbsp;off'?>
                                </a>
                            </td>
                            <td align="right">
                                <button class='btn btn-primary' type="submit">SELECT HOTEL</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            </form>
        </div>
            <?php $id++; endforeach; ?>
    </div>
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