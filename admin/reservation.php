<?php 
	$pageTitel = 'Reservation';
	session_start();
	if (isset($_SESSION['user'])) {

	//headre location is a herf you may go after the rejestraion
	include'init.php';
 ?>
    <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Add New Reservation </h2>
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
		    <label for="Setuation">He Is Withe:</label>
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
	}
else{
    header('Location:index.php');
    exit();
  }
  ?>