<?php
include 'connection.php';

//session_start();
session_start();


//$lid=$_SESSION[lid];



//$id=$_SESSION['id'];
?>



<html>
<head>
<style>

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}

#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 5px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #1a242f;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 50px;
        left: 0px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #222;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #1a242f !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}
</style>
<script>
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    
</script>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>

<?php


$id = $_GET['id'];
//$s=$_GET['lid'];

$sql= "select * from retailer_hoteladd where hid='$id' ";
$result = mysqli_query($con,$sql) or die(mysqli_error());
			             
$row = mysqli_fetch_array($result);
	

$sql1= "select * from login where  lid='".$row['lid']."'";
$result3 = mysqli_query($con,$sql1) or die(mysqli_error());
$row2 = mysqli_fetch_array($result3);




?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <!--  <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
            </a>-->
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
           <!-- <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li> -->   
                    
            <li class="dropdown">
                <a href="../octopus-master/octopus/userhome.php" class="dropdown-toggle" data-toggle="dropdown">Back to Home</b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                    </ul>
            </li>
           
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="../octopus-master/octopus/userhome.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-home"></i> Dashboard <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                 <!--   <ul id="submenu-1" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
                    </ul>-->
                </li>
              
                <li>
                <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-copy"></i>  Activites <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                 <!--   <ul id="submenu-2" class="collapse">-->
                    <li>
                    
                        <li><a href="../octopus-master/octopus/userviewprofile.php"> View Profile</a></li>
                       <!-- <li><a href="../colorlib-regform-15/completeprofile.php/"> Complete Profile</a></li>-->
                        <li><a href="../octopus-master/octopus/changepassworduser.php"> Change Password</a></li>
                     <!--   <li><a href="roombookingnew.php"> Hotel Reservation</a></li>-->
                        
              <!--    </ul>-->
                </li>

                
                <li>
                    <a href="investigaciones/favoritas"><i class="fa fa-align-left"></i> Search Services</a>
                   <!-- <li><a href="#"><i class="fa fa-angle-double-right"></i> Taxies</a></li>-->
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Hotels</a></li>
                    
                </li>
                <!--<li>
                    <a href="sugerencias"><i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
                </li>
                <li>
                    <a href="faq"><i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
                </li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

   <!-- <div id="page-wrapper">
        <div class="container-fluid">
             Page Heading 
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Welcome Admin!</h1>
                </div>
            </div>-->
            <!-- /.row
        </div>
        <!-- /.container-fluid -->


        <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
					
						<form action="roombooking_action.php" method="POST">
							<div class="form-group">
							
				<input value="<?php echo $row['hotelname'];?>" class="form-control" type="text" id="hotel" name="hotel"  placeholder="Hotel Name" required/>
								<span class="form-label" ></span>
							</div>

							<div class="form-group">
							<div class="col-md-6">
			                    <select class="form-control" id="room" name="room" required>
											<option value="" selected hidden>Select Room Type</option>
											<option>SUPERIOR ROOM</option>
											<option>DELUXE ROOM</option>
											<option>SINGLE ROOM</option>
										</select>
							</div>
							<div class="row">
								<div class="col-md-6">
                                <input value="<?php echo $_GET['id'];?>" class="form-control" type="hidden" id="hid" name="hid"  placeholder="Hotel Name" required/>
								<span class="form-label" ></span>
								<!--<select class="form-control" id="bed" name="bed"required>
											<option value=""selected hidden>Select Bedding Type</option>
											<option>Single</option>
											<option>Double</option>
											<option>Triple</option>
										</select>-->
										
									</div>
								</div>
</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" id="checkin" name="checkin" required>
										<span class="form-label">Check In</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="date" id="checkout" name="checkout" required>
										<span class="form-label">Check out</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control"id="num_rooms" name="num_rooms" required>
											<option value="" selected hidden>No. of rooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
										
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" id="num_adults" name="num_adults" required>
											<option value="" selected hidden>No. of adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" id="num_child" name="num_child" required>
											<option value="" selected hidden>No. of children</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input value="<?php echo $row2['email'];?>" class="form-control" type="email" id="email" name="email" placeholder="Enter your Email">
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" type="tel" id="phone" name="phone" pattern="[0-9]{10}"
										 placeholder="Enter you Phone">
										<span class="form-label">Phone</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn">BOOK YOUR ROOM</button>
								


							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<a href="../octopus-master/octopus/userhotelsearch.php" align="center">Back to home</a>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>
        </body>
        </html>