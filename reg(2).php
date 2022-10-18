<?php
include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
$reg_name=$_POST['uname'];
$reg_email=$_POST['email'];
$reg_pass=$_POST['pass'];
$reg_ph=$_POST['ph'];
$sql="SELECT * FROM users WHERE EMAIL='".$reg_email."' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	echo "user already registered";
}
else
{
	$ql="INSERT INTO users (NAME,EMAIL,PASSWORD,PH_NO,LEVEL) VALUES('$reg_name','$reg_email','$reg_pass','$reg_ph',1)";
	if(mysqli_query($con,$ql))
	{
		$sqlX="SELECT * FROM users WHERE EMAIL='".$reg_email."' ";
$result=mysqli_query($con,$sqlX);
if(mysqli_num_rows($result)>0)
{
	while ($row=mysqli_fetch_assoc($result)) {
		session_start();
		$_SESSION['name']=$row['NAME'];
			$_SESSION['level']=$row['LEVEL'];
			$_SESSION['ID']=$row['ID'];
			$_SESSION['ALPHA_ID']="ALPHA_CHECKED";
		
	}echo "OK";
}
}
	else
	{
		echo "error in registration";
	}
}
}
?>