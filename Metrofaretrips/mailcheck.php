<?php
require('connection.php');

$email = $_POST['email'];
//validate email
$sql = "SELECT `email` FROM `login` WHERE `email` = '$email'";
// echo $sql;
// die();
$result = mysqli_query($con, $sql);
if($result && mysqli_num_rows($result)==0){
    echo TRUE;
}else{
    echo FALSE;
}