<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>EFS Software</title>
  <link rel="shortcut icon" href="../img/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../style.css">
  <style>
  
  .content
 {
 
 display:none;
 
 }
 .preloader
{

margin:0;
position:absolute;
top:50%;
left:50%;
margin-right:-50%;
transform:translate(-50%,-50%);

} 
  </style>
</head>
<body data-spy="scroll" data-target="#menu">

<div class="preloader">
<img src="ajaxworking.gif"/>
</div>
<div class="content">


<nav class="navbar navbar-inverse fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbard">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#"><span style="color:red;">E</span><span style="color:orange;">F</span><span style="color:green;">S</span> <span style="color:white;">Software</span></a>
</div>
<div class="collapse navbar-collapse" id="navbard">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="../index.html"><span class="glyphicon glyphicon-home"></span>Home</a></li>
</ul>
</div>
</div>
</nav>


<div class="container text-center" id="about">
<div class="row">
<div class="col-sm-12">

<?php
if(isset($_SESSION['userId']))
{  
    echo '<p style="font-family:century gothic;font-size:23px;color:green;" >Welcome :)<br/> Hey you are logged in ! </p>';
   // echo '<button type="submit"   style="font-family:century gothic; background:black; color:white;font-size:20px;border-radius:8px;"></button>';
	echo '<form  action="app.php" style="font-family:century gothic;" method="post">
    <button type="submit" name="logout-submit"style="font-family:century gothic; background:black;color:white;font-size:20px;border-radius:8px;float:right;text-align:center;">App</button><br>
    </form>';
	
}
else
{
 
	echo '<p style="font-family:century gothic;font-size:23px;color:red;" >Get Back Soon :( ! </p>';
	
	
}

?>
</div>
</div>
</div>
</div>
<script>
  $(function()
  {
  $(".preloader").fadeOut(2800,function()
  {
  $(".content").fadeIn(1800);
  });
  });
  </script>
  
<hr>
<div class="container-fluid text-center" id="copy">&copy;EFS Software,2019</div>

</body>
</html>