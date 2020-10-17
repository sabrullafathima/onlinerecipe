<?php 
session_start();
require('includes/config.php');

if(isset($_GET['recipe_id'])){
  $recipe_id = $_GET['recipe_id'];
  $sql_delete = "DELETE FROM recipe WHERE recipe_id = $recipe_id";        
  $result = mysqli_query($conn,$sql_delete);
  if(mysqli_affected_rows($conn)>0) {
      header('location:deleteresult.php?result=success');
  } else {
     header('location:deleteresult.php?result=fail');
  }
 }

 ?>