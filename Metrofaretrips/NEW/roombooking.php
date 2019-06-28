<?php
include 'connection.php';

//session_start();
session_start();


$lid=$_SESSION['lid'];



// $id=$_SESSION['id'];
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
}

.header {
  overflow: hidden;
  background-color:   #99003d;
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


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="custom.css" rel="stylesheet" type="text/css">

    <script>
        function finalCost(){
            var roomType = document.getElementById("room_type").value;
            var roomNum = document.getElementById("room_number").value;
            var personNum = document.getElementById("person_number").value;
            var childNum = document.getElementById("child_number").value;
            var resFacilities = document.getElementById("res_facilities").value;

            var total = (parseInt(roomType)*10) + ((roomNum)*2) + ((personNum)*3) + ((childNum)*2) + ((resFacilities)*5)

            document.getElementById("result").innerHTML = total;
        }


        var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("max", today);
    </script>


</head>
<body>

<div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
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
      <a href="#">Taxies</a>

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">My Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="changepassworduser.php">Change Password</a>
      <a href="#">Update Profile</a>

    </div>
  </div> 
  <a href="logout.php">Log out</a>
 
  </div>
</div>
<br>
<br>

<?php

 $id = $_GET['id'];
 $roid = $_GET['roid'];
 $ratepernight=$_GET['ratepernight'];

//$s=$_GET['lid'];
 $sql= "select * from tbl_room where hid='$id' and roid='$roid' and ratepernight='$ratepernight' ";
$result = mysqli_query($con,$sql);
			             
$row = mysqli_fetch_array($result);
	

$sql1= "select * from login where  lid='".$row['lid']."'";
$result3 = mysqli_query($con,$sql1) or die(mysqli_error());
$row2 = mysqli_fetch_array($result3);




?>  

<div class="hotel_reserve_box col-md-6 col-md-offset-3">
         
         <form action="roomavailable.php" method="post">
             <div class="form-group">
             <input type="hidden" value='<?php echo $_GET['id']; ?>' name="id">
                 <label>Room/Suite Type</label>
                 <select class="form-control" name="roomtype" id="roomtype" onchange="finalCost()">
                     
                     <option value="<?php echo $row['roomtype'];?>"> <?php echo $row['roomtype'];?> </option>
                     
                 </select>
                 <input type="text" name="roid" value="<?php echo $roid;?>" hidden="" >
                 <input type="text" name="id" value="<?php echo $id;?>" hidden="">
                 <input type="text" name="ratepernight" value="<?php echo $ratepernight;?>" hidden="">
             </div>
            <!-- <div class="form-group">
                 <label>Number of room/suite</label>
                 <select class="form-control" id="num_rooms" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6+ </option>
                     
                      <option value="1"> <?php //echo $row[''];?> </option> 
                  
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of persons</label>
                 <select class="form-control" id="num_adults" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of children</label>
                 <select class="form-control" id="num_child" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     
                 </select>
             </div>-->
             <div  class="form-group">
                 <label>Check In Date </label>
                  <input class="form-control" type="date" id="checkin" min="2019-05-10" name="checkin" onchange="finalCost()" required>
				
            </div><br>
            <div class="form-group">
                 <label>Check Out Date </label>
                  <input class="form-control" type="date" id="checkout" name="checkout" onchange="finalCost()" required>
				
            </div><br>
             
             <button type="submit" name="Submit" class="submit-btn">Check Availability</button>
         </form>
     </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br><div class="footer">
  <!-- <p>Footer</p> -->
</div>

</body>
</html>
