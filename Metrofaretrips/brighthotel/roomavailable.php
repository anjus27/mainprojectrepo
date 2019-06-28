<?php
include 'connection.php';
  session_start();
  $lid=$_SESSION['lid'];
  
    if(isset($_POST["Submit"]))
    {
        $id=$_POST["roid"];
        $hid=$_POST['id'];
    $roomtype=$_POST["roomtype"];
    $d1=$_POST["checkin"];
    $d2=$_POST["checkout"];
    $a=array();
    $b=array();
    }    
    

    
if(isset($_POST['pay']))
{

$roomtype = $_POST['roomtype'];
$checkin=$_POST['datefirst'];
$checkout =$_POST['datesecond'];
$wantedrooms=$_POST['type'];
$num_adults=$_POST['num_adults'];
$num_child=$_POST['num_child'];
$hid=$_POST['hid'];
$roid=$_POST['roid'];
$amount=$_POST['amountss'];

   $sql1 = "INSERT INTO `book_room`(`lid`,`hid`,`roid`,`roomtype`,`checkin`,`checkout`,`wantedrooms`,`num_adults`,`num_child`,`status`,`amount`) VALUES ($lid,$hid,$roid,'$roomtype','$checkin','$checkout','$wantedrooms','$num_adults','$num_child',0,$amount)";
        $result1 = mysqli_query($con, $sql1);
        $bid=mysqli_insert_id($con);
        
        header("location:roompayment.php?id=$bid");

        // $lid=$_SESSION['lid'];
        // $s="select firstname from tbl_userreg where lid='$lid'";
        // $res=mysqli_query($con,$s);
        // $x=mysqli_fetch_array($res);

}
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

    <style>
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
      <div class="block-30 item" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="1.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">

            <p>Available Rooms On Your Selected Days</p>
	<?php
        
     
        
        $ratepernight=$_POST['ratepernight'];
       
        $period = new DatePeriod(
           new DateTime($d1),
           new DateInterval('P1D'),
           new DateTime(date('Y-m-d', strtotime("+1 Day", strtotime($d2)))  )
                                         );


          //echo $diff=date_diff($d1,$d2);  
          
          $date_expire = $d1;
          $aa=$d2;    
$date = new DateTime($date_expire);
$now = new DateTime($d2);
 $date->diff($now)->format("%d");
 


                 $i=0;
                 foreach ($period as $key => $value)
                  {
                      $flag=0;

                     $currDate = $value->format('Y-m-d') ;
            $a[$i]=$currDate;
           //  $d="select (SELECT `$roomtype` as val1 FROM `hoteldetails` WHERE hdid='$id')-( SELECT IFNULL((SELECT sum(`wantedrooms`) as val2 FROM `bookroom` WHERE hid='$id' and type='$roomtype' and checkin <='$currDate' AND checkout >='$currDate' order by hid),0)) as rooms";
         //$ss=mysqli_query($con,$d);
           // $b[$i]=mysqli_fetch_array($ss);


           $b[$i]=mysqli_fetch_array(mysqli_query($con,"select (SELECT `number` as val1 FROM `tbl_room` WHERE roid='$id')-( SELECT IFNULL((SELECT sum(`wantedrooms`) as val2 FROM `book_room` WHERE roid='$id' and roomtype='$roomtype' and checkin <='$currDate' AND checkout >='$currDate' order by hid),0)) as rooms"));
                  

$i++;
	//  print_r($b);
	//print_r($a);                 
 }
    

            $i=0;
            foreach ($b as $row)    //resultinte ullil orupad values und

            {
							$c[$i] =$row;
              // foreach ($row as $row1)    //resultinte ullil orupad values und

              // {
             

            	// }
           		 $i++;
						}
						$i=0;
						foreach ($b as $row)    //resultinte ullil orupad values und

            {
							$b[$i] =$row['rooms'];
							
							$i++;
						}
						$s=$b[0];
            for ($i=0; $i <sizeof($a) ; $i++) {
							echo "<h3>".$a[$i]."   ----------------------      ".$b[$i]."<br>"."</h3>";
							if($b[$i] < $s)
                                                                          {
                                                                            $s=$b[$i];
                                                                          }
            }
        
			?>

<form action="#" method="post">
      <table align="center"  cellspacing="10" cellpadding="10" rules="all" border="2">
      
      <tr>                  
												<td>	Room Type
                        <input type="text" name="roomtype" id="roomtype" value="<?php  echo $roomtype; ?>"></td>

													<!--	<textarea rows="2" name="hname"> <?php //echo $name; ?></textarea>-->

														<!--<textarea rows="2" name="hid"> 	 <?php echo $id; ?></textarea>-->
                     <td>  check in
                          <input type="date" name="datefirst" id="datefirst" required="" value="<?php  echo $d1; ?>"></td>
                        <td>  check out
                          <input type="date"  name="datesecond" id="datesecond" required="" value="<?php  echo $d2; ?>"></td>
                          <!-- <p>Name</p>
																<input type="name" name="name" id="name" required="">
																<p>address</p>
																<textarea rows="2" name="addresss" id="addresss" required=""></textarea>
																<p>phone</p>
																<input type="name" name="phone" id="phone" required=""> -->
                        <tr>   <td>    <!-- <p>Number of Adults</p>-->
																<input type="hidden" name="num_adults" id="num_adults" required=""></td></tr><br>

                      <tr>        <td>  <!--<p>Number of Children</p> -->
																<input type="hidden" name="num_child" id="num_child" required=""></td></tr><br>
                                
                             <td>    <p> select no of rooms</p>
                                  <select class=""  name="type" id="type" onchange="rate1(this.value)">
                                            <option value="">Select number</option>
                                            <?php
                                           for($i=1;$i<=$s;$i++)
                                            {
                                              ?>
                                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                              <?php
                                            }
                                             ?>
                                    </select></td>
                                    <script>
                                    function rate1(num)
                                    {
                                    var datedifference=parseInt(document.getElementById('diff').value);
                                    var ratepernight=parseInt(document.getElementById('ratepernight').value);
                                    var roomcount=parseInt(document.getElementById('type').value);
                                 
                                    var result= ratepernight * datedifference*roomcount;
                                    //var resultone= result - advance;
                                    document.getElementById('amount').value =result;
                                    }   
                                    </script>
                                    
                                <input type="hidden" name="ratepernight"id="ratepernight" value="<?php echo $ratepernight;?>" >
                                <input type="hidden" name="diff" id="diff"  value="<?php echo $date->diff($now)->format("%d");?>">
                                  
                                <input type="hidden" name="hid" id="hid"  value="<?php echo $hid;?>">
                                <input type="hidden" name="roid" id="roid"  value="<?php echo $id;?>">

										 <tr><td> <h4>Price: <span class="priceOne" name="amount"></span></h4>
																	<input type="text" name="amountss" id="amount" class="priceOne" required> </td></tr>
                                 

																<tr><td>	<button type="submit" name="pay" class="btn-md btn-block btn btn-color"  id="pay">PAY</button></td></tr>
																
                                
              <!-- <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Enjoy a Luxury Experience</h2> -->
              <!-- <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p> -->
              </tr>
          </table>
          </form> 
            </div>
          </div>
         </div>
      </div>



     <!-- <div class="block-30 item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
            <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Simple &amp; Elegant</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p>
            </div>
             </div>
            
        </div> 
      </div>-->


    <!--  <div class="block-30 item" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">

           
             <span class="subheading-sm">Welcome</span>
              <h2 class="heading">Food &amp; Drinks</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p>
           
            </div>
          </div>
        </div>
      </div>-->
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