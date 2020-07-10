<?php 
		include'init.php';
		
		$form_Err    = array();
		$email     	 = $_POST["email"] ;
		$f_name      = $_POST["f_name"] ;  
		$l_name      = $_POST["l_name"] ; 
		$enter_date  = $_POST["enter_date"] ;
		$out_date    = $_POST["out_date"] ;
		$setuation   = $_POST["setuation"] ;
		
		$total       = countItem('setuation', 'reservation', $setuation) ;

		if ($total >= 10 ){
			$form_Err[] = 'Sorry all rooms in this format have been reserved :< !';
		}
		if (empty($email)) {
				$form_Err[] = 'message can\' t be empty';
							}
		if (empty($f_name)) {
				$form_Err[] = 'f_name can\' t be empty';
							}
		if (empty($l_name)) {
				$form_Err[] = 'l_name can\' t be empty';
							}
		if (empty($enter_date)) {
				$form_Err[] = 'enter_date can\' t be empty';
							}
		if (empty($out_date)) {
				$form_Err[] = 'out_date can\' t be empty';
							}
		if ($enter_date > $out_date) {
				$form_Err[] = 'enter_date must be before out_date  ';
							}
		foreach ($form_Err as $err) {	
					$theMasg = '<div class="alert alert-danger col">' . $err . '</div>';
								rdirectFun($theMasg, 'back', 4);
							} 

		$stmt =$conn->prepare("INSERT INTO  reservation( email, f_name, l_name, enter_date, out_date, setuation) VALUES('$email','$f_name','$l_name','$enter_date','$out_date','$setuation') "); 
		$stmt->execute();
        $theMasg = '<div class="alert alert-success col text-center">' .  $stmt->rowCount() . 'You Have A Sucsessfull Reservation </div>';
		rdirectFun($theMasg, 'back', 4);


					
	include $tpl . 'footer.php';
  ?>