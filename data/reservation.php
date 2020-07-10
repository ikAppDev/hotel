<?php include'init.php';?>
<div class="top ">
</div>
<div class="overly">
	<div class="">
		<nav class="nav row">
			<div class="logo ">LUX HOTEL</div>
			<nav class="col-10 navbar navbar-expand-lg navbar-dark bg-dark">
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="navbar-nav ml-auto">
			      		<li class="nav-item active">
			        		<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="index.php#about">About Us</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="contact.php">Contact</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="#Rooms">Rooms</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="#conferences.php">conferences Room</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link btn bttn" href="reservation.php">
			        			Resevation
			        		</a>
			      		</li>
			    	</ul>
			  	</div>
			</nav>
		</nav>
		<div class="home_content text-center">
			<div class="home_title">A Luxury Stay</div>
			<div class="sprach">Get your Roome <span class="now"> NOW!</span></div>
			<div class="booking_form_container">
				<form action="#" class="booking_form" id="booking_form">
					<div class="form-row">
						<div class="form-group col-6">
							<label> Full name</label>
							<input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="full name" required="required">
						</div>
						<div class="form-group col-6">
							<label> Email</label>
							<input type="email" class="datepicker booking_input booking_input_a booking_in" placeholder="exemple@exempl.com" required="required">
						</div>
					</div>
					<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
						<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div><label>Check in</label><input type="date" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
							<div><label>Check out</label><input type="date" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
							<div><label>You are with:</label><select  class="booking_input booking_input_b" required="required">
								<option>children</option>
								<option>without</option>
							</select></div>
							<div><label>Chouse room:</label><select type="number" class="booking_input booking_input_b" required="required">
								<option>Induvidal</option>
								<option>Family</option>
								<option>Lux</option>
								<option>Normal</option>
							</select></div>
						</div>
						<div><label> regester</label>
							<button class="booking_button trans_200">Reserve Now</button></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<h2 id="Rooms" class="h2 text-center" style="margin: 20px auto;">Gallery</h2>
	<div class="row">
		<div class="col-sm gal-img">
			<img src="../layout/images/details_2.jpg">
		</div>
		<div class="col-sm gal-img">
			<img src="../layout/images/about.jpg">
		</div>
		<div class="col-sm gal-img">
			<img src="../layout/images/img_5.jpg">
		</div>
	</div>
	<div class="row">
		<div class="col-sm gal-img">
			<img src="../layout/images/gallery_3.jpg">
		</div>
		<div class="col-sm gal-img">
			<img src="../layout/images/index_blog_1.jpg">
		</div>
		<div class="col-sm gal-img">
			<img src="../layout/images/img_6.jpg">
		</div>
	</div>
</div>




<?php 
	include $tpl . 'footer.php';?>