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

<li style="color:lightgreen;"><span  style="color:lightgreen;" class="glyphicon glyphicon-user"></span>   My Account</li><br>
<li style="font-family:century gothic; font-size:18px; color:orange; text-decoration:none;"> Welcome:   <?php
 echo $_SESSION['userUid']; 
?> </li><br>

</ul>
</div>
</div>
</nav>


<div class="container text-center" id="about">
<div class="row">
<div class="col-sm-12">
 
  
    
<h2 style="color:orange;">Records</h2>
<?php 
include_once 'dbh.inc.php';



$jackson = $_SESSION['userUid'];
$sql1="SELECT * FROM data_tables where uidUsers='$jackson'"; 
$bc=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($bc);
$idx=$row["idUsers"];







if(isset($_REQUEST["result"])){
    
$re=$_REQUEST["result"];




$res_1="SELECT * FROM dashboard where id='$re'";
$rocks=mysqli_query($conn,$res_1);
$query_1=mysqli_fetch_array($rocks);
$wok=$query_1["name"];
unlink("dashboard_1/".$wok);
$des="DELETE FROM dashboard where id='$re'";
mysqli_query($conn,$des);

}

$res="SELECT * FROM dashboard where user_id='$idx'";
$query=mysqli_query($conn,$res);
$rowcount=mysqli_num_rows($query);
?>




<table border="1" align="center" style="font-family:century gothic;" id="table1">
    
    <tr><td>efs No.</td>
        <td>File Records</td>
        <td>Delete</td>
    </tr>
<?php
		while($data=mysqli_fetch_assoc($query))
		{
	
		?>
		<tr>
		    <td><?php echo $data['id'];?></td>
	<td>
	<a style="color:blue;font-size:20px;font-family:century gothic;" href="dashboard_1/<?php echo $data['name'];?>"><?php echo $data['name'];?></a><br></td>
	<td><a style="color:red;font-size:20px;font-family:century gothic;" href="dashboard.php?result=<?php echo $data['id'];?>">Delete</a></td>
		</tr>
		
		<?php
		}
		?>
</table>

<?php
if(isset($_SESSION['userId']))
{  
	echo '<form  action="error.php" style="font-family:century gothic;" method="post">
    <button type="submit" name="logout-submit"style="font-family:century gothic; background:black;color:white;font-size:20px;border-radius:8px;float:right;">LogOut</button><br>
    <a style="color:red;font-size:20px;font-family:century gothic; float:left;" href="app.php">Return</a>
    </form>';
	
	
}
else
{
 
	echo '<p style="font-family:century gothic;font-size:23px;color:red;" >Error Because session is destroyed !  </p>';
	
	
}

?>


</div>
</div>
</div>
</div>
<script>
  $(function()
  {
  $(".preloader").fadeOut(2700,function()
  {
  $(".content").fadeIn(1400);
  });
  });
  </script>
<hr>
<div class="container-fluid text-center " id="copy">&copy;EFS Software,2019
</div>
</body>
</html>