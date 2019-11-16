
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
    <link rel="stylesheet" href="../assets/plus2rooms_assets/css/page_css/room.css" >
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

if(strtotime($_SESSION['checkin_date']) < strtotime(date('Y-m-d'))){
    $_SESSION['checkin_date']=date('Y-m-d');
}

if((strtotime($_SESSION['checkout_date']) < strtotime($_SESSION['checkin_date'])) || (strtotime($_SESSION['checkout_date']) == strtotime($_SESSION['checkin_date']))){
    $_SESSION['checkout_date']=date('Y-m-d',strtotime('+1 day'));
}

$pagename="rooms/room.php";
$_SESSION['redirect_url'] = $basePath.$pagename;

if(isset($_POST['room_id'])) {
    $room_id=$_POST['room_id'];
    $_SESSION['room_id']=$room_id;
    $room=$_SESSION['rooms'][$room_id];
    $_SESSION['room']=$room;
    $hotel=$_SESSION['hotel'];
}
else{
    if(isset($_SESSION['hotel'])&& isset($_SESSION['room'])){
        $hotel=$_SESSION['hotel'];
        $room=$_SESSION['room'];
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
<section id="list">
    <br>
    <div class="card mb-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    for($i=0;$i<count($room['images']);$i++)
                    {
                        if($i==0){

                            $class="active";
                        }
                        else{
                            $class="";
                        }
                        echo"
                        
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=$i class=$class></li>
                        
                        ";
                    }
                ?>

            </ol>
            <div class="carousel-inner">
                <?php
                $image_id=0;
                foreach($room['images'] as $images):
                    $image_link=$images['baseUrl'].$images['fileName'];
                    ?>
                    <?php
                    if($image_id==0){
                        echo "
                        <div class=\"carousel-item active\">
                        <img id='slider_image' src=$image_link  class=\"card-img-top\" alt=\"...\">
                        </div> 
                        ";
                    }
                    else{
                        echo "
                        <div class=\"carousel-item\">
                        <img id='slider_image' src=$image_link  class=\"card-img-top\" alt=\"...\">
                        </div>    
                        ";
                    }
                    ?>
                <?php $image_id++; endforeach; ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <form method="post" action="booking_room.php">

        <div class="card-body">
            <a class="card-title">
               <a style="font-size: 30px;font-weight: bold"><?php echo $room['name'];  ?></a>
            </a><br>
            <small style="font-size: 15px;"><?php echo $hotel['address']['street'].', '.$hotel['address']['city']; ?></small>
            <br>
            <?php
            $obj = new UrlHandler();
            $noOfReviews=$obj->fetchContents($baseURL."/bookingreview/byroom/".$_SESSION['room_id']);
            rating( $room['ratingSum']); echo  " (".count($noOfReviews)." Reviews)";
            ?>
            <hr>
            <div class="card">
                <div class="card-body">
                    <p>Hotel Amenities</p>
                    <div id="amenities_row" class="row">
                        <?php
                            amenities($room);
                        ?>
                    </div>
                </div>
            </div>

            <?php
            if(isset($_SESSION['user_data'])){

                if(isset(explode(' ',$_SESSION['user_data']['name'])[1])){

                    $lastname=explode(' ',$_SESSION['user_data']['name'])[1];

                }else{
                    $lastname="";

                }
                echo"                  
               <br>
               <form method='post' action='book_room.php'>
               <div class=\"card\">
                <div class=\"card-body\">
                    <p>Guest Details</p>
                                 <div class=\"inputs half\">
                                     <input required onchange=\"setdate()\" name=\"setTodaysDate1\" id=\"setTodaysDate1\" type=\"date\" placeholder=\" \"/>
                                     <label>Check In:</label>
                                </div>
                                <div class=\"inputs half\">
                                    <input  required onclick=\"validate()\" name=\"setTodaysDate2\" id=\"setTodaysDate2\" type=\"date\" placeholder=\" \"/>
                                    <label>Check Out:</label>
                                </div>
                                    <div class=\"inputs half\">
                                        <input name='fname' type='text' placeholder=' ' id='fName'  value=".$fname=explode(' ',$_SESSION['user_data']['name'])[0].">
                                        <label>First Name</label>
                                    </div>
                                    
                                    <div class=\"inputs half\">
                                        <input name='lname' required type=\"text\" placeholder=\" \"/ value=".$lastname.">
                                        <label>Last Name</label>
                                    </div>
                                    <div id=\"flexi_div\">
                                        <input name='email' required type=\"email\" placeholder=\" \"/ value=".$_SESSION['user_data']['email'].">
                                        <label>Email</label>
                                    </div>
                                    <div id=\"flexi_div\">
                                        <input name='phone' required type=\"number\" placeholder=\" \"/ value=".$_SESSION['user_data']['phone'].">
                                        <label>Phone</label>
                                    </div>
                                    <div class=\"inputs full\">
                                        <input name='notes' type=\"text\" placeholder=\" \"/>
                                        <label>Your notes</label>
                                    </div>
                </div>
            </div>
            <br>
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"check-row\">
                        <input name=\"check-one\" type=\"checkbox\" id=\"check-one\" class=\"hidden\" />

                        <label class=\"check-label\" for=\"check-one\">

                            <div class=\"check-box\">
                                <i class=\"fa fa-square-o check-off\"></i><i class=\"fa fa-check check-on\"></i>
                            </div>

                            Is Business Trip ?

                        </label>
                    </div>

                    <div class=\"menu\" style=\"display: none;\">

                        <div id=\"flexi_div\">
                            <input name='businessGSTIN' type=\"text\" placeholder=\" \"/>
                            <label>Business GSTIN</label>
                        </div>
                        <div id=\"flexi_div\">
                            <input name='businessName' type=\"text\" placeholder=\" \"/>
                            <label>Business Name</label>
                        </div>


                    </div>
                    <div class=\"check-row\">
                        <input  type=\"checkbox\" id=\"promo\"  class=\"hidden\" />

                        <label class=\"check-label\" for=\"promo\">

                            <div class=\"check-box\">
                                <i class=\"fa fa-square-o check-off\"></i><i class=\"fa fa-check check-on\"></i>
                            </div>

                            Use Promocode

                        </label>
                    </div>
                    <div class=\"promomenu\" style=\"display: none;\">
                        <div class=\"inputs full\">
                            <input name='promocode' type=\"text\" placeholder=\" \"/>
                            <label>Apply Promocode</label>
                        </div>
                    </div>

                    <div class=\"check-row\">
                        <input  type=\"checkbox\" id=\"wallet\"  class=\"hidden\" />

                        <label class=\"check-label\" for=\"wallet\">

                            <div class=\"check-box\">
                                <i class=\"fa fa-square-o check-off\"></i><i class=\"fa fa-check check-on\"></i>
                            </div>

                            Use Wallet Money
                            <small> (Available Rs: ".$_SESSION['user_data']['walletBalance']." ) </small>

                        </label>
                    </div>

                </div>
            </div>
                ";
            }
            ?>
            <br>
            <div class="card">
                <div  class="card-body">
                    <p>Payment Summary</p>
                    <hr>
                    <div id="payment_table_div">
                    <table>
                        <tr>
                            <td>
                                Room Charges
                            </td>
                            <td align="right">
                                &#8377;<?php
                               echo  round($room['tariffPrice'],2)
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                App Discount
                            </td>
                            <td align="right">
                                &#8377;
                                <?php
                                echo  round($room['discountPrint'],2)
                                ?>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <table>
                        <tr>
                            <td id="total" >
                                Total Payable
                            </td>
                            <td id="total" align="right">
                                &#8377;
                                <?php
                                echo  round($room['price'],2)
                                ?>
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <p>Hotel Location on Map</p>
                    <div  class="row">
<!--                        <iframe style="border: none;width: 100%;height:400px" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ_zORfyhaWjcRMt5rQzITvSs&amp;key=AIzaSyCVEYA5NcJqfr4x8Y9BrSLzVdGAypNsFWk" >-->
<!---->
<!--                        </iframe>-->
                        <iframe style="border: none;width: 100%;height:400px" frameborder="0"  src="https://www.google.com/maps/embed/v1/place?q=<?php echo $hotel['address']['latitude']; ?>,<?php echo $hotel['address']['longitude']; ?>&amp;key=AIzaSyCVEYA5NcJqfr4x8Y9BrSLzVdGAypNsFWk"></iframe>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <p>Hotel Rules</p>
                    <ul>
                        <li>Checking time will be 11:00am only</li>
                        <li>No alcohols will be provided or allowed from outside</li>
                        <li>Guest should hold Passport / Adharcard / Driving License</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="check-row">
                <input required type="checkbox" id="policy"  class="hidden" />

                <label class="check-label" for="policy">

                    <div class="check-box">
                        <i class="fa fa-square-o check-off"></i><i class="fa fa-check check-on"></i>
                    </div>

                    <b id="t_c">I agree to the <a href="#">T & C</a>, <a href="#">Cancellation</a> and <a href="#">Hotel Booking Policies</a>.</b>

                </label>
            </div>
            <center>
                <?php
                if(isset($_SESSION['user_data'])){
                    echo "
                    
                          <button type=\"submit\" class=\"btn btn-primary\">BOOK NOW</button>
                    ";
                }
                else{
                    echo "
                    <button class=\"btn btn-primary\" data-toggle=\"modal\"  data-target=\".bd-login-modal-lg\" >BOOK NOW</button>
                    
                    ";
                }
                ?>
            </center>
        </div>

        </form>
    </div>
</section>

<input id="receiver_checkin" type="text" hidden value="<?php echo $_SESSION['checkin_date']; ?>">
<input id="receiver_checkout" type="text" hidden value="<?php echo $_SESSION['checkout_date']; ?>">

<!--================ Accomodation Area  =================-->
<!--================Booking Tabel Area =================-->

<!--================Booking Tabel Area  =================-->
<!--================ Accomodation Area  =================-->

<!--================ Accomodation Area  =================-->
<!--================ start footer Area  =================-->
<?php
include_once "../footer.php";
?>
<!--================ End footer Area  =================-->

<script src="../assets/plus2rooms_assets/js/room_add_remove_css_class.js"></script>
<script src="../assets/plus2rooms_assets/js/dategenerator.js"></script>
<!--Javascript code to set the value in checkin and checkout date -->
<script>
    var checkin=document.getElementById('receiver_checkin').value;
    var checkout=document.getElementById('receiver_checkout').value;
    document.getElementById('setTodaysDate1').value= checkin;
</script>
<script>
    setdate();
    document.getElementById('setTodaysDate2').value= checkout;
</script>
<!------------------------------------------------------------------>

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