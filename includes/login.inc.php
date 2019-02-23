<?php

if(isset($_POST['login-submit']))
{
	
	
	require 'dbh.inc.php';
	$mailuid=$_POST['mailuid'];
	$password=$_POST['pwd'];
	if(empty($mailuid)||empty($password))
	{
		header("location:../login.php?error=emptyfields");
		exit(); 
	}
	
	
	
	
	else
	{
		
		$sql="SELECT * FROM data_tables WHERE uidUsers=? OR mailUsers=?;";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
			{
			header("Location:../login.php?error=sqlerror");
			exit();
			
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result))
			{
				$pwdCheck=password_verify($password,$row['pwdUsers']);
				if($pwdCheck==false)
				{
					header("Location:../login.php?error=wrongPassword");
			        exit();
				}
				else if($pwdCheck==true)
				{   
			          session_start();
                      $_SESSION['userId']=$row['idUsers'];	
					  $_SESSION['userUid']=$row['uidUsers'];	
			           header("Location:../includes/app_embed_here.php?login=SUCCESS");
			           exit();
				}
				else
				{
					header("Location:../login.php?error=wrongPassword");
			        exit();
				}
				
				
			}
			else
				
				{
					header("Location:../login.php?error=nousersinDataBase");
			        exit();
					
				}
			
		}
		
	}
	
}
else
{
						header("location:../login.php");
		                exit(); 
}
