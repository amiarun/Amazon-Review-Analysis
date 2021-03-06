<?php
set_time_limit(0);
$python=`python url.py`;
$python=`python test.py`;
// shell_exec('url.py');

# Here's My Try
$t_name=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\name.txt');
$t_price=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\price.txt');
$t_detail=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\detail.txt');
$t_reviews=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\reviews.txt');
$t_revdetail=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\revdetail.txt');
$t_rate=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\rate.txt');
$t_tech=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\tech.txt');
$t_polarity=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\polarity.txt');
$t_pscore=file_get_contents('C:\xamppnew\htdocs\Amazon\listing\pscore.txt');

$name=trim($t_name);
$price=trim($t_price);
$rate=trim($t_rate);
$detail=explode("\n",$t_detail);
$reviews=explode("\n",$t_reviews);
$revdetail=explode("\n",$t_revdetail);
$tech=explode("\n",$t_tech);
$polarity=explode("\n",$t_polarity);
$pscore=trim($t_pscore);

# End Of My Trial

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Amazon Analyst</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title><?php echo $name ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                            <a href="index.html"><img src="assets/img/hero-bg.png" height="15%" width="15%" alt="Klorofil Logo" class="img-responsive logo"><p class="navbar-brand" href="index.html">Amazon Product Details </p></a>
                            
                            
                    <!-- <a><img src="assets/img/hero-bg.png" height="20%" width="20%" alt="Klorofil Logo" class="img-responsive logo"><span>Amazon Product Details</span> -->
                    <!-- <a class="navbar-brand">Amazon Product Detail</a> -->
                    
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-menu"></span>
            </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Explore
                   <span class="icon-arrow-down"></span>
                 </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Listing
                  <span class="icon-arrow-down"></span>
                </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                  <span class="icon-arrow-down"></span>
                </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li> -->
                                <!-- <li class="nav-item active">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li> -->
                                <!-- <li><a href="#" class="btn btn-outline-light top-btn"><span class="ti-plus"></span> Add Listing</a></li>
                            </ul>
                        </div> -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--//END HEADER -->
    <!--============================= BOOKING =============================-->
    <div>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <!-- <div class="swiper-slide">
               
                     </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/71GTHRQgr5L._SX679_.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/713sYdh940L._SX679_.jpg" class="img-fluid" alt="#">
                    </a>
                </div> -->
                <!-- <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div> -->
                <!-- <div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div> -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    <!--//END BOOKING -->
    <!--============================= RESERVE A SEAT =============================-->
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><?php
                    // echo "<script>alert('$line[1]');</script>";
                    echo $name;
                ?>
                </h5>
                <br>
                    <p><br>₹ <span><?php
                    echo $price;
                ?></span></p>
                    <!-- <p class="reserve-description">Innovative cooking, paired with fine wines in a modern setting.</p> -->
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span>
                                <span>Customer Rating</span>
                                <br>
                                <?php
                                     echo ($rate);
                                ?>
                            </span>
                        </div>
                        <!-- <div class="review-btn">
                            <a href="#" class="btn btn-outline-danger">WRITE A REVIEW</a>
                            <span>Customer Rating</span>
                        </div> -->
                        <div class="reserve-bating">
                            <span>
                                <span>Polarity</span>
                                <br>
                                <?php
                                    echo ($pscore);
                                ?>
                            </span>
                        </div>
                        <!-- <div class="review-btn"> -->
                            <!-- <a href="#" class="btn btn-outline-danger">WRITE A REVIEW</a> -->
                            <!-- <span>Polarity</span>
                        </div> -->
                    </div>

                    <!-- <div class="reserve-seat-block"> -->
                        <!-- <div class="reserve-rating">
                            <span>
                                <?php
                                    echo ($rate);
                                ?>
                            </span> -->
                        <!-- </div> -->
                        <!-- <div class="review-btn"> -->
                            <!-- <a href="#" class="btn btn-outline-danger">WRITE A REVIEW</a> -->
                            <!-- <span>Polarity</span> -->
                        <!-- </div> -->
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="reserve-rating">
                            <span>
                            </span>
                        </div>
                        <div class="review-btn"> -->
                            <!-- <a href="#" class="btn btn-outline-danger">WRITE A REVIEW</a> -->
                            <!-- <span>Polarity</span> -->
                        <!-- </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--//END RESERVE A SEAT -->
    <!--============================= BOOKING DETAILS =============================-->
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <h5>Polarity Chart </h5>
                            <center><img width="50%" height="50%" src="pie.png"></img><center>
                        <br><br><h5>Details<br></h5>
                            <p><?php
                    foreach ($detail as $i_detail)
                    {
                        echo $i_detail;
                    }
                ?>
                <!-- <h5><hr><br>Technical Details<br></h5>
                    <p><?php

                    foreach ($tech as $i_tech)
                    {
                        echo $i_tech;
                    }
                ?></p>
                            <hr> -->
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                        <span class="ti-check-box"></span>
                        <span class="custom-control-description">Bike Parking</span>
                      </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Wireless Internet  </span>
                     </label>
                            </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                     <span class="ti-check-box"></span>
                     <span class="custom-control-description">Smoking Allowed  </span>
                   </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                    <span class="ti-check-box"></span>
                    <span class="custom-control-description">Street Parking</span>
                  </label>
                            </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                   <span class="ti-check-box"></span>
                   <span class="custom-control-description">Special</span>
                 </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                  <span class="ti-check-box"></span>
                  <span class="custom-control-description">Accepts Credit cards</span>
                </label>
                            </div>
                        </div>
                    </div> -->
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>User Reviews</h5>
                        <hr>
                        <?php
                        foreach ($reviews as $i =>$title)
                        {                                            
                            ?>
                        <div class="customer-review_wrap">
                            <!-- <div class="customer-img"> -->
                                <!-- <img src="images/customer-head.png" class="img-fluid" width="40%" height="40%"> -->
                                <!-- <p>Amanda G</p>
                                <span>35 Reviews</span> -->
                            <!-- </div> -->
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>
                                            <?php
                                            echo $title;
                                            ?>
                                        </h6>
                                        <!-- <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span> -->
                                        <!-- <p>Reviewed 2 days ago</p> -->
                                    </div>
                                    <!-- <div class="customer-rating">8.0</div> -->
                                </div>
                                <h6 style="color:green; font-size:12pt;">
                                <?php
                                    echo $polarity[$i];
                                ?>
                                </h6>
                                <p class="customer-text"><?php
                                echo $revdetail[$i];
                                ?><br><br><br><hr>
                                </p>
                                <!-- <p class="customer-text">I love how you can see into the kitchen and watch them make the noodles and you can definitely tell that this is a family run establishment. The prices are are great with one dish maybe being $9. You just have to remember
                                    to bring cash.
                                </p> -->
                                <!-- <ul>
                                    <li><img src="images/review-img1.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img2.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img3.jpg" class="img-fluid" alt="#"></li>
                                </ul> -->
                                <!-- <span>28 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a> -->
                            </div>
                        </div>
                        <?php
                            }
                        
                        ?>
                        <hr>
                        <!-- <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="images/customer-img2.jpg" class="img-fluid" alt="#">
                                <p>Kevin W</p>
                                <span>17 Reviews</span>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6>A hole-in-the-wall old school shop.</h6>
                                        <span class="customer-rating-red"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <span class="round-icon-blank"></span>
                                        <p>Reviewed 3 months ago</p>
                                    </div>
                                    <div class="customer-rating customer-rating-red">2.0</div>
                                </div>
                                <p class="customer-text">The dumplings were so greasy...the pan-fried shrimp noodles were the same. So much oil and grease it was difficult to eat. The shrimp noodles only come with 3 shrimp (luckily the dish itself is cheap) </p>
                                <p class="customer-text">The beef noodle soup was okay. I added black vinegar into the broth to give it some extra flavor. The soup has bok choy which I liked - it's a nice textural element. The shop itself is really unclean (which is the case
                                    in many restaurants in Chinatown) They don't wipe down the tables after customers have eaten. If you peak into the kitchen many of their supplies are on the ground which is unsettling... </p>
                                <span>10 people marked this review as helpful</span>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-md-4 responsive-wrap">
                    <div class="contact-info">
                        <img src="images/map.jpg" class="img-fluid" alt="#">
                        <div class="address">
                            <span class="icon-location-pin"></span>
                            <p> Doyers St<br> xamppnew York, NY 10013<br> b/t Division St & St James Pl <br> Chinatown, Civic Center</p>
                        </div>
                        <div class="address">
                            <span class="icon-screen-smartphone"></span>
                            <p> +44 20 7336 8898</p>
                        </div>
                        <div class="address">
                            <span class="icon-link"></span>
                            <p>https://burgerandlobster.com</p>
                        </div>
                        <div class="address">
                            <span class="icon-clock"></span>
                            <p>Mon - Sun 09:30 am - 05:30 pm <br>
                                <span class="open-now">OPEN NOW</span></p>
                        </div>
                        <a href="#" class="btn btn-outline-danger btn-contact">SEND A MESSAGE</a>
                    </div>
                    <div class="follow">
                        <div class="follow-img">
                            <img src="images/follow-img.jpg" class="img-fluid" alt="#">
                            <h6>Christine Evans</h6>
                            <span>xamppnew York</span>
                        </div>
                        <ul class="social-counts">
                            <li>
                                <h6>26</h6>
                                <span>Listings</span>
                            </li>
                            <li>
                                <h6>326</h6>
                                <span>Followers</span>
                            </li>
                            <li>
                                <h6>12</h6>
                                <span>Followers</span>
                            </li>
                        </ul>
                        <a href="#">FOLLOW</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--//END BOOKING DETAILS -->
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy; 2018 Listing. All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Magnific popup JS -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Swipper Slider JS -->
    <script src="js/swiper.min.js"></script>
    <script>
        var swiper = xamppnew Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>
</body>

</html>
