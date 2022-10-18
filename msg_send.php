<?php
session_start();
if($_SESSION['ALPHA_ID']="ALPHA_CUSTOMER")
{
include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
			$fr_uid=$_POST['fr_uid'];

			$per_uid=$_POST['per_uid'];
			
			$msg=$_POST['msg'];
			$msg=base64_encode($msg);
            // $id=$_SESSION['uid']; 
             $date=date("Y-m-d H:i:s");
			$sql = "INSERT INTO chat_message (INCOMING_UID,OUTGOING_UID,MESSAGE,STATUS)VALUES ('".$per_uid."','".$fr_uid."','".$msg."','0')";
//echo $sql;
if ($con->query($sql) === TRUE) {
  echo $date;
} else {
  echo "error";
}

$con->close();
						
					
}
}
else
{
	
  echo ('<script>location.href = "../pages-404.html";</script>');


}
?>
