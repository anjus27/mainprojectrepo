<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['r_id']))
	{
		header("location:login.php");
	}
	?>
<title>Single Listing</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">
<meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

		<!-- Header -->
	<header class="header">
		<!-- Main Navigation -->
<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start" style="    margin-top: -32px;">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelog</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="customer_home.php?uid=<?php echo $_SESSION['r_id'];?>">HOME</a></li>
								<li class="main_nav_item"><a href="customer_profile.php?uid=<?php echo $_SESSION['r_id'];?>">PROFILE</a></li>
								<li class="main_nav_item"><a href="cust_search.php?uid=<?php echo $_SESSION['r_id'];?>">RESORT</a></li>
								
								<li class="main_nav_item"><a href="feedback.php?uid=<?php echo $_SESSION['r_id'];?>">FEEDBACK</a></li>
								
								<li class="main_nav_item"><a href="logout.php">Logout</a></li>

								
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>




	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/single_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">RESORT DETAILS</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="listing">

		<!-- Search -->

		<div class="search">
			<div class="search_inner">

				<!-- Search Contents -->
				
				<div class="container fill_height no-padding">
					<div class="row fill_height no-margin">
						<div class="col fill_height no-padding">


							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>
<?php

$kid =$_GET['uid'];

$result=mysqli_query($con,"select * from tbl_addresort where h_id ='$kid'");
while($row=mysqli_fetch_array($result))
{
	?>
		<!-- Single Listing -->
		<form action="userfeedback_action.php?uid1=<?php echo $kid;?>" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">


		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content">
									<h1 class="hotel_title"><?php echo $row['h_name'];?></h1>
									
									
								</div>
					
							</div>

							<!-- Listing Image -->

							<div class="hotel_image">
								<img src="Uploads/<?php echo $row['h_image'];?>" alt="">
								
							</div>

							<!-- Hotel Gallery -->

							<div class="hotel_gallery">
								<div class="hotel_slider_container">
									<div class="owl-carousel owl-theme hotel_slider">

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_1.jpg">
												<img src="images/listing_thumb_1.jpg" alt="https://unsplash.com/@jbriscoe">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_2.jpg">
												<img src="images/listing_thumb_2.jpg" alt="https://unsplash.com/@grovemade">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_3.jpg">
												<img src="images/listing_thumb_3.jpg" alt="https://unsplash.com/@fransaraco">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_4.jpg">
												<img src="images/listing_thumb_4.jpg" alt="https://unsplash.com/@workweek">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_5.jpg">
												<img src="images/listing_thumb_5.jpg" alt="https://unsplash.com/@workweek">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_6.jpg">
												<img src="images/listing_thumb_6.jpg" alt="https://unsplash.com/@avidenov">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_7.jpg">
												<img src="images/listing_thumb_7.jpg" alt="https://unsplash.com/@pietruszka">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_8.jpg">
												<img src="images/listing_thumb_8.jpg" alt="https://unsplash.com/@rktkn">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_9.jpg">
												<img src="images/listing_thumb_9.jpg" alt="https://unsplash.com/@mindaugas">
											</a>
										</div>
									</div>

									<!-- Hotel Slider Nav - Prev -->
									<div class="hotel_slider_nav hotel_slider_prev">
										<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_prev'>
													<stop offset='0%' stop-color='#fa9e1b'/>
													<stop offset='100%' stop-color='#8d4fff'/>
												</linearGradient>
											</defs>
											<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
											M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
											C22.545,2,26,5.541,26,9.909V23.091z"/>
											<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
											11.042,18.219 "/>
										</svg>
									</div>
									
									<!-- Hotel Slider Nav - Next -->
									<div class="hotel_slider_nav hotel_slider_next">
										<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_next'>
													<stop offset='0%' stop-color='#fa9e1b'/>
													<stop offset='100%' stop-color='#8d4fff'/>
												</linearGradient>
											</defs>
										<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"/>
										<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
										17.046,15.554 "/>
										</svg>
									</div>

								</div>
							</div>

							<!-- Hotel Info Text -->

							<div class="hotel_info_text">
								<p><?php echo $row['h_des'];?></p>
							</div>

							<!-- Hotel Info Tags -->

							<div class="hotel_info_tags">
								<ul class="hotel_icons_list">
									<li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
								</ul>
							</div>

						</div>
						
						<!-- Rooms -->
						<?php

$kid =$_GET['uid'];

$result=mysqli_query($con,"select * from tbl_rooms where h_id ='$kid' and rm_status='1'");
while($row=mysqli_fetch_array($result))
{
	?>

						<div class="rooms">

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="images/room_1.jpg" alt="https://unsplash.com/@grovemade"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title"><?php echo $row['rm_cat'];?></div>
											<div class="room_price">Package:<?php echo $row['rm_package'];?></div>
											<div class="room_text">Bed:<?php echo $row['rm_bed'];?></div>
											<div class="room_extra">Number of Rooms:<?php echo $row['rm_number'];?></div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<div class="button book_button trans_200"><a href="cust_booking.php?uid=<?php echo $row['rm_id'];?>">book<span></span><span></span><span></span></a></div>
										</div>
										<div class="room_button">
											<div class="button book_button trans_200"><a href="rate.php?uid=<?php echo $row['rm_id'];?>">Rate<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>	
							</div>

							

						</div>
						<?php
}
?>
<style>
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border: 1px solid #F2F2F2;
    }
</style>
						<div class="container">
						<div class="container pb-cmnt-container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-body">
                    <textarea placeholder="Write your comment here!" name="message" class="pb-cmnt-textarea"></textarea>
                    
                        
                        <button class="btn btn-primary pull-right" type="submit" onclick="loadDoc()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
							<div class="reviews">
							<div class="reviews_title">reviews</div>
							<div class="reviews_container">


<!-- Comment Box - START 
<form action="userfeedback_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">-->
<?php
include 'dbconnect.php';
$kid1=$_SESSION['r_id'];
$res1=mysqli_query($con,"SELECT * FROM `tbl_userfeedback` f1 LEFT JOIN `tbl_registration` r1 on f1.r_id=r1.r_id where f1.h_id='$kid'");
$i=1;
while($row1=mysqli_fetch_array($res1))
{
	
?>


							<script>
function loadDoc() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "resort_view.php", true);
  xhttp.send();
}

</script>



<!-- Comment Box - END -->




						<!-- Reviews -->

						

								<!-- Review -->
								
								<div class="review">
									<div class="row">
										<div class="col-lg-1">
											<div class="review_image">
												<img src="Uploads/<?php echo $row1['r_image'];?>" alt="https://unsplash.com/@saaout">
											</div>
										</div>
										<div class="col-lg-11">
											<div class="review_content">
												<div class="review_title_container">
													<div class="review_title"><?php
												echo $row1['r_name'];
												?></div>
													<div class="review_rating">9.5</div>
												</div>
												<div class="review_text">
													<p><?php echo $row1['uf_msg'];?></p>
												</div>
											
												<div class="review_date"><?php echo $row1['uf_date'];?></div>
											</div>
										</div>
									</div>
								</div>
								<?php
}
?>

								</div>
								

							</div>
						</div>
						
						


					
					</div>
				</div>
			</div>
		</div>		
	</div>


	


</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/single_listing_custom.js"></script>
<?php
}

?>
</body>


</html>