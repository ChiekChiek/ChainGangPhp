<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 6-6-2019
 * Time: 17:05
 */
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
                <h1>Winkelwagen</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="winkelwagen.php">Winkelwagen</a>
                </nav>
            </div>
        </div>
    </div>
</section>

<!--================ Winkelwagen =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Prijs</th>
                        <th scope="col">Aantal</th>
                        <th scope="col">Totaal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/winkelwagen.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <p>Koga Beachracer Gravel Bike</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>€1.799,-</h5>
                        </td>
                        <td>
                            <div class="product_count">
                                <input type="text" name="qty" id="sst" maxlength="12" value="3" title="Aantal:"
                                       class="input-text qty">
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                        </td>
                        <td>
                            <h5>€5.397,-</h5>
                        </td>
                    </tr>
                    <tr class="bottom_button">
                        <td>
                            <a class="gray_btn" href="#">Update Winkelwagen</a>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="cupon_text d-flex align-items-center">
                                <input type="text" placeholder="Vul couponcode in">
                                <a class="primary-btn" href="#">Toevoegen</a>
                                <a class="gray_btn" href="#">Sluit</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <h5>Subtotaal</h5>
                        </td>
                        <td>
                            <h5>€5.397,-</h5>
                        </td>
                    </tr>
                    <tr class="shipping_area">
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <h5>Verzenden</h5>
                        </td>
                        <td>
                            <div class="shipping_box">
                                <ul class="list">
                                    <li><a href="#">Gratis verzending</a></li>
                                    <li class="active"><a href="#">Lokale bezorging: €2.00,-</a></li>
                                </ul>
                                <h6>Bereken verzending <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                <select class="shipping_select">
                                    <option value="1">Nederland</option>
                                    <option value="2">Belgïe</option>
                                    <option value="4">Duitsland</option>
                                </select>
                                <select class="shipping_select">
                                    <option value="1">Selecteer een provincie</option>
                                    <option value="2">Selecteer een provincie</option>
                                    <option value="4">Selecteer een provincie</option>
                                </select>
                                <input type="text" placeholder="Postcode/Zipcode">
                                <a class="gray_btn" href="#">Update Details</a>
                            </div>
                        </td>
                    </tr>
                    <tr class="out_button_area">
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="checkout_btn_inner d-flex align-items-center">
                                <a class="gray_btn" href="winkel.html">Verder winkelen</a>
                                <a class="primary-btn" href="checkout.html">Ga naar de kassa</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
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
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
