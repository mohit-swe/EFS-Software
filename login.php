
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EFS Software</title>
  <link rel="shortcut icon" href="img/mymedrem.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body data-spy="scroll" data-target="#menu">
<nav class="navbar navbar-inverse fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbard">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.html"><span style="color:red;">E</span><span style="color:orange;">F</span><span style="color:green;">S</span> <span style="color:white;">Software</span></a>
</div>
<div class="collapse navbar-collapse" id="navbard">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
<li><a href="signup.php"> SignUP </a></li>
</ul>
</div>
</div>
</nav>


<div class="container text-center" id="about">
<div class="row">
<div class="col-sm-12">
<?php
    
if(isset($_GET['error']))
{
	if($_GET['error']=="emptyfields")
	{
		echo'<p style="font-family:century gothic;font-size:23px;color:red;">Empty fields Rejected !</p>';
		
	
	}
elseif($_GET['error']=="wrongPassword")
{
  	echo'<p style="font-family:century gothic;font-size:23px;color:red;">Invalid password</p>';  
}

elseif($_GET['error']=="nousersinDataBase")
{
  	echo'<p style="font-family:century gothic;font-size:23px;color:red;">Sorry ! ,<br> no usersame/email in our Database </p>';  
	
}


}
		

?>   
    
    
    
    
    

<h2><u>Login</u></h2>
<form action="includes/login.inc.php" style="font-family:century gothic;" method="post">
<input type="text" name="mailuid" style="font-family:century gothic; background:lightgrey;color:black;font-size:20px;border-radius:8px;" placeholder="Username/Email" required="required"><br>
<input type="password" name="pwd"style="font-family:century gothic; background:lightgrey;color:black;font-size:20px;border-radius:8px;"  placeholder="Password"required="required" ><br>
<button type="submit" name="login-submit"style="font-family:century gothic; background:black;color:white;font-size:20px;border-radius:8px;">Login</button><br>



</form>







</div>
</div>
</div>
<footer class="container-fluid text-center fixed-bottom" style="background:white; color:black;">
<div class="row">



<div class="col-sm-12">
<h2><span style="color:red;">E</span><span style="color:orange;">F</span><span style="color:green;">S</span> <span style="color:black;">Software</span></h2>
</div>


<hr>
<div class="container-fluid text-center" id="copy">&copy;EFS Software,2019 <img class="circular--square" src="img/india.png" />  <h8>INDIA</h8><br><h5>Developer: Mohit Ojha</h5> </div>
</footer>

</body>
</html>