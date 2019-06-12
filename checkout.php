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
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="winkelwagen.php">Winkelwagen<span class="lnr lnr-arrow-right"></span></a>
                    <a href="checkout.php">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>

<!--================ Checkout =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="returning_customer">
            <div class="check_title">
                <h2>Terugkomende klant? <a href="#panelli">Klik hier om in te loggen</a></h2>
            </div>
            <p>Als u al eerder met ons hebt gewinkeld, vul dan hieronder uw gegevens in. Als u een nieuwe klant bent, gaat u naar het gedeelte Facturering en verzending.</p>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                    <input type="text" id="panelli" class="form-control" id="name" name="name">
                    <span class="placeholder" data-placeholder="Email"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="placeholder" data-placeholder="Wachtwoord"></span>
                </div>
                <div class="col-md-12 form-group">
                    <button type="submit" value="submit" class="primary-btn">login</button>
                    <div class="creat_account">
                        <input type="checkbox" id="f-option" name="selector">
                        <label for="f-option">Onthoud mij</label>
                    </div>
                    <a class="lost_pass" href="#">Wachtwoord vergeten?</a>
                </div>
            </form>
        </div>
        <div class="cupon_area">
            <div class="check_title">
                <h2>Heb je een waardebon? <a href="#panelcp">Klik hier om uw code in te voeren</a></h2>
            </div>
            <input type="text" id="panelcp" placeholder="Vul couponcode in">
            <a class="tp_btn" href="#">Pas Coupon toe</a>
        </div>
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="first" name="name">
                            <span class="placeholder" data-placeholder="Voornaam"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="last" name="name">
                            <span class="placeholder" data-placeholder="Achternaam"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="company" name="company" placeholder="Bedrijfsnaam">
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="telnummer" name="telnummer">
                            <span class="placeholder" data-placeholder="Telefoonnummer"></span>
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="email" name="compemailany">
                            <span class="placeholder" data-placeholder="E-mailadres"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select">
                                <option value="1">Nederland</option>
                                <option value="2">Belgïe</option>
                                <option value="4">Duitsland</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add1" name="add1">
                            <span class="placeholder" data-placeholder="Adresregel 1"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="add2" name="add2">
                            <span class="placeholder" data-placeholder="Adresregel 2"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="city" name="city">
                            <span class="placeholder" data-placeholder="Plaats/stad"></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select">
                                <option value="1">Wijk</option>
                                <option value="2">Wijk</option>
                                <option value="4">Wijk</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Account aanmaken?</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Verzendgegevens</h3>
                                <input type="checkbox" id="f-option3" name="selector">
                                <label for="f-option3">Verzend naar een ander adres?</label>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Bestel notities"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Jouw bestelling</h2>
                        <ul class="list">
                            <li><a href="#">Product <span>Totaal</span></a></li>
                            <li><a href="#">Koga Beachracer G.B. <span class="middle">x3</span> <span class="last">€5.397,-</span></a></li>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotaal <span>€5.397,-</span></a></li>
                            <li><a href="#">Verzend kosten <span>Lokale bezorging: €2.00,-</span></a></li>
                            <li><a href="#">Totaal <span>€5.399,-</span></a></li>
                        </ul>
                        <!--
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Cheque betalingen</label>
                                <div class="check"></div>
                            </div>
                            <p>Stuur een cheque naar winkelnaam, winkelstraat, winkelstad, winkelstaat / provincie, winkelnummer.</p>
                        </div>
                        -->
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Betaal via PayPal; u kunt met uw creditcard betalen als u geen PayPal-account hebt.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">Ik heb de </label>
                            <a href="#">algemene voorwaarden*</a>
                            <label for="f-option4">gelezen en ga hiermee akkoord</label>
                        </div>
                        <a class="primary-btn" href="bevestiging.html">Ga naar Paypal</a>
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
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
