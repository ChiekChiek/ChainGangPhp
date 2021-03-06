<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 6-6-2019
 * Time: 17:01
 */
include("database/database.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Author Meta -->
    <meta name="author" content="J">
    <!-- Description Meta -->
    <meta name="description" content="">
    <!-- Keyword Meta -->
    <meta name="keywords" content="">
    <!-- Character set Meta -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>F-Bikes</title>
    <!--				CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php
include("header.php");
?>

<!-- Banner -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class="active-banner-slider owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>F-Bikes <br>Collectie!</h1>
                                <p>Wilt u een fiets kopen online? F-Bikes.com heeft de fiets die u zoekt!
                                    Voor wie graag een wedstrijd fietst, zoekt naar een mooie cargobike voor dagelijkse ritjes of de overstap wil maken naar een lage instapfiets.
                                    In ons ruime en veelzijdige assortiment fietsen op F-Bikes.com vind u voor elke soort gebruik de juiste fiets.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1>F-Bikes <br>Collectie!</h1>
                                <p>Wilt u een fiets kopen online? F-Bikes.com heeft de fiets die u zoekt!
                                    Voor wie graag een wedstrijd fietst, zoekt naar een mooie cargobike voor dagelijkse ritjes of de overstap wil maken naar een lage instapfiets.
                                    In ons ruime en veelzijdige assortiment fietsen op F-Bikes.com vind u voor elke soort gebruik de juiste fiets.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="img/banner/banner-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon1.png" alt="">
                    </div>
                    <h6>Gratis bezorging</h6>
                    <p>Gratis verzending bij alle bestellingen</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon2.png" alt="">
                    </div>
                    <h6>Terugstuurbeleid</h6>
                    <p>Gratis verzending bij alle bestellingen</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon3.png" alt="">
                    </div>
                    <h6>24/7 Support</h6>
                    <p>Gratis verzending bij alle bestellingen</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="img/features/f-icon4.png" alt="">
                    </div>
                    <h6>Veilige betaling</h6>
                    <p>Gratis verzending bij alle bestellingen</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categorie -->
<section class="category-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/categorie/c1.jpg" alt="">
                            <a href="img/categorie/c1.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Fietsen voor jou!</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/categorie/c2.jpg" alt="">
                            <a href="img/categorie/c2.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Fietsen voor jou!</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/categorie/c3.jpg" alt="">
                            <a href="img/categorie/c3.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Product for Couple</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="img/categorie/c4.jpg" alt="">
                            <a href="img/categorie/c4.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Fietsen voor jou!</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-deal">
                    <div class="overlay"></div>
                    <img class="img-fluid w-100" src="img/categorie/c5.jpg" alt="">
                    <a href="img/categorie/c5.jpg" class="img-pop-up" target="_blank">
                        <div class="deal-details">
                            <h6 class="deal-title">Fietsen voor jou!</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product1 -->
<section class="owl-carousel active-product-area section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Nieuwste producten</h2>
                        <p>Nieuwste producten.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <?php
                getPro();
                ?>
            </div>
        </div>
    </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>Komende producten</h2>
                        <p>Komende producten.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <?php
                getPro();
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Exclusive Deal -->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding exclusive-left">
                <div class="row clock_sec clockdiv" id="clockdiv">
                    <div class="col-lg-12">
                        <h1>Exclusieve Hot Deal loopt binnenkort af!</h1>
                        <p>Die erg verliefd zijn op een milieuvriendelijk systeem.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="row clock-wrap">
                            <div class="col clockinner1 clockinner">
                                <h1 class="days">150</h1>
                                <span class="smalltext">Days</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="hours">23</h1>
                                <span class="smalltext">Hours</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="minutes">47</h1>
                                <span class="smalltext">Mins</span>
                            </div>
                            <div class="col clockinner clockinner1">
                                <h1 class="seconds">59</h1>
                                <span class="smalltext">Secs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="winkel.php" class="primary-btn">Winkel nu</a>
            </div>
            <div class="col-lg-6 no-padding exclusive-right">
                <div class="active-exclusive-product-slider">
                    <!-- single exclusive carousel -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="img/product/e-p1.jpg" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>€150.00</h6>
                                <h6 class="l-through">€210.00</h6>
                            </div>
                            <h4>DRIFTER 26</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Voeg toe aan winkelwagen</span>
                            </div>
                        </div>
                    </div>
                    <!-- single exclusive carousel -->
                    <div class="single-exclusive-slider">
                        <img class="img-fluid" src="img/product/e-p1.jpg" alt="">
                        <div class="product-details">
                            <div class="price">
                                <h6>€150.00</h6>
                                <h6 class="l-through">€210.00</h6>
                            </div>
                            <h4>DRIFTER 26</h4>
                            <div class="add-bag d-flex align-items-center justify-content-center">
                                <a class="add-btn" href=""><span class="ti-bag"></span></a>
                                <span class="add-text text-uppercase">Voeg toe aan winkelwagen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Mannen Fietsen</h6>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Elektrische fietsen</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Stadsfietsen</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Sportieve fietsen</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Speed pedelecs</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Mountainbikes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Vrouwen Fietsen</h6>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Elektrische fietsen</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Stadsfietsen</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Sportieve fietsen</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Speed pedelecs</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Mountainbikes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Kinder Fietsen</h6>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Loopfiets</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Driewieler</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Bakfiets</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Jongensfiets</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Meisjesfiets</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Nieuwsbrief</h6>
                    <p>Blijf op de hoogte met onze nieuwtjes</p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="form-inline">

                            <div class="d-flex flex-row">

                                <input id="panelNieuwsbrief" class="form-control" name="EMAIL" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail '"
                                       required="" type="email">


                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Volgs Ons</h6>
                    <p>Laten we sociaal zijn</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Alle rechten zijn voorbehouden. | <i class="fa fa-bicycle" aria-hidden="true"></i> by <a href="#" target="_blank">F-Bikes.com</a>
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
