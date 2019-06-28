<?php
include 'connection.php';

//session_start();
session_start();


$lid=$_SESSION['lid'];



// $id=$_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bright Hotel - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/jquery-ui.css">
   


   <script>
  var d = new Date();
var year = d.getFullYear() ;
d.setFullYear(year);
$('#checkin').datepicker({ changeYear: true, changeMonth: true,maxDate:' ',minDate:'-1d', defaultDate: d})
  </script>
  <script>
  var d = new Date();
var year = d.getFullYear() ;
d.setFullYear(year);
$('#checkout').datepicker({ changeYear: true, changeMonth: true,maxDate:' ',minDate:'-1d', defaultDate: d})
  </script>
   
    <style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  
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

</script>


  </head>
  <body>

  <div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
  <div class="header-right">
    <a class="active" href="../NEW/new.php">Home</a> 
    <!-- <a href="changepassworduser.php">Change Password</a>
   <a href="#">Update profile</a> -->
    <div class="dropdown">
    <button class="dropbtn">Search Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../NEW/usersearchhotel.php">Hotels</a>
      <a href="#">Taxies</a>

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">My Profile 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="../NEW/changepassworduser.php">Change Password</a>
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
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html">BrightHotel</a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <!-- <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="rooms.html" class="nav-link">Rooms</a></li>
          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div> -->
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <!-- <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Enjoy a Luxury Experience</h2> -->
              <!-- <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <!-- <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Simple &amp; Elegant</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <!-- <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Food &amp; Drinks</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
            <!-- <form action="#"> -->
            <form action="../NEW/roomavailable.php" method="post">
           
  
            <div class="row">
                <div class="col-md-6 mb-3 col-lg-3">
                <input type="hidden" value='<?php echo $_GET['id']; ?>' name="id">
                  <label for="roomtype">Room Type</label>
                  <div class="field-icon-wrap">
                    <!-- <div class="icon"><span class="icon-calendar"></span></div> -->
                    <!-- <input type="text" id="checkin_date" class="form-control"> -->
                    <select class="form-control" name="roomtype" id="roomtype" onchange="finalCost()">
                     
                     <option value="<?php echo $row['roomtype'];?>"> <?php echo $row['roomtype'];?> </option>
                     <input type="text" name="roid" value="<?php echo $roid;?>" hidden="" >
                 <input type="text" name="id" value="<?php echo $id;?>" hidden="">
                 <input type="text" name="ratepernight" value="<?php echo $ratepernight;?>" hidden="">
                 </select>
                  </div>
                </div>


              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Check In</label>
                  <div class="field-icon-wrap">
                    <!-- <div class="icon"><span class="icon-calendar"></span></div> -->
                    <!-- <input type="text" id="checkin_date" class="form-control"> -->
                    <input class="form-control" type="date" min="2019-06-28" max="2019-12-31" id="checkin"  name="checkin" onchange="finalCost()" required>
                  </div>
                </div>

                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Check Out</label>
                  <div class="field-icon-wrap">
                    <!-- <div class="icon"><span class="icon-calendar"></span></div> -->
                    <!-- <input type="text" id="checkout_date" class="form-control"> -->
                    <input class="form-control" type="date" id="checkout"  min="2019-05-16" max="2019-12-31" name="checkout" onchange="finalCost()" required>
                  </div>
                </div>

                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Adults</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Children</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <!-- <button class="btn btn-primary btn-block">Check Availabilty</button> -->
                  <button type="submit" name="Submit" class="submit-btn">Check Availability</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
    
  </body>
</html>