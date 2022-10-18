<?php
  // Initialize message variable
  include 'db.php';
session_start();
  
$sid=$_SESSION['ID'];
$snm=$_SESSION['name'];
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
$email=$_POST['email'];
$phn=$_POST['phn'];
//$address=$_POST['detail'];
$sql="SELECT * FROM users WHERE EMAIL='".$email."' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  echo "user already registered";
}
else
{


  //    $filename=md5(date("YmdHis")).".png";
  // $tmpname=$_FILES["pimg"]["tmp_name"];

  
  // $path="PRODUCT/".$filename;
  // $mimetype=mime_content_type($tmpname);
  // $valid=array('image/jpeg','image/png','image/jpg','image/JPEG','image/PNG','image/JPG');
  // if(in_array($mimetype, $valid))
  // {
  //      if(move_uploaded_file($tmpname, $path))
  //      {

        //$k=$k+1;
        
$pass=uniqid();
$qz=0;

      $query="INSERT INTO users (NAME,EMAIL,PASSWORD,PH_NO,LEVEL,REG_BY,REG_BY_NAME) VALUES ('$e_name','$email','$pass','$phn','$qz','$sid','$snm')";
      $query_run=mysqli_query($con,$query);
      if($query_run)
      {
        $OTP_N="Hello customer your login credentials EMAIL :- ".$email.",PASSWORD = ".$pass." from ".$snm;
        $fields = array(
    "message" => $OTP_N,
    "language" => "english",
    "route" => "q",
    "numbers" => $phn,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: PXsdDl8HTxVLRM4hrZefIApF6m5S71tCYUuk3vyj09cogqibNK4JSUscDefiL9VtI8C1rOKFN0BW6zg3",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
         //$t=$t+1;
         echo "OK";
       }
         // header("Location:main_page.php");
          // header("Location:main_page.php");
      }
      else
      {
        echo "error".$query.(mysqli_error($con));
      }
}

       
 }
  ?>