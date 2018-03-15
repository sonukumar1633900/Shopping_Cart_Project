<?php
$host= "localhost";
$username = "root";
$password="";
$dbname="sonustore";
$con = mysqli_connect($host,$username,$password);
$result =  mysqli_select_db($con,$dbname);
if(!$result)
{
	die("error");
}


?>