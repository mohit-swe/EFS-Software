<?php

$servername="localhost";
$dBUsername="id8696325_root";
$dBPassword="*@134567@CCBN";
$dBName="id8696325_database";


$conn=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
if(!$conn)
{
	die("connection");
}