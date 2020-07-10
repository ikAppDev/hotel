<?php
//using this methode makes you allways conected and you need to log out for an other user
		$pageTitel = 'Admin_Page';
//this function descrabe the name of the page
session_start();

	if (isset($_SESSION['user'])) {

		include'init.php';

		$do =isset($_GET['do']) ? $_GET['do'] :	'Manage';
if ( $do == 'Manage')# Manage page 
		// $quiryis for make you see members that not aprouved yet page
		 {

		?>
    <div class="container">
		<div class="table-responsive">
			<h1 class="edit-head text-center">List Of Reservations </h1>
        	<table class="table text-center table-bordered ">
				<tr  class="head-table">
					<td >First Nname</td>
					<td>Last Name</td>
					<td>E-mail</td>
					<td>Check_in date</td>
					<td>Check_out date</td>
					<td>Had choosen a</td>
					<td></td>
				</tr>
				<?php 
				$stmt  = $conn->prepare(" SELECT * FROM  reservation "); 
				$stmt->execute();
				//put this informaition into var $rows
				$rows = $stmt->fetchAll();
				foreach ($rows as $row) {
					echo"<tr class='tabl_content'>";
					echo"<td name='f_name'>" . $row['f_name'] . "</td>";
					echo"<td name='l_name'>" . $row['l_name'] . "</td>";
					echo"<td name='email'>" . $row['email'] . "</td>";
					echo"<td name='enter_date'>" . $row['enter_date'] . "</td>";
					echo"<td name='out_date'>" . $row['out_date'] . "</td>";
					echo"<td name='setuation'>" . $row['setuation'] . " Room</td>";
				  echo"<td>" . '
				  <a href="admin_page.php?do=Edit&id=' . $row['id'] . '" class="success">Edit</a>
               	  <a href="admin_page.php?do=Delete&id=' . $row['id'] . '" class="danger confirme">Delete</a>';}
				
				echo "</td></tr>";
					?>
		    </table>
		</div>
	</div>

		<?php
		//end dashbord
		include  $tpl . 'footer.php';
	}
	elseif ($do == 'Delete') {
 		# Delete member page...
		echo "<h1 class='text-center edit-head'>
									Delete Member
								 </h1>";
		echo"<div class='container'>";
		//echo "heloo" . $_GET['userID'];
		$user = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
		$chek = checkItem('id', 'reservation', $user);
		//intval means integer value
		 if ($chek > 0) {
		 	$stmt = $conn->prepare("DELETE FROM reservation WHERE id =:zuser ");
		 	$stmt->bindParam(":zuser", $user);
		 	$stmt->execute();
		 		
		 	$theMasg = '<div class="alert alert-success col text-center">' .  $stmt->rowCount() . ' recorde sucsessf </div>' ;
					rdirectFun($theMasg, 'back', 1); 
		 }
	 else{
	  $theMasg = 'sorry you can\' t see this page !';
		rdirectFun($theMasg, 'back', 1);
	 } 	
	 echo"</div>";
			 }
elseif ($do == 'Edit') { # Edit_profile page

		//echo "heloo" . $_GET['userID'];
	$user = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
		//intval means integer value
		 $stmt = $conn->prepare("SELECT * FROM    reservation  WHERE  id   = ?");

				 #excute to start executing after prepare
				 $stmt->execute(array($user));

				 #fetch mean show it to me in arabic 'jalb'
				 $row =$stmt->fetch();
				 
				 #row count is giving you all the rows that it found after the execution of the request
				 $count= $stmt->rowCount();
				 if ($stmt->rowCount() > 0) {
				
			 ?>
				
	 <h1 class="text-center edit-head">Edit Members</h1>
	 <div class="container">
		<form class="form-horizontal " action="?do=Update" method="POST">
			<input type="hidden" name="id" value="<?php echo $user ?>">
			<!-- start user name filde-->
			<div class="form-group  row">
				<label class=" col-3 control-label">Username</label>
				<div class="col-sm-8 col-md-6 ">
					<input required="required" value="<?php echo $row['f_name'] ?>" type="text" name="f_name"  class="form-control" autocomplete="off"><br>
					<input required="required" value="<?php echo $row['l_name'] ?>" type="text" name="l_name"  class="form-control" autocomplete="off">
				</div>
			</div>
			<!-- end user name filde-->
			<!-- start password filde-->
			<div class="form-group  row">
								<label class=" col-3 control-label">email</label>
								<div class="col-sm-8 col-md-6 ">
									<input required="required" value="<?php echo $row['email'] ?>" type="email" name="email"  class="form-control" autocomplete="off">
								</div>
							</div>
			<!-- end Password filde-->
			<!-- start email filde-->
			<!-- end email filde-->
				<div class="form-group row">
					<label class="col-3 control-label">Enter_date</label>
					<div class="col-sm-8 col-md-6">
					<input required="required" value="<?php echo $row['enter_date'] ?>" type="date" name="enter_date" class="form-control" autocomplete="off">
					</div>
				</div>
				<div class="form-group row">
				<label class="col-3 control-label">Out_date</label>
				<div class="col-sm-8 col-md-6">
					<input required="required" value="<?php echo $row['out_date'] ?>" type="date" name="out_date" class="form-control" autocomplete="off">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-3 control-label">Setuation</label>
				<div class="col-sm-8 col-md-6">
					<input required="required" value="<?php echo $row['setuation'] ?>" type="text" name="setuation" class="form-control" autocomplete="off">
				</div>
			</div>
			<!-- end Full name filde-->
			<!-- start save-btn filde-->
			<div class="form-group row">
				<label class="col-3 control-label"></label>
				<div class="col">
					<input type="submit" value="save" class="btn btn-primary" >
					<!-- autocomplete to do nt remember my pass word -->
				</div>
			</div>
							<!-- end save-btn filde-->
						</form>
					 </div>
			<?php }
			else{?>

				<h3 class="text-center">
				<?php $theMasg = "There is somthing wrrong !!!!!";
				rdirectFun($theMasg, 0);
				?>
				</h3>
				<?php
			}

			}
						elseif ($do == 'Update') { // Update page
								echo "<h1 class='text-center edit-head'>
							Update Member
						 </h1>";

						 if ($_SERVER['REQUEST_METHOD'] == 'POST'){

							//get the variabals from the form 
							$pass      = '' ;
							$form_Err  =array();

							$enter_date = $_POST['enter_date'] ;
							$id = $_POST['id'] ;
							$out_date = $_POST['out_date'] ;
							$f_name    = $_POST['f_name'] ;
							$l_name  = $_POST['l_name'] ;
							$setuation  = $_POST['setuation'] ;

							//password tric
							$email =$_POST['email'] ;
							echo"<div class='container'>";

							if (empty($enter_date)) {
								$form_Err[] = 'enter_date can\' t be empty';
							}

							if (empty($f_name)) {
								$form_Err[] = 'full name can\' t be empty';	
							}
							if (empty($l_name)) {
								$form_Err[] = 'full name can\' t be empty';	
							}

							if (empty($email)) {
								$form_Err[] = 'email can\' t be empty';	
							}

							
							foreach ($form_Err as $err) {

								echo '<div class="alert alert-danger col-8">' . $err . '</div>';

							}

							//chec if ther is no err
							if (empty($form_Err)) {
								
							//Update data base with this new information  
	$stmt = $conn->prepare("UPDATE reservation SET  email = ?, f_name = ?, l_name = ?, enter_date = ?, out_date = ?, setuation = ? WHERE id = ?");
	$stmt->execute(array( $email, $f_name, $l_name, $enter_date, $out_date, $setuation, $id));

							$theMasg = '<div class="alert alert-success col text-center">' .  $stmt->rowCount() . ' recorde sucsessf </div>' ;
							rdirectFun($theMasg); 
							}
						 }
						 else {
							?>
					<h3 class="text-center">
					<?php $theMasg = 'sorry you can\' t see this page !';
					rdirectFun($theMasg, 'back', 1);?>
					</h3>
				</div>
					<?php
							
						 }
				
			}
		
}
	else{
		header('Location:index.php');
		exit();
	}
  ?>







  
