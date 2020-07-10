<?php

function checkItem($select, $from, $value){
  global $con;
  $stmt1 = $con->prepare("SELECT $select FROM $from WHERE $select = ?");
  $stmt1->execute(array($value));
  $count = $stmt1->rowCount();
  return $count;
}
 

function rdirectFun($theMasg, $url = null,  $seconds = 3){
      if ($url === null) {
        $url ='index.php';
      }
      else{
        if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {
        $url = $_SERVER['HTTP_REFERER'];  # code...
        }
        else{
          $url ='index.php';
        }
      }

      echo'<div class="container">';
        echo $theMasg ;
        echo'<div class="alert alert-info text-center">you ll be redirect after' . ' ' . $seconds . ' ' . 'seconds</div>';
        echo'</div>';
        header("refresh:$seconds; url=$url");
        exit();
}


function countItem($item, $table){
      global $con;
      $stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");
      $stmt2->execute();
      return $stmt2->fetchColumn();

}



 ?>