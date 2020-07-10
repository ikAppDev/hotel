<?php
      $pageTitel = 'Index';
session_start();
if (isset($_SESSION['user'])) {

	//headre location is a herf you may go after the rejestraion
       	header('Location: admin_page.php');
}
	include'init.php';


	#chek if the method is POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	
	 {
		#put the information that cames from the form into varibals
       $username   = $_POST['user'];
       $password   = $_POST['pass'];
       $hashpass   = sha1($password);

       #chec if the user existe in data base
       #prepare is to make som calculation befor you enter the database 'more scurity'
       $stmt = $conn->prepare("SELECT 
                                     id, user, password 
                              FROM   
                                    admin 
                              WHERE 
                                    user= ? 
                              AND 
                                    password = ? 
                              ");
       
       #excute to start executing after prepare
       $stmt->execute(array($username, $hashpass));

       #fetch mean show it to me in arabic 'jalb'
       $row =$stmt->fetch();
       
       #row count is giving you all the rows that it found after the execution of the request
       $count= $stmt->rowCount();

       //if count > 0 ==> the informations existe in th DB
       if ($count > 0) {

       	//regestry the session of the user
       	$_SESSION['user'] = $username;

            //regestry session ID
            $_SESSION['id'] = $row['id'];

       	//headre location is a herf you may go after the rejestraion
       	header('Location: admin_page.php');

       	//exit to dont stay in requestinng 'stacOverFlow'
       	exit();
       }
	}
  ?>
<form class="login" method="POST"action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<h3 class="Admn-Lo text-center">Admin Login</h3>
	<input class="form-control " type="text" name="user" placeholder="Username" autocomplete="off">
	<input class="form-control " type="password" name="pass" placeholder="password" autocomplete="off">
	<input class="btn btn-primary btn-block btn_login" type="submit" value="Login">
</form>
<?php
	include $tpl . 'footer.php';
  ?>