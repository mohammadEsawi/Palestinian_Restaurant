<?php
$ID=$_GET['id'];


$db=new mysqli('localhost','root','','resturant');

$deleteQry="DELETE FROM resrvation WHERE id=$ID";
$db->query($deleteQry);

header('location:Reservation.php');






?>