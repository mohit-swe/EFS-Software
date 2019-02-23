<?php

if(isset($_POST['signup-submit']))
{
	require 'dbh.inc.php';
	
	
	
	$username=$_POST['uid'];
	$email=$_POST['mail'];
	$password=$_POST['pwd'];
	$password_rep=$_POST['pwd-repeat'];
	if(empty($username)||empty($email)||empty($password)||empty($password_rep))
	{
		header("Loaction: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/",$username))
	{
		header("location:../signup.php?error=invalidmailuid");
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		header("location:../signup.php?error=invalidmail");
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
	{
		header("location:../signup.php?error=invaliduid");
		exit();
	}
	else if($password!=$password_rep)
	{
		header("location:../signup.php?error=passwordCheck");
		exit();
	}
	else
	{
		$sql="SELECT uidUsers FROM data_tables WHERE uidUsers=?";
		$stmt=mysqli_stmt_init($conn);
		
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("location:../signup.php?error=sqlerror");
		exit();
	     }
	
	   else
	   {
		
		mysqli_stmt_bind_param($stmt,"s",$username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultCheck=mysqli_stmt_num_rows($stmt);
		if($resultCheck > 0)
		{
			header("location:../signup.php?error=usertaken");
		exit();
	     }
		 
		 
		 
		 
		 else{
			 
			 $sql="INSERT INTO data_tables(uidUsers,mailUsers,pwdUsers)VALUES(?,?,?)";
			 $stmt=mysqli_stmt_init($conn);
			 if(!mysqli_stmt_prepare($stmt,$sql))
			 {
				header("location:../signup.php?error=sqlerror");
		exit(); 
			 }
			 else{
				 
				 $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
				 
				 mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
		         mysqli_stmt_execute($stmt);
		         
		         
		         
         $to = $email;
         $subject = "CONFIRMATION EMAIL";
         
         $message = "<h1>Welcome,</h1>"."<h3 style='color:orange;font-family:century gothic;'>".$username."</h3>"."<br>";
         $message .="<h4 style='color:green;font-size:15px;font-family:century gothic;'>All new world of uploads and <br>downloads of any files from anywhere with ease.</h4></br>";
         $message .="<i>regards</i>,<br> Mohit Ojha<br><span style='color:red;'>E</span><span style='color:orange;'>F</span><span style='color:green;'>S</span><span style='color:black;'>  Software</span>";
         $header = "From:efssoftware034@gmail.com \r\n";
    
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $header .= "Content-type: text/css \r\n";
         mail ($to,$subject,$message,$header);

		         
				 header("location: ../signup.php?error=NoERROR");
		       exit();
				 
			 }
			 
			 
		     }
	   }
	}
	
	
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
}

else
{
					header("location:../signup.php");
		exit(); 
		
		
}
