<?php
session_start();
if($_SESSION['login']="yes")
{
  


  // Create database connection

 include 'db.php';



 
  
  	
  

$o_id=$_POST['oid'];
$c_id=$_POST['cid'];
$tc_id=$_POST['tcid'];
     $SID=$_SESSION['REG_BY'];
      
        $sql = "INSERT INTO orde_r (C_ID,ORDER_ID,SID,TOTAL)
VALUES ('$c_id','$o_id','$SID','$tc_id')";

 if(mysqli_query($con,$sql))
  {
      $sqlS = "UPDATE  users SET DUE=DUE+'$tc_id' WHERE REG_BY='".$_SESSION['REG_BY']."' AND ID='".$_SESSION['id']."' ";

 if(mysqli_query($con,$sqlS))
  {
    $sqlc = "UPDATE  users SET DUE=DUE+'$tc_id' WHERE ID='".$_SESSION['REG_BY']."' ";

 if(mysqli_query($con,$sqlc))
  {
    $_SESSION['login']="404";
      echo "ok";
       }
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