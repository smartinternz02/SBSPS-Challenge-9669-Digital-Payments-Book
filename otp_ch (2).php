<?php
include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
$reg_name=$_POST['em'];
//$reg_email=$_POST['email'];
$reg_pass=$_POST['ot'];

$sql="SELECT * FROM otp_table WHERE EMAIL='".$reg_name."' AND OTP='".$reg_pass."'";
$resultp=mysqli_query($con,$sql);
if(mysqli_num_rows($resultp)==1)
{
	while ($row=mysqli_fetch_assoc($resultp)) {
	//////
$sql="SELECT * FROM users WHERE EMAIL='".$row['EMAIL']."'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
	//////

while ($row=mysqli_fetch_assoc($result)) {
		# code...
		
		if($row['LEVEL']==2)
		{
			session_start();
			$_SESSION['name']=$row['NAME'];
			$_SESSION['level']=$row['LEVEL'];
			$_SESSION['login']="ADMIN_YES";
	echo ("OK".$row['LEVEL']);
}
else if ($row['LEVEL']==1) {
	session_start();
			$_SESSION['name']=$row['NAME'];
			$_SESSION['level']=$row['LEVEL'];
			$_SESSION['login']="TEACH_YES";
	echo ("OK".$row['LEVEL']);
	}
	else
	{
          session_start();
			$_SESSION['name']=$row['NAME'];
			$_SESSION['level']=$row['LEVEL'];
			$_SESSION['login']="STUT_YES";
	echo ("OK".$row['LEVEL']); 
	}
		
	}


	/////
	}
	else
	{
		echo "error in registration";
	}
// 

}

	/////
	}
	 

else
{
	
		echo "error in registration";
	
}
}

?>