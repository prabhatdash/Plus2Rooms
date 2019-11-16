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
    <link rel="stylesheet" href="../assets/plus2rooms_assets/css/page_css/my_bookings.css" >
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="../assets/plus2rooms_assets/css/checkbox.css">
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

</head>
<body>
<!--================Header Area =================-->
<?php
include_once "../navbar.php";
include_once "../miscellaneous_functions.php";
include_once "../config.php";
include_once "../UrlHandler.php";
if(isset($_SESSION['user_data'])){
$pagename="";
$_SESSION['redirect_url'] = $basePath.$pagename;
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
<!--================Breadcrumb Area =================-->

<?php
$obj= new UrlHandler();
$myBookings = $obj->fetchContents($baseURL.'/booking/'.$_SESSION['user_data']['email']);
?>

<!--================ Accomodation Area  =================-->
    <div id="desktop_table" class="card mb-3">

        <div class="card-title">
            <br>
        </div>
            <hr>
            <div   style="width: 85rem" class="card mx-auto">
                <div class="card-body">


                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Booking Id</th>
                            <th scope="col">Guest Name</th>
                            <th scope="col">Hotel Details</th>
                            <th scope="col">Room Details</th>
                            <th scope="col">CheckIn</th>
                            <th scope="col">CheckOut</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Check In Status</th>

                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach (array_reverse($myBookings) as $booking ):
                        ?>

                        <tr>
                            <th scope="row">
                                <?php
                                echo $booking['id'];
                                ?>
                            </th>
                            <th>
                                <?php
                                echo $booking['user']['name'];
                                ?>
                            </th>
                            <th>
                                Name: <?php echo $booking['room']['hotelName']; ?>
                                <br>
                                Address: <a style="color: #1946ff;cursor: pointer" data-toggle="modal" data-target=".bd-address-modal-lg">Click Here</a>
                            </th>
                            <th>

                                Category: <?php echo $booking['room']['category']; ?>
                                <br>
                                No of Person: <?php echo $booking['room']['noOfPersons']; ?>

                            </th>
                            <th>
                                <?php echo substr($booking['fromTime'],0,10); ?>
                            </th>
                            <th>
                                <?php echo substr($booking['uptoTime'],0,10); ?>
                            </th>
                            <th>&#8377;
                                <?php
                                echo $booking['price'];
                                ?>
                            </th>
                            <th>
                                <?php
                                if(($booking['paymentStatus']=='PAID_ONLINE') || ($booking['paymentStatus']=='PAID_OFFLINE') ){
                                    echo"
                                       <button disabled class=\"btn-sm btn-outline-success\">PAYMENT DONE</button>
                                    ";
                                }else{
                                    echo"
                                       <button  class=\"btn-sm btn-outline-danger\">PAY NOW</button>
                                    ";
                                }
                                ?>

                            </th>
                            <th>
                                <?php
                                if($booking['checkinTime']==NULL) {
                                    echo "<a style='color:#1e2228'>Yet To Check In</a>";
                                }
                                if($booking['checkinTime']!=NULL) {
                                    echo "<a style='color:#ff007a'>Checked In</a>";
                                }
                                if($booking['checkoutTime']!=NULL){

                                    echo "<a style='color: #feff00'>Checked Out</a>";
                                }
                                ?>

                            </th>



                            <div class="modal fade bd-address-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                            <div class="card">
                                                <div class="card-body">
                                                    <i id="close_icon" data-dismiss="modal"  class="fa fa-times" aria-hidden="true"></i>
                                                    <p>Hotel Location on Map</p>
                                                    <p>Contact No: <?php echo $booking['phone1'] ?></p>
                                                    <hr>
                                                    <div  class="row">

                                                        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $booking['latitude']; ?>,<?php echo $booking['longitude']; ?>&amp;key=AIzaSyCVEYA5NcJqfr4x8Y9BrSLzVdGAypNsFWk"></iframe>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </tr>

                        <?php
                         endforeach;
                        ?>




                        </tbody>
                    </table>



                </div>
            </div>
    </div>




<!--MOBILE VIEW-->

<section id="booking_list">

    <div class="card-title">
        <br>
        <img style="margin-left: 2%;width: 35px;height: 35px" src="../assets/plus2rooms_assets/images/bkng.png"> <a style="font-size: 30px;font-weight:500;color:#4d4d4d">My Bookings</a>
        <hr>
    </div>

        <?php
        foreach (array_reverse($myBookings) as $booking ):?>
            <div id="card_mobile" class="card" >
                <div class="card-body">

                    <table width="100%">

                        <tr>
                            <td id="table_title">
                                BOOKING ID:
                            </td>
                            <td align="right">
                                <b id="start">
                                    <?php
                                    echo $booking['id'];
                                    ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td id="table_title">
                                GUEST NAME:
                            </td>
                            <td align="right">
                                <b id="content">
                                    <?php
                                    echo $booking['user']['name'];
                                    ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td id="table_title">
                                HOTEL NAME:
                            </td>
                            <td align="right">
                                <b id="content">
                                    <?php echo $booking['room']['hotelName']; ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td id="table_title">
                                BOOKING DETAILS:
                            </td>
                            <td align="right">
                                <a style="color: #1946ff;cursor: pointer" data-toggle="modal" data-target=".bd-mobile-modal-lg">Click Here</a>
                            </td>
                        </tr>
                        <tr>
                            <td id="table_title">
                                CHECK IN:
                            </td>
                            <td align="right">
                                <b id="content">
                                    <?php echo substr($booking['fromTime'],0,10); ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td id="table_title">
                                CHECK OUT:
                            </td>
                            <td align="right">
                                <b id="content">
                                    <?php echo substr($booking['uptoTime'],0,10); ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td id="table_title">
                                AMOUNT:
                            </td>
                            <td  align="right">
                                <b id="start">
                                    &#8377;
                                    <?php
                                    echo $booking['price'];
                                    ?>
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td id="table_title">
                                CHECKIN STATUS
                            </td>
                            <td style="color: red" align="right">
                                <?php
                                if($booking['checkinTime']==NULL) {
                                    echo "<a style='color:#1e2228'>Yet To Check In</a>";
                                }
                                if($booking['checkinTime']!=NULL) {
                                    echo "<a style='color:#ff007a'>Checked In</a>";
                                }
                                if($booking['checkoutTime']!=NULL){

                                    echo "<a style='color: #feff00'>Checked Out</a>";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td id="table_title">
                                PAYMENT STATUS
                            </td>
                            <td align="right">

                                <?php
                                if(($booking['paymentStatus']=='PAID_ONLINE') || ($booking['paymentStatus']=='PAID_OFFLINE') ){
                                    echo"
                                       <button disabled class=\"btn-sm btn-outline-success\">PAYMENT DONE</button>
                                    ";
                                }else{
                                    echo"
                                       <button  class=\"btn-sm btn-outline-danger\">PAY NOW</button>
                                    ";
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="modal fade bd-mobile-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">

                            <div class="card">
                                <div class="card-body">
                                    <i id="close_icon" data-dismiss="modal"  class="fa fa-times" aria-hidden="true"></i>

                                    <b>Category:</b> <a><?php echo $booking['room']['category']; ?></a>
                                    <br>
                                    <b>No of Person:</b> <a><?php echo $booking['room']['noOfPersons']; ?></a>
                                    <br>
                                    <b>Contact No:</b> <a><?php echo $booking['phone1'] ?></a>

                                    <hr>

                                    <div  class="row">
                                        <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $booking['latitude']; ?>,<?php echo $booking['longitude']; ?>&amp;key=AIzaSyCVEYA5NcJqfr4x8Y9BrSLzVdGAypNsFWk"></iframe>

                                        </iframe>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>


        <?php endforeach; ?>
</section>




<!--================ Accomodation Area  =================-->
<!--================HOTEL ADDRESS =================-->



<!--Mobile view modal-->







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