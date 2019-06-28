<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
if(!(isset($_SESSION['lid']))){
	header('location:index.php');
}
$lid=$_SESSION['lid'];



if($_GET["view"]=='2')
{
	$id=$_GET["id"];
 $sql3="update login set status='2' where lid=$id";
 mysqli_query($con,$sql3);

 header('location:approverejectadmin1.php');
}
if($_GET["view"]=='1')
{
$id=$_GET["id"];
 $sql3="update login set status='1' where lid=$id";
 mysqli_query($con,$sql3);
 header('location:approverejectadmin1.php');
}
?>
