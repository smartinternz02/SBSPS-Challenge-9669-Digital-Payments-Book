<?php
session_start();
if($_SESSION['login']="yes")
{
  


  // Create database connection

 include 'db.php';



 
  $pid=$_POST['pid'];
  	$pi=$_POST['pido'];
    $s=$_POST['c'];
  


     
      
        $sql = "DELETE FROM cart WHERE ID='".$pid."'";

 if(mysqli_query($con,$sql))
  {  
    $sl = "UPDATE product SET STOCK=STOCK+'".$s."' WHERE ID='".$pi."'";

 if(mysqli_query($con,$sl))
  {
    echo "ok";
     }
       
       else {
  echo "Error: " . $sl . "<br>" . $con->error;
}
      } 
       else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
     


 
}
  else
  {
    echo ('<script>location.href = "pages-404.html";</script>');
  }
  
  
  // $result = mysqli_query($db, "SELECT * FROM images");
?>