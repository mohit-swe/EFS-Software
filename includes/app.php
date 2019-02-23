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
.frame-wrapper
{
position:relative;
padding-bottom:56.25%; <!--as pect ratio 16by3-->


}
.frame-wrapper iframe
{
position:absolute;
width:100%;
height:100%;
top:0;
left:0;
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
    <h2 style="color:orange;">Upload</h2>
  <h5 style="color:orange;"><i><u>Remember the size of file must satisfy our size protocol ! <b>NO .exe file is allowed to upload</b></u></i></h5>  
<?php 
include_once 'dbh.inc.php';

$jackson = $_SESSION['userUid'];
$sql1="SELECT * FROM data_tables where uidUsers='$jackson'"; 
$bc=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($bc);
$idx=$row["idUsers"];


   if(isset($_POST["submit"]))
   {
       $fileName=$_FILES["file"]["name"];
       $fileTemp=$_FILES["file"]['tmp_name'];
       $filesize=$_FILES["file"]["size"];
       $fileerror=$_FILES["file"]["error"];
       $fileExt=explode('.',$fileName);
       $fileAct=strtolower(end($fileExt));
     $extentions=array('jpg','jpeg','gif','mp3','doc','png','txt','docx','c','java','py','cpp','html','js','css','php','pdf','zip','rar','json','jar','ico','class','svg','mp4','apk','wav','bin','bat','com','mp4','xls','xlr','ppt','pptx','pps','dat','sql','tar','sav','sys','tmp','msi','dll','cfg','icns','htm','asp','aspx','xhtml','obj');
     if(in_array($fileAct,$extentions))
     {
         if($fileerror ===0)
         {
             if($filesize < 10000000000000000000000000000)
             {
            $sql="INSERT INTO dashboard(name,user_id)VALUES('$fileName','$idx')"; 
            mysqli_query($conn,$sql);
            $fileDst='dashboard_1/'.$fileName;
            move_uploaded_file($fileTemp,$fileDst);
            echo'<p style="color:blue font-size:23px;font-family:century gothic;">Uploaded to our database (Satisfied) </p>'; 
             }
         
         }
         else
         {
            echo'<p style="color:red font-size:23px;font-family:century gothic;">To big to upload, please convert to .zip ext </p>'; 
         }
     }
     else
     {
         echo'<p style="color:red font-size:23px;font-family:century gothic;">Sorry but not satisfying size protocol </p>';
     }
     
   }
 
  

  
  
  
 ?> 
  
  
  
  
  
  
    <form  method="post" enctype="multipart/form-data">
        
        <input type="file" name="file" style="color:green;font-family:century gothic;font-size:18px;">
        <br>

        <a style="color:blue;font-size:18px;font-family:century gothic;" href="dashboard.php">Data Records</a><br>
    
   <a style="color:blue;font-size:18px;font-family:century gothic;" href="https://www.virustotal.com/#/home/upload/">Scan</a><br>
   <br>
   <br>
   <input style="color:red;font-size:18px;font-family:century gothic;" type="submit" name="submit">
    </form>
    
    

<?php
if(isset($_SESSION['userId']))
{  
	echo '<form  action="error.php" style="font-family:century gothic;" method="post">
    <button type="submit" name="logout-submit"style="font-family:century gothic; background:black;color:white;font-size:20px;border-radius:8px;float:right;">LogOut</button><br>
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
<div class="container-fluid text-center " id="copy">&copy;EFS Software,2019</div>
</body>
</html>