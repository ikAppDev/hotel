<?php 
   $pageTitel = 'Contact';
  include'init.php';
  session_start();

  if (isset($_SESSION['user'])) {
    $do =isset($_GET['do']) ? $_GET['do'] : 'Manage';
    if ( $do == 'Manage')# Manage page 
    // $quiryis for make you see members that not aprouved yet page
     {
 ?>
 <div class="container">
    <div class="table-responsive">
      <h1 class="edit-head text-center">List Of Messages </h1>
          <table class="table text-center table-bordered ">
        <tr  class="head-table">
          <td>Full Name </td>
          <td>E-mail</td>
          <td>Phone </td>
          <td>The Message</td>
        </tr>
        <?php 
        $stmt  = $conn->prepare(" SELECT * FROM  messages "); 
        $stmt->execute();
        //put this informaition into var $rows
        $rows = $stmt->fetchAll();
        foreach ($rows as $row) {
          echo"<tr class='tabl_content'>";
          echo"<td name='full_name'>" . $row['full_name'] . "</td>";
          echo"<td name='email'>" . $row['email'] . "</td>";
          echo"<td name='phone'>" . $row['phone'] . "</td>";
           echo"<td name='message'>" . $row['message'] . "</td>";
          echo"<td>" . '
                  <a href="contact.php?do=Delete&id=' . $row['id'] . '" class="danger confirme">Delete</a>';}
        
        echo "</td></tr>";
          ?>
        </table>
    </div>
  </div>
  
<?php
include $tpl . 'footer.php';
}
  elseif ($do == 'Delete') {
    # Delete member page...
    echo "<h1 class='text-center edit-head'>
                  Delete Member
                 </h1>";
    echo"<div class='container'>";
    //echo "heloo" . $_GET['userID'];
    $user = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
    $chek = checkItem('id', 'messages', $user);
    //intval means integer value
     if ($chek > 0) {
      $stmt = $conn->prepare("DELETE FROM messages WHERE id =:zuser ");
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
  }
else{
    header('Location:index.php');
    exit();
  }
  
  ?>