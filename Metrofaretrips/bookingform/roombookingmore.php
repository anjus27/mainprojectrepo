<?php
include 'connection.php';

//session_start();
session_start();


//$lid=$_SESSION[lid];



//$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

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
								<!--<div class="col-md-6">
								<select class="form-control" id="bed" name="bed"required>
											<option value=""selected hidden>Select Bedding Type</option>
											<option>Single</option>
											<option>Double</option>
											<option>Triple</option>
										</select>
										
									</div>-->
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
										<input class="form-control" type="text" id="phone" name="phone"
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
		