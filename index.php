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
    <link rel="icon" href="image/favicon.png" type="image/png">
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
    <link rel="stylesheet" href="assets/plus2rooms_assets/css/page_css/index.css" >
    <!--------------->
</head>
<body>
<!--================Header Area =================-->
<?php
include_once "navbar.php";
include_once "config.php";
include_once "UrlHandler.php";
$pagename="";
$_SESSION['redirect_url'] = $basePath.$pagename;
?>
    <!--TOP SECTION-->
<!--================Header Area =================-->

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <div style="margin-bottom: 20%;" class="hotel_booking_area position">
                    <div class="container">
                        <div class="hotel_booking_table">
                            <div class="col-md-3">
                                <h2>Book<br> Your Room</h2>
                            </div>
                            <div class="col-md-9">
                                <div class="boking_table">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="book_tabel_item">
                                                <form method="post" action="hotels/disp_hotels.php" id="property">
                                                    <div class="form-group">
                                                        <div id="search_div" class='input-group date'>
                                                            <input id="address" required name='searchbar' type='text' class="form-control" placeholder="Where Are You Travelling ?"/>
                                                            <input hidden type="text" name="lat" >
                                                            <input hidden type="text" name="lng">
                                                            <span class="input-group-addon">
                                                       <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    </span>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <div class='input-group date'>
                                                        <input required onchange="setdate()" name="setTodaysDate1" id="setTodaysDate1" type='date' class="form-control" placeholder="Check In :&nbsp;"/>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="book_tabel_item">

                                                <div class="form-group">
                                                    <div class='input-group date' id="date_picker">
                                                        <input required onclick="validate()" name="setTodaysDate2" id="setTodaysDate2" type='date' class="form-control" placeholder="Check Out :&nbsp;"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="book_tabel_item">
                                                <br>
                                                <button name="index_book_btn" class="book_now_btn button_hover" type="submit" >Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Banner Area =================-->

<!--================ Accomodation Area  =================-->

<!--================ Accomodation Area  =================-->

<!--================ Facilities Area  =================-->

<!--================ Facilities Area  =================-->

<!--================ About History Area  =================-->

<!--================ About History Area  =================-->

<!--================ Testimonial Area  =================-->
<section class="testimonial_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">OFFER AND DEALS</h2>
        </div>
        <div  class="testimonial_slider owl-carousel">
            <?php
            $obj = new UrlHandler();
            $promotions = $obj->fetchContents($baseURL.'/promotions');

            if($promotions!=404)
                foreach($promotions as $promotion):?>
                <?php echo "<img id='img' src='".$promotion["imageLink"]."'>"  ?>
                <?php  endforeach;

                else
                    echo "404_err_not found !";
                ?>
        </div>
</section>
<!--================ Testimonial Area  =================-->

<!--================ Latest Blog Area  =================-->
<section class="latest_blog_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">WHY US</h2>
        </div>
        <div class="row mb_30">
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="assets/royal_assets/image/blog/blog-1.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a class="button_hover tag_btn">Plus 2 Rooms</a>
                            <a class="button_hover tag_btn">Cost</a>
                        </div>
                        <a><h4 class="sec_h4">Low Cost Rooms</h4></a>
                        <p>Get low cost rooms comparision to others</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="assets/royal_assets/image/blog/blog-2.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a class="button_hover tag_btn">Plus 2 Rooms</a>
                            <a class="button_hover tag_btn">Amenities</a>
                        </div>
                        <a href="#"><h4 class="sec_h4">Hotels With Best Amenities</h4></a>
                        <p>Best amenities available at best price</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-recent-blog-post">
                    <div class="thumb">
                        <img class="img-fluid" src="assets/royal_assets/image/blog/blog-3.jpg" alt="post">
                    </div>
                    <div class="details">
                        <div class="tags">
                            <a class="button_hover tag_btn">Plus 2 Rooms</a>
                            <a class="button_hover tag_btn">Deals</a>
                        </div>
                        <a><h4 class="sec_h4">Best Deal</h4></a>
                        <p>Get the best deal ever while booking a room</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================ Recent Area  =================-->

<!--================ start footer Area  =================-->
<?php include_once"footer.php"; ?>
<!--================ End footer Area  =================-->
<!-- Optional JavaScript -->
<script src="assets/plus2rooms_assets/js/dategenerator.js"></script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/royal_assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/royal_assets/js/popper.js"></script>
<script src="assets/royal_assets/js/bootstrap.min.js"></script>
<script src="assets/royal_assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/royal_assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/royal_assets/js/mail-script.js"></script>
<script src="assets/royal_assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="assets/royal_assets/vendors/nice-select/js/jquery.nice-select.js"></script>
<script src="assets/royal_assets/js/mail-script.js"></script>
<script src="assets/royal_assets/js/stellar.js"></script>
<script src="assets/royal_assets/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="assets/royal_assets/js/custom.js"></script>

<!-- GOOGLE MAPS LOCATION SEARCH -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="assets/plus2rooms_assets/js/mapsautoload.js"></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/20625/jquery.geocomplete.min.js'></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCVEYA5NcJqfr4x8Y9BrSLzVdGAypNsFWk&libraries=places&region=in'></script>
<!---------------------------------->
</body>
</html>