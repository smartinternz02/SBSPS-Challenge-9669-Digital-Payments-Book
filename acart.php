<?php
session_start();
if($_SESSION['login']="yes")
{
  


  // Create database connection

 include 'db.php';



 
  $pid=$_POST['pid'];
  	
  
$c=$_POST['c'];
$o_id=$_POST['o_id'];
$c_id=$_POST['c_id'];
$SID=$_SESSION['REG_BY'];
     
      $query="SELECT * FROM product WHERE ID=$pid";
      $query_run=mysqli_query($con,$query);

if(mysqli_num_rows($query_run)>0)
{
      while ($row=mysqli_fetch_assoc($query_run)) {
    # code...

        $nm=$row['NAME'];
        $img=$row['IMG'];
        $st=$row['STOCK'];
         $pr=$row['PRICE'];
       
      }

 if ($st<$c)
      {

      echo ("OKS@".$st);
         
       } 
       else
       {
        $sql = "INSERT INTO cart (P_ID,C_ID,SID,P_NAME,QNT,P_IMG,ORDER_ID,PRICE)
VALUES ('$pid','$c_id','$SID','$nm','$c','$img','$o_id','$pr')";

 if(mysqli_query($con,$sql))
  {
    $Z=$st-$c;
    $l="UPDATE product SET STOCK='".$Z."' WHERE ID = '".$pid."'";
    if(mysqli_query($con,$l))
  {
      echo "O@g";
       }
       }
       else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
     


  }
  
  
}
}
  else
  {
    echo ('<script>location.href = "pages-404.html";</script>');
  }
  
  
  // $result = mysqli_query($db, "SELECT * FROM images");
?>