<?php

  


  // Create database connection

 include 'db.php';



 
  $pid=$_POST['p'];
  	$pi=$_POST['pr'];
  


     
      
        $sql = "UPDATE product SET STOCK='".$pi."' WHERE ID='".$pid."'";

 if(mysqli_query($con,$sql))
  {  
    echo("ok");
     
      } 
       else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
     


 

  
  // $result = mysqli_query($db, "SELECT * FROM images");
?>