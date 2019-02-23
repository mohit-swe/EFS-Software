<?php
session_start();
?>



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
<!--<li><a href="index.php"> Login</a></li>-->
</ul>
</div>
</div>
</nav>
<div class="container text-center">
<div class="row">
<div class="col-sm-12">

<h2><u>Sign Up</u></h2>
<?php
if(isset($_GET['error']))
{
	if($_GET['error']=="emptyfields")
	{
		echo'<p style="font-family:century gothic;font-size:23px;color:red;">Empty fields Rejected !</p>';
		
	
	}
elseif($_GET['error']=="invaliduidmail")
{
  	echo'<p style="font-family:century gothic;font-size:23px;color:red;">Invalid Username and email</p>';  
}

elseif($_GET['error']=="invaliduid")
{
  	echo'<p style="font-family:century gothic;font-size:23px;color:red;">Invalid Username </p>';  
}

elseif($_GET['error']=="invalidmail")
{
  	echo'<p style="font-family:century gothic;font-size:23px;color:red;">Invalid Email Id</p>';  
}

elseif($_GET['error']=="passwordCheck")
{
  	echo'<p style="font-family:century gothic;font-size:23px;color:red;">password not match</p>';  
}
elseif($_GET['error']=="usertaken")
{
  	echo'<p style="font-family:century gothic;font-size:23px;color:red;">user already taken</p>';  
}


elseif($_GET['error']=="NoERROR")
{
echo'<a href="login.php" style="font-family:century gothic;font-size:20px; color:green;"><b>Click to continue</b></a>';
}
}

?>




<form action="includes/signup.inc.php" style="font-family:century gothic;"  method="post">

<input type="text" name="uid" style="font-family:century gothic; background:lightgrey;color:black;font-size:20px;border-radius:8px;" placeholder="Username!" required="required"><br>





<input type="text" name="mail" style="font-family:century gothic; background:lightgrey;color:black;font-size:20px;border-radius:8px;"  placeholder="Email"required="required" ><br>




<input type="password" name="pwd" id="c2" style="font-family:century gothic; background:lightgrey;color:black;font-size:20px;border-radius:8px;"  placeholder="Password"required="required" ><span class="first"></span><br>
<script>
$(document).ready(function()
{
$('#c2').keyup(function(){
var le=$('#c2').val().length; //used to detect the length of our word
                              //$('.first').text(le); // it would show only that,, how much character in password it would only show 
							  //character and a digit in right
							  
if(le==0)
{
$('.first').text(''); 
$('.first').removeClass('c1'); // to remove class according to user's choice							  
$('.first').removeClass('c2'); // to remove class according to user's choice							  							  
$('.first').removeClass('c2'); // to remove class according to user's choice
}							  
else if(le<=6)
{
$('.first').text('Weak');    //it would show what ever is ever written in text();
$('.first').addClass('c1'); //it would add that class  styling which i used in style tag that is .c1
$('.first').removeClass('c2'); // to remove class according to user's choice
$('.first').removeClass('c3'); // to remove class according to user's choice
}
else if(le<=9)
{
$('.first').text('Better'); //it would show what ever is ever written in text();
$('.first').addClass('c2');  // it would add that class  styling which i used in style tag that is .c2
$('.first').removeClass('c1'); // to remove class according to user's choice
$('.first').removeClass('c3'); // to remove class according to user's choice
}
else if(le<=12)
{
$('.first').text('Strong'); // it would show what ever is ever written in text();
$('.first').addClass('c3');  //it would add that class  styling which i used in style tag that is .c3
$('.first').removeClass('c1'); // to remove class according to user's choice
$('.first').removeClass('c2'); // to remove class according to user's choice
}
});
});
</script>


<input type="password" name="pwd-repeat"style="font-family:century gothic; background:lightgrey;color:black;font-size:20px;border-radius:8px;"  placeholder="Repeat Password" required="required" ><br>

<b>Remember </b>: <input  type="checkbox" id="myCheck"  onclick="myFunction()" required="required"><br>

<p id="text" style="display:none" required=required> CHECKED !</p>

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>



<button type="submit" name="signup-submit" style="font-family:century gothic; background:black;color:white;font-size:20px;border-radius:8px;">Signup</button><br>



<a  style="font-family:century gothic; font-size:12px color:black;float:left;" href="#"><b>Terms & Conditions ?</b></a>
<a  style="font-family:century gothic; font-size:12px color:black;float:right;" href="#"><b>Privacy policies ?</b></a>
</form>





</div>
</div>
</div>
<footer class="container-fluid text-center fixed-bottom" style="background:white;color:black;">
<div class="row">



<div class="col-sm-12">
<h2><span style="color:red;">E</span><span style="color:orange;">F</span><span style="color:green;">S</span> <span style="color:black;">Software</span></h2>
</div>


<hr>
<div class="container-fluid text-center" id="copy">&copy;EFS Software,2019<img class="circular--square" src="img/india.png" />  <h8>INDIA</h8> <br><h5>Developer: Mohit Ojha</h5> </div>
</footer>
</body>
</html>