<?php

  


  // Create database connection

 include 'db.php';



 
  $pid=$_POST['p'];
  	//$pi=$_POST['pr'];
  

$sqls="SELECT * FROM orde_r WHERE ID='".$pid."'";
$result=mysqli_query($con,$sqls);
if(mysqli_num_rows($result)>0)
{
 
  while ($row=mysqli_fetch_assoc($result))  {
$K=$row['TOTAL'];
$sid=$row['SID'];
$cid=$row['C_ID'];
    # code...
  }
     
    }  
        $sql = "UPDATE orde_r SET ACTIVE=0 WHERE ID='".$pid."'";

 if(mysqli_query($con,$sql))
  {  
     $sqlc = "UPDATE users SET DUE=DUE-'$K',REVENUE=REVENUE+'$K' WHERE REG_BY='$sid' AND ID='$cid'";

 if(mysqli_query($con,$sqlc))
  {  
     $sqlc = "UPDATE users SET DUE=DUE-'$K',REVENUE=REVENUE+'$K' WHERE ID='$sid'";

 if(mysqli_query($con,$sqlc))
  {  
    echo("ok");
     }
   }
      } 
       else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
     


 

  
  // $result = mysqli_query($db, "SELECT * FROM images");
?>