<?php
include 'connection.php';
session_start();
$hotelname=$_REQUEST['hotelname'];
$type=$_REQUEST['type'];
$checkin=$_REQUEST['checkin'];
$checkout=$_REQUEST['checkout'];
$num_rooms=$_REQUEST['num_rooms'];
$num_adults=$_REQUEST['num_adults'];
$num_child=$_REQUEST['num_child'];
$mailid=$_REQUEST['mailid'];
$phone=$_REQUEST['phone'];
