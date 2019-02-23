<?php
session_start();

session_unset();
session_destroy();

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
<a class="navbar-brand" href="#"><span style="color:red;">E</span><span style="color:orange;">F</span><span style="color:green;">S</span> <span style="color:white;">Software</span></a></a>
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


	

echo '<p style="font-family:century gothic;font-size:23px;color:red;" >You are not logged in ! </p>';

	
?>


</div>
</div>
</div>
<footer class="container-fluid text-center" style="background:white;color:black;">

<div class="container-fluid text-center" id="copy">&copy; EFS Software,2019</div>
</footer>
</body>
</html>
