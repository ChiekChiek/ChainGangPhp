<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 6-6-2019
 * Time: 17:04
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
                <h1>Winkel</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="winkel.php">Winkel</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Einde Banner -->




<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Categorieën</div>
                <ul class="main-categories">
                    <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
                                class="lnr lnr-arrow-right"></span>Mannen<span class="number">(53)</span></a>
                        <ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
                            <li class="main-nav-list child"><a href="#">Elektrische fietsen<span class="number">(13)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Stadsfietsen<span class="number">(09)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Sportieve fietsen<span class="number">(17)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Speed pedelecs<span class="number">(01)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Mountainbikes<span class="number">(11)</span></a></li>
                        </ul>
                    </li>

                    <li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
                                class="lnr lnr-arrow-right"></span>Vrouwen<span class="number">(53)</span></a>
                        <ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
                            <li class="main-nav-list child"><a href="#">Elektrische fietsen<span class="number">(13)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Stadsfietsen<span class="number">(09)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Sportieve fietsen<span class="number">(17)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Speed pedelecs<span class="number">(01)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Mountainbikes<span class="number">(11)</span></a></li>
                        </ul>
                    </li>
                    <li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span
                                class="lnr lnr-arrow-right"></span>Kinderen<span class="number">(53)</span></a>
                        <ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
                            <li class="main-nav-list child"><a href="#">Loopfiets<span class="number">(13)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Driewieler<span class="number">(09)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Bakfiets<span class="number">(17)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Jongensfiets<span class="number">(01)</span></a></li>
                            <li class="main-nav-list child"><a href="#">Meisjesfiets<span class="number">(11)</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="sidebar-filter mt-50">
                <div class="top-filter-head">Productfilters</div>
                <div class="common-filter">
                    <div class="head">Merken</div>
                    <form action="#">
                        <ul>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="koga" name="brand"><label for="koga">Koga<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="gazelle" name="brand"><label for="gazelle">Gazelle<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="cortina" name="brand"><label for="cortina">Cortina<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="giant" name="brand"><label for="giant">Giant<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="sparta" name="brand"><label for="sparta">Sparta<span>(19)</span></label></li>
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Kleur</div>
                    <form action="#">
                        <ul>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="zwart" name="color"><label for="zwart">Zwart<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="wit" name="color"><label for="wit">Wit<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="blauw" name="color"><label for="blauw">Blauw<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="rood" name="color"><label for="rood">Rood<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="roze" name="color"><label for="roze">Roze<span>(19)</span></label></li>
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Prijs</div>
                    <div class="price-range-area">
                        <div id="price-range"></div>
                        <div class="value-wrapper d-flex">
                            <div class="price">Prijs:</div>
                            <span>€</span>
                            <div id="lower-value"></div>
                            <div class="tot">tot</div>
                            <span>€</span>
                            <div id="upper-value"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Standaard sorteren</option>
                        <option value="1">Standaard sorteren</option>
                        <option value="1">Standaard sorteren</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <!-- Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <?php
                    getPro();
                    ?>
                </div>
            </section>

            <!-- Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

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

<!-- Modal Quick Product View -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container relative">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="product-quick-view">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="quick-view-carousel">
                            <div class="item" style="background: url(img/organic-food/q1.jpg);">

                            </div>
                            <div class="item" style="background: url(img/organic-food/q1.jpg);">

                            </div>
                            <div class="item" style="background: url(img/organic-food/q1.jpg);">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quick-view-content">
                            <div class="top">
                                <h3 class="head">Mill Oil 1000W Heater, White</h3>
                                <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">€149.99</span></div>
                                <div class="category">Category: <span>Household</span></div>
                                <div class="available">Availibility: <span>In Stock</span></div>
                            </div>
                            <div class="middle">
                                <p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are
                                    looking for something that can make your interior look awesome, and at the same time give you the pleasant
                                    warm feeling during the winter.</p>
                                <a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
                            </div>
                            <div class="bottom">
                                <div class="color-picker d-flex align-items-center">Color:
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                    <span class="single-pick"></span>
                                </div>
                                <div class="quantity-container d-flex align-items-center mt-15">
                                    Quantity:
                                    <input type="text" class="quantity-amount ml-15" value="1" />
                                    <div class="arrow-btn d-inline-flex flex-column">
                                        <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                                        <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                                    </div>

                                </div>
                                <div class="d-flex mt-20">
                                    <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                                    <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



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
