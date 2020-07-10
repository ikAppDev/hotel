<?php 
	include'init.php';
		
	    $email     	 = $_POST['email'] ;
		$f_name      = $_POST['f_name'] ;  
		$l_name      = $_POST['l_name'] ; 
		$enter_date  = $_POST['enter_date'] ;
		$out_date    = $_POST['out_date'] ;
		$setuation   = $_POST['setuation'] ;
		
	 ?>
 <div class="container">
	<form action="admin.php" method="post" class="reservation-form">
		<div class="table-responsive">
        	<table class="table text-center table-bordered ">
				<tr  class="head-table">
					<td >First Nname</td>
					<td>Last Name</td>
					<td>E-mail</td>
					<td>Check_in date</td>
					<td>Check_out date</td>
					<td>You are withe:</td>
					<td>rooms we have</td>
				</tr>
				<?php 
				$stmt  = $conn->prepare(" SELECT * FROM  reservation WHERE email= '$email' "); 
				$stmt->execute();
				//put this informaition into var $rows
				$rows = $stmt->fetchAll();
				foreach ($rows as $row) {
					echo"<tr>";
					echo"<td name='email'>" . $row['email'] . "</td>";
					echo"<td name='f_name'>" . $row['f_name'] . "</td>";
					echo"<td name='l_name'>" . $row['l_name'] . "</td>";
					echo"<td name='enter_date'>" . $row['enter_date'] . "</td>";
					echo"<td name='out_date'>" . $row['out_date'] . "</td>";
					echo"<td name='setuation'>" . $row['setuation'] . "</td>";}
				$stmt  = $conn->prepare(" SELECT * FROM  list_of_rooms WHERE groupID != 1  AND setuation = '$setuation' "); 
				$stmt->execute();
				//put this informaition into var $rows
				$rows = $stmt->fetchAll();
				echo"<td> <select name='room_number'>";
				foreach ($rows as $row) {
					echo"<option value=''> " . $row['nomber'] . "</option>";
				}
				echo "</select></td>
					</tr>";
					?>
		    </table>
		    <button type="submit" class="btn btn-warning">send</button>
		</div>
	</form>
</div>
 <?php
	include $tpl . 'footer.php';
  ?>