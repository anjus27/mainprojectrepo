<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();

$lid=$_SESSION['lid'];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image:url("images1/chambre1.jpg");
  background-repeat: no-repeat;
   background-size: cover; 
}

.header {
  overflow: hidden;
  background-color:   #ffffff;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:   #99003d;
   color: white;
   text-align: center;}

   .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown:hover .dropbtn {
  background-color: dodgerblue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
  <!-- <p><b>Welcome <?php //echo $x['0']?></b></p> -->
  <div class="header-right">
    <a class="active" href="new.php">Home</a> 
    <!-- <a href="changepassworduser.php">Change Password</a>
   <a href="#">Update profile</a> -->
    <div class="dropdown">
    <button class="dropbtn">Search Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="usersearchhotel.php">Hotels</a>
      <!-- <a href="#">Taxies</a> -->

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">My Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="changepassworduser.php">Change Password</a>
      <a href="userprofile.php">Update Profile</a>

    </div>
  </div> 
  <a href="logout.php">Log out</a>

    
  </div>
</div>
<br>
<br>
<br>
<br>

<h3 align="center">BOOKING DETAILS</h3>
<?php


$bid = $_GET['id'];




$query="select * from book_room where bid='$bid'";
//$sql="SELECT * FROM book_room WHERE `room` = "SINGLE ROOM" OR `room` = "DELUXE ROOM" OR `room`="SUPERIOR ROOM"";

$rs=mysqli_query($con,$query);
?>


	
<table border="2" cellspacing="1" align="center">
<thead>
<tr>
<!-- <th>HOTEL</th> -->
<th>ROOM TYPE</th>
<th>CHECK IN</th>
<th>CHECK OUT</th>
<th>NO.OF ROOMS</th>
<!-- <th>NO.OF ADULTS</th>
<th>NO.OF CHILD</th> -->
<th>AMOUNT</th>
<th>VIEW/CANCEL OPTIONS</th>
</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_array($rs))
{
    ?>
   <tr>
    <!-- <td><?php //echo $row['hotel'];?> -->
    <td font color=" #ffffff"><?php echo $row['roomtype'];?>
    <td><?php echo $row['checkin'];?>
    <td><?php echo $row['checkout'];?>
    <td><?php echo $row['wantedrooms'];?>
    <!-- <td > <?php //echo $row['num_adults'];?>
    <td><?php //echo  $row['num_child'];?> -->
    <td><?php echo $row['amount'];?>
    
    <td><a href="../gen/download.php?id=<?php echo $row['bid'];?>" style="color:red">VIEW</a>&nbsp; &nbsp;<a href="roomcancel.php?id=<?php echo $row['bid'];?>" style="color:red">CANCEL</a></td>
    </tr>
    <?php
}
?>

<div class="footer">
  <!-- <p>Footer</p> -->
</div>

</body>
</html>
