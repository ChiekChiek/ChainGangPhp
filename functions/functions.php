<?php
/**
 * Created by PhpStorm.
 * User: J
 * Date: 6-6-2019
 * Time: 18:23
 */


function getPro(){
    if (!isset($_GET['cat'])) {

        if (!isset($_GET['brand'])) {

            global $conn;

            $get_pro = "select * from products order by RAND() LIMIT 0,6";
            $run_pro = mysqli_query($conn, $get_pro);


            while ($row_pro = mysqli_fetch_array($run_pro)) {


                $product_id = $row_pro['prd_id'];
                $product_cat = $row_pro['prd_cat'];
                $product_merk = $row_pro['prd_merk'];
                $product_titel = $row_pro['prd_titel'];
                $product_prijs = $row_pro['prd_prijs'];
                $product_img1 = $row_pro['prd_img1'];


                echo "
                    <!-- Product1 -->
                    <div class='col-lg-4 col-md-6'>
                        <div class='single-product'>
                            <img class='img-fluid' src='$product_img1' alt=''>
                            <div class='product-details'>
                                <h6>$product_titel</h6>
                                <div class='price'>
                                    <h6>€$product_prijs,-</h6>
                                </div>
                                <div class='prd-bottom'>
                                    <a href='productgegevens.php' class='social-info'>
                                        <span class='ti-bag'></span>
                                        <p class='hover-text'>Voeg toe</p>
                                    </a>
                                    <a href='productgegevens.php' class='social-info'>
                                        <span class='lnr lnr-heart'></span>
                                        <p class='hover-text'>Verlanglijst</p>
                                    </a>
                                    <a href='productgegevens.php' class='social-info'>
                                        <span class='lnr lnr-sync'></span>
                                        <p class='hover-text'>Vergelijken</p>
                                    </a>
                                    <a href='productgegevens.php?pro_id=$product_id' class='social-info'>
                                        <span class='lnr lnr-menu'></span>
                                        <p class='hover-text''>Bekijk meer</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                            ";
            }
        }
    }
}




function details(){
    global $conn;
    if(isset($_GET['pro_id'])){

        $prod_id = $_GET['pro_id'];

        $sql = "SELECT * FROM products WHERE prd_id = '$prod_id'";
        $run_pro = mysqli_query($conn,$sql);




        while($row_pro = mysqli_fetch_array($run_pro)){

            $product_cat = $row_pro['prd_cat'];
            $product__titel = $row_pro['prd_titel'];
            $product_prijs = $row_pro['prd_prijs'];
            $product_desc = $row_pro['prd_besc'];
            $product_img1 = $row_pro['prd_img1'];
            $product_img2 = $row_pro['prd_img2'];
            $product_img3 = $row_pro['prd_img3'];
            $product_img4 = $row_pro['prd_img4'];
            $product_zoekterm = $row_pro['prd_zoekterm'];
            $product_framemateriaal = $row_pro['prd_framemateriaal'];
            $product_versnellingen = $row_pro['prd_versnellingen'];
            $product_voorvork = $row_pro['prd_voorvork'];
            $product_schakelgroep = $row_pro['prd_schakelgroep'];
            $product_shifters = $row_pro['prd_shifters'];
            $product_banden = $row_pro['prd_banden'];
            $product_derailleurachter = $row_pro['prd_derailleurachter'];
            $product_voorderailleur = $row_pro['prd_voorderailleur'];
            $product_remsysteem = $row_pro['prd_remsysteem'];
            $product_crankstel = $row_pro['prd_crankstel'];
            $product_cranksteltype = $row_pro['prd_cranksteltype'];
            $product_cassette = $row_pro['prd_cassette'];
            $product_wielset = $row_pro['prd_wielset'];
            $product_zadelpen = $row_pro['prd_zadelpen'];
            $product_zadel = $row_pro['prd_zadel'];
            $product_stuur = $row_pro['prd_stuur'];
            $product_stuurpen = $row_pro['prd_stuurpen'];
            $product_modeljaar = $row_pro['prd_modeljaar'];
            $product_typerem = $row_pro['prd_typerem'];
            $product_geometrie = $row_pro['prd_geometrie'];
            $product_gewicht = $row_pro['prd_gewicht'];
            $product_framegarantie = $row_pro['prd_framegarantie'];
            $product_kleur = $row_pro['prd_kleur'];
            $product_aanndrijving = $row_pro['prd_aandrijving'];
            $product_motorpositie = $row_pro['prd_motorpositie'];
            $product_accupositie = $row_pro['prd_accupositie'];
            $product_versnellingssysteem = $row_pro['prd_versnellingssysteem'];
            $product_slot = $row_pro['prd_slot'];
            $product_merkmotor = $row_pro['prd_merkmotor'];
            $product_kinderzit = $row_pro['prd_kinderzit'];
            echo"
                  
                 
	<!--================ Product =================-->
	<div class='product_image_area'>
		<div class='container'>
			<div class='row s_product_inner'>
				<div class='col-lg-6'>
					<div class='s_Product_carousel'>
						<div class='single-prd-item'>
							<img class='img-fluid' src='$product_img1' alt=''>
						</div>
						<div class='single-prd-item'>
							<img class='img-fluid' src='$product_img2' alt=''>
						</div>
						<div class='single-prd-item'>
							<img class='img-fluid' src='$product_img3' alt=''>
						</div>
						<div class='single-prd-item'>
							<img class='img-fluid' src='$product_img4' alt=''>
						</div>
					</div>
				</div>
				<div class='col-lg-5 offset-lg-1'>
					<div class='s_product_text'>
						<h3>$product__titel</h3>
						<h2>€ $product_prijs,-</h2>
						<ul class='list'>
							<li><a class='active' href='#'><span>Categorie</span> : $product_cat</a></li>
							<li><a href='#'><span>Beschikbaar</span> : Op voorraad</a></li>
						</ul>
						<div class='product_count'>
							<label for='qty'>Aantal:</label>
							<input type='text' name='qty' id='sst' maxlength='12' value='1' title='Quantity:' class='input-text qty'>
							<button onclick='var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;'
							 class='increase items-count' type='button'><i class='lnr lnr-chevron-up'></i></button>
							<button onclick='var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;'
							 class='reduced items-count' type='button'><i class='lnr lnr-chevron-down'></i></button>
						</div>
						<div class='card_area d-flex align-items-center'>
							<a class='primary-btn' href='#'>Voeg toe aan winkelwagen</a>
							<a class='icon_btn' href='#'><i class='lnr lnr lnr-diamond'></i></a>
							<a class='icon_btn' href='#'><i class='lnr lnr lnr-heart'></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--================ Productbeschrijving =================-->
	<section class='product_description_area'>
		<div class='container'>
			<ul class='nav nav-tabs' id='myTab' role='tablist'>
				<li class='nav-item'>
					<a class='nav-link' id='home-tab' data-toggle='tab' href='#home' role='tab' aria-controls='home' aria-selected='true'>Omschrijving</a>
				</li>
				<li class='nav-item'>
					<a class='nav-link' id='profile-tab' data-toggle='tab' href='#profile' role='tab' aria-controls='profile'
					 aria-selected='false'>Specificatie</a>
				</li>
				<li class='nav-item'>
					<a class='nav-link' id='contact-tab' data-toggle='tab' href='#contact' role='tab' aria-controls='contact'
					 aria-selected='false'>Comments</a>
				</li>
				<li class='nav-item'>
					<a class='nav-link active' id='review-tab' data-toggle='tab' href='#review' role='tab' aria-controls='review'
					 aria-selected='false'>Beoordelingen</a>
				</li>
			</ul>
			<div class='tab-content' id='myTabContent'>
				<div class='tab-pane fade' id='home' role='tabpanel' aria-labelledby='home-tab'>
				<p>
				$product_desc
				</p>
				</div>
				<div class='tab-pane fade' id='profile' role='tabpanel' aria-labelledby='profile-tab'>
					<div class='table-responsive'>
						<table class='table'>
							<tbody>
								<tr>
									<td>
										<h5>Frame materiaal</h5>
									</td>
									<td>
										<h5>$product_framemateriaal</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Aantal versnellingen</h5>
									</td>
									<td>
										<h5>$product_versnellingen</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Voorvork</h5>
									</td>
									<td>
										<h5>$product_voorvork</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Schakelgroep</h5>
									</td>
									<td>
										<h5>$product_schakelgroep</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Shifters</h5>
									</td>
									<td>
										<h5>$product_shifters</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Banden</h5>
									</td>
									<td>
										<h5>$product_banden</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Derailleur achter</h5>
									</td>
									<td>
										<h5>$product_derailleurachter</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Voorderailleur</h5>
									</td>
									<td>
										<h5>$product_voorderailleur</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Remsysteem</h5>
									</td>
									<td>
										<h5>$product_remsysteem</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Crankstel</h5>
									</td>
									<td>
										<h5>$product_crankstel</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Crankstel type</h5>
									</td>
									<td>
										<h5>$product_cranksteltype</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Cassette</h5>
									</td>
									<td>
										<h5>$product_cassette</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Wielset</h5>
									</td>
									<td>
										<h5>$product_wielset</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Zadelpen</h5>
									</td>
									<td>
										<h5>$product_zadelpen</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Zadel</h5>
									</td>
									<td>
										<h5>$product_zadel</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Stuur</h5>
									</td>
									<td>
										<h5>$product_stuur</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Stuurpen</h5>
									</td>
									<td>
										<h5>$product_stuurpen</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Modeljaar</h5>
									</td>
									<td>
										<h5>$product_modeljaar</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Type rem</h5>
									</td>
									<td>
										<h5>$product_typerem</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Geometrie</h5>
									</td>
									<td>
										<h5>$product_geometrie</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Gewicht</h5>
									</td>
									<td>
										<h5>$product_gewicht</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Framegarantie</h5>
									</td>
									<td>
										<h5>$product_framegarantie</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Kleur</h5>
									</td>
									<td>
										<h5>$product_kleur</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Aandrijving</h5>
									</td>
									<td>
										<h5>$product_aanndrijving</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Motor positie</h5>
									</td>
									<td>
										<h5>$product_motorpositie</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Accupositie</h5>
									</td>
									<td>
										<h5>$product_accupositie</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Versnellingssysteem</h5>
									</td>
									<td>
										<h5>$product_versnellingssysteem</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Slot</h5>
									</td>
									<td>
										<h5>$product_slot</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Merk motor</h5>
									</td>
									<td>
										<h5>$product_merkmotor</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Kinderzitje mogelijk?</h5>
									</td>
									<td>
										<h5>$product_kinderzit</h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class='tab-pane fade' id='contact' role='tabpanel' aria-labelledby='contact-tab'>
					<div class='row'>
						<div class='col-lg-6'>
							<div class='comment_list'>
								<div class='review_item'>
									<div class='media'>
										<div class='d-flex'>
											<img src='img/product/review-1.png' alt=''>
										</div>
										<div class='media-body'>
											<h4>Blake Ruiz</h4>
											<h5>12 Feb, 2019 om 12:00 uur</h5>
											<a class='reply_btn' href='#'>Antwoord</a>
										</div>
									</div>
									<p>Commentaar#1<p>
								</div>
								<div class='review_item'>
									<div class='media'>
										<div class='d-flex'>
											<img src='img/product/review-2.png' alt=''>
										</div>
										<div class='media-body'>
											<h4>Blake Ruiz</h4>
											<h5>12 Feb, 2019 om 12:00 uur</h5>
											<a class='reply_btn' href='#'>Antwoord</a>
										</div>
									</div>
									<p>Commentaar#2</p>
								</div>
								<div class='review_item'>
									<div class='media'>
										<div class='d-flex'>
											<img src='img/product/review-3.png' alt=''>
										</div>
										<div class='media-body'>
											<h4>Blake Ruiz</h4>
											<h5>12 Feb, 2019 om 12:00 uur</h5>
											<a class='reply_btn' href='#'>Antwoord</a>
										</div>
									</div>
									<p>Commentaar#3</p>
								</div>
							</div>
						</div>
						<div class='col-lg-6'>
							<div class='review_box'>
								<h4>Plaats commentaar</h4>
								<form class='row contact_form' action='contact_process.php' method='post' id='contactForm' novalidate='novalidate'>
									<div class='col-md-12'>
										<div class='form-group'>
											<input type='text' class='form-control' id='name' name='name' placeholder='Je volledige naam'>
										</div>
									</div>
									<div class='col-md-12'>
										<div class='form-group'>
											<input type='email' class='form-control' id='email' name='email' placeholder='Email Address'>
										</div>
									</div>
									<div class='col-md-12'>
										<div class='form-group'>
											<input type='text' class='form-control' id='number' name='number' placeholder='Telefoonnummer'>
										</div>
									</div>
									<div class='col-md-12'>
										<div class='form-group'>
											<textarea class='form-control' name='Bericht' id='Bericht' rows='1' placeholder='Bericht'></textarea>
										</div>
									</div>
									<div class='col-md-12 text-right'>
										<button type='submit' value='submit' class='btn primary-btn'>Bevestig</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class='tab-pane fade show active' id='review' role='tabpanel' aria-labelledby='review-tab'>
					<div class='row'>
						<div class='col-lg-6'>
							<div class='row total_rate'>
								<div class='col-6'>
									<div class='box_total'>
										<h5>Gemiddelde</h5>
										<h4>5.0</h4>
										<h6>(03 Beoordelingen)</h6>
									</div>
								</div>
								<div class='col-6'>
									<div class='rating_list'>
										<h3>Gebaseerd op 3 Beoordelingen</h3>
										<ul class='list'>
											<li><a href='#'>5 Ster <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i
													 class='fa fa-star'></i><i class='fa fa-star'></i> 01</a></li>
											<li><a href='#'>4 Ster <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i
													 class='fa fa-star'></i><i class='fa fa-star'></i> 01</a></li>
											<li><a href='#'>3 Ster <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i
													 class='fa fa-star'></i><i class='fa fa-star'></i> 01</a></li>
											<li><a href='#'>2 Ster <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i
													 class='fa fa-star'></i><i class='fa fa-star'></i> 01</a></li>
											<li><a href='#'>1 Ster <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i
													 class='fa fa-star'></i><i class='fa fa-star'></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class='review_list'>
								<div class='review_item'>
									<div class='media'>
										<div class='d-flex'>
											<img src='img/product/review-1.png' alt=''>
										</div>
										<div class='media-body'>
											<h4>Blake Ruiz</h4>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									</div>
									<p>Recensie#1</p>
								</div>
								<div class='review_item'>
									<div class='media'>
										<div class='d-flex'>
											<img src='img/product/review-2.png' alt=''>
										</div>
										<div class='media-body'>
											<h4>Blake Ruiz</h4>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									</div>
									<p>Recensie#2</p>
								</div>
								<div class='review_item'>
									<div class='media'>
										<div class='d-flex'>
											<img src='img/product/review-3.png' alt=''>
										</div>
										<div class='media-body'>
											<h4>Blake Ruiz</h4>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									</div>
									<p>Recensie#3</p>
								</div>
							</div>
						</div>
						<div class='col-lg-6'>
							<div class='review_box'>
								<h4>Voeg een beoordeling toe</h4>
								<p>Jouw score:</p>
								<ul class='list'>
									<li><a href='#'><i class='fa fa-star'></i></a></li>
									<li><a href='#'><i class='fa fa-star'></i></a></li>
									<li><a href='#'><i class='fa fa-star'></i></a></li>
									<li><a href='#'><i class='fa fa-star'></i></a></li>
									<li><a href='#'><i class='fa fa-star'></i></a></li>
								</ul>
								<p>Uitstekend</p>
								<form class='row contact_form' action='contact_process.php' method='post' id='contactForm' novalidate='novalidate'>
									<div class='col-md-12'>
										<div class='form-group'>
											<input type='text' class='form-control' id='name' name='name' placeholder='Je volledige naam' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Je volledige naam''>
										</div>
									</div>
									<div class='col-md-12'>
										<div class='form-group'>
											<input type='email' class='form-control' id='email' name='email' placeholder='Email Address' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Email Address''>
										</div>
									</div>
									<div class='col-md-12'>
										<div class='form-group'>
											<input type='text' class='form-control' id='number' name='number' placeholder='Telefoonnummer' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Telefoonnummer''>
										</div>
									</div>
									<div class='col-md-12'>
										<div class='form-group'>
											<textarea class='form-control' name='Bericht' id='bericht' rows='1' placeholder='Beoordeling' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Beoordeling''></textarea></textarea>
										</div>
									</div>
									<div class='col-md-12 text-right'>
										<button type='submit' value='submit' class='primary-btn'>Bevestig</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
        ";
        }
    }
}