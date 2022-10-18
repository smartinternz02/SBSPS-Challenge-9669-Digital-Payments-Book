<?php
  // Initialize message variable
  include 'db.php';
session_start();
  
$sid=$_SESSION['ID'];
  // If upload button is clicked ...
  
  	// Get image name
$cmd=$_POST['cmd'];
if($cmd=='register')
{
  $fw=fopen("ttt.txt", "a");
  fwrite($fw, print_r($_POST,true));
  fwrite($fw, print_r($_FILES,true));
  //echo "ok2";
$e_name=$_POST['pname'];
$price=$_POST['price'];
$pin=$_POST['stock'];
$address=$_POST['detail'];



     $filename=md5(date("YmdHis")).".png";
  $tmpname=$_FILES["pimg"]["tmp_name"];

  
  $path="PRODUCT/".$filename;
  $mimetype=mime_content_type($tmpname);
  $valid=array('image/jpeg','image/png','image/jpg','image/JPEG','image/PNG','image/JPG');
  if(in_array($mimetype, $valid))
  {
       if(move_uploaded_file($tmpname, $path))
       {

        //$k=$k+1;
        


      $query="INSERT INTO product (NAME,PRICE,IMG,DETAILS,STOCK,SID) VALUES ('$e_name','$price','$path','$address','$pin','$sid')";
      $query_run=mysqli_query($con,$query);
      if($query_run)
      {
         //$t=$t+1;
         echo "OK";
         // header("Location:main_page.php");
          // header("Location:main_page.php");
      }
      else
      {
        echo "error".$query.(mysqli_error($con));
      }


       }
      
  }
  else
  {
    echo "file is not an image";
  }
 }
  ?>