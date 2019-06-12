<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 6-6-2019
 * Time: 17:03
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
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Productgegevens</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="winkel.php">Winkel<span class="lnr lnr-arrow-right"></span></a>
                    <a href="categorie.php">Product<span class="lnr lnr-arrow-right"></span></a>
                    <a href="productgegevens.php">Productgegevens</a>
                </nav>
            </div>
        </div>
    </div>
</section>


<?php
details();
?>


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
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
