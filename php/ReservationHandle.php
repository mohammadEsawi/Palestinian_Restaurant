<?php

session_start();
$name=$_POST["resName"];
$table=$_POST["tableValue"];
$date=$_POST["Date"];
$people=$_POST["people"];
$Request=$_POST["Request"];


echo $name." ".$table." ".$date." ".$people." ".$Request;

$username=$_SESSION["username"];


$db=new mysqli("localhost","root","","resturant");
$qry="insert into resrvation(userName,name,tableType,date,noOFpeople,specialRequest) values ('$username','$name','$table','$date','$people','$Request')";

$db->query($qry);

header("location:home.php");







?>
