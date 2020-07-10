<?php 
	$pageTitel = 'Reservation';
	include'init.php';

 ?>
 <div class="site-section bg-light">
      <div class="container">
        <div class="row-expand-lg">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Colection Of Rooms </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
	            <a  class="d-block mb-0 thumbnail">
	            	<img src="<?php echo $img; ?>img_1.jpg" alt="Image" class="img-fluid">
	            </a>
	            <div class="hotel-room-body">
	            	<h3 class="heading mb-0">Family </h3>
	            	<strong class="price">$350.00 / per night</strong>
			    </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
	            <a  class="d-block mb-0 thumbnail">
	            	<img src="<?php echo $img; ?>img_3.jpg" alt="Image" class="img-fluid">
	            </a>
	            <div class="hotel-room-body">
	            	<h3 class="heading mb-0">Individual</h3>
	            	<strong class="price">$250.00 / per night</strong>
			    </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
	            <a  class="d-block mb-0 thumbnail">
	            	<img src="<?php echo $img; ?>img_2.jpg" alt="Image" class="img-fluid">
	            </a>
	            <div class="hotel-room-body">
	            	<h3 class="heading mb-0">Standard</h3>
	            	<strong class="price">$200.00 / per night</strong>
			    </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
	            <a  class="d-block mb-0 thumbnail">
	            	<img src="<?php echo $img; ?>img_5.jpg" alt="Image" class="img-fluid">
	            </a>
	            <div class="hotel-room-body">
	            	<h3 class="heading mb-0">Deluxe Room</h3>
	            	<strong class="price">$500.00 / per night</strong>
			    </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
	            <a  class="d-block mb-0 thumbnail">
	            	<img src="<?php echo $img; ?>img_6.jpg" alt="Image" class="img-fluid">
	            </a>
	            <div class="hotel-room-body">
	            	<h3 class="heading mb-0">Deluxe Room</h3>
	            	<strong class="price">$500.00 / per night</strong>
			    </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
	            <a  class="d-block mb-0 thumbnail">
	            	<img src="<?php echo $img; ?>img_4.jpg" alt="Image" class="img-fluid">
	            </a>
	            <div class="hotel-room-body">
	            	<h3 class="heading mb-0">Standard</h3>
	            	<strong class="price">$200.00 / per night</strong>
			    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Get Your Room Now! </h2>
          </div>
        </div>
 <section class="container">
 	<form action="insert.php" method="post" class="reservation-form">
		<div class="form-row">
		    <div class="form-group col-md">
		      <label for="F-name">First Nname</label>
		      <input type="text" class="form-control" id="F-name" placeholder="First Nname" name="f_name">
		    </div>
		    <div class="form-group col-md">
		      <label for="L-name">Last Name</label>
		      <input type="text" class="form-control" id="L-name" placeholder="Last Name" name="l_name">
		    </div>
		    <div class="form-group col-md">
		      <label for="email">E-mail</label>
		      <input type="email" class="form-control" id="email" placeholder="exempel@exempel.com" name="email">
		    </div>
		</div>
	    <div class="form-row">
			<div class="form-group col-md">
			    <label for="enter-date">Check_in date</label>
			    <input type="date" class="form-control" id="enter-date" name="enter_date">
		  	</div>
		  	<div class="form-group col-md">
			    <label for="out-date">Check_out date</label>
			    <input type="date" class="form-control" id="out-date" name="out_date">
		  	</div>
	  	</div>
		<div class="form-group col-md-4">
		    <label for="Setuation">You are withe:</label>
		    <select id="Setuation" class="form-control" name="setuation">
		        <option value="individual" selected>Individual</option>
		        <option value="family">Family</option>
		        <option value="standard">Standard</option>
		        <option value="deluxe">Deluxe Room</option>
		    </select>
		</div>
		<button type="submit" class="btn btn-warning">search</button>
	</form>
</section>

 <?php
	include $tpl . 'footer.php';
  ?>