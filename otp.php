<?php
include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
	$reg_name=$_POST['em'];



$sql="SELECT * FROM users WHERE EMAIL='".$reg_name."'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
	while ($row=mysqli_fetch_assoc($result)) {


$PH=$row['PH_NO'];

	}
	$OTP_N=rand(11111,99999);
	$ql="INSERT INTO otp_table (EMAIL,OTP,PHONE) VALUES('$reg_name','$OTP_N','$PH')";
	if(mysqli_query($con,$ql))
	{ 
	$fields = array(
    "message" => $OTP_N,
    "language" => "english",
    "route" => "q",
    "numbers" => $PH,
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
  echo "ok1";
}
}
else
	{
		echo "Error: " . $sql . "<br>" . $con->error;;
	}

	}
	 

else
{
	
		echo "ok2";
	
}
}
	//////////////////////
	
////////////////////

?>