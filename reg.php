<?php
session_start();
include 'db.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
$reg_name=$_POST['uname'];


$sql="SELECT * FROM users WHERE REG_BY='".$_SESSION['ID']."' AND NAME='".$reg_name."'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while ($row=mysqli_fetch_assoc($result)) {
		# code...
	
	
//$_SESSION['ID']=$row['ID'];
			$_SESSION['REG_BY_NAME']=$row['REG_BY_NAME'];
			$_SESSION['REG_BY']=$row['REG_BY'];
			$_SESSION['id']=$row['ID'];
			$_SESSION['o_id']=uniqid();
			$_SESSION['login']="yes";
			echo("OK");
		}
}
else
{
	$ql="INSERT INTO customer (NAME) VALUES('$reg_name')";
	if(mysqli_query($con,$ql))
	{
		$sl="SELECT * FROM customer WHERE NAME='".$reg_name."' ";
$resul=mysqli_query($con,$sl);
if(mysqli_num_rows($resul)>0)
{
	while ($ro=mysqli_fetch_assoc($resul)) {
		# code...
	
	session_start();
			$_SESSION['id']=$ro['ID'];
			$_SESSION['o_id']=uniqid();
			$_SESSION['login']="yes";
			echo("OK");
		}
}
	}
	else
	{
		echo "error in registration";
	}
}
}
?>