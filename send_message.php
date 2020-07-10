<?php 
include'init.php';

		$form_Err    = array();
		$m_email     = $_POST["m_email"] ;
		$full_name   = $_POST["full_name"] ;
		$phone     	 = $_POST["phone"] ;
		$message     = $_POST["message"] ;

		if (empty($m_email)) {
				$form_Err[] = 'email can\' t be empty';
							}
		if (empty($full_name)) {
				$form_Err[] = 'full_name can\' t be empty';
							}
		if (empty($phone)) {
				$form_Err[] = 'phone can\' t be empty';
							}
		if (empty($message)) {
				$form_Err[] = 'email can\' t be empty';
			}

		foreach ($form_Err as $err) {	
					$theMasg = '<div class="alert alert-danger col">' . $err . '</div>';
								rdirectFun($theMasg, 'back', 4);
							} 
        $stmt =$conn->prepare("INSERT INTO  messages( email, full_name, phone, message) VALUES('$m_email','$full_name','$phone','$message') "); 
		$stmt->execute();
        $theMasg = '<div class="alert alert-success col text-center">' .  $stmt->rowCount() . ' recorde sucsessf </div>';
		rdirectFun($theMasg, 'back', 10);

include $tpl . 'footer.php';

 ?>