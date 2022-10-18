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
			$ldate=$_POST['ldate'];
			
							$ql="SELECT * FROM chat_message WHERE INCOMING_UID=$fr_uid AND OUTGOING_UID=$per_uid AND STATUS='0'";
						$ar=array();

							if($query_run=mysqli_query($con,$ql))
							{
						
							 		//$query_run=mysqli_query($con,$ql);
									$count=mysqli_num_rows($query_run);
									if($count>0)
									{
					   						while($row= mysqli_fetch_assoc($query_run))
					  						{
					  							$res=array();
					      
					      								$res["time"]=$row["TIME_STAMP"];
					      								$res["msg"]=base64_decode($row["MESSAGE"]);
					      								$y=$row["ID"];
					      								array_push($ar, $res);
					      								$sql = "UPDATE chat_message SET STATUS='1' WHERE ID=$y";
					      								mysqli_query($con,$sql);
												}
						
									}
									else
									{
						          	//echo "error in registration 1";
											 $ar[0]["msg"]="nothing";


									}
					  }
							else
							{
								$ar[0]["msg"]="nothing";
														
							}
echo json_encode($ar);					
}
}
else
{
	echo ('<script>location.href = "pages-404.html";</script>');
}
?>
