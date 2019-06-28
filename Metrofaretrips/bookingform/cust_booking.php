<html>
<body>
<html lang="en">
<?php
include 'connection.php';
session_start();
$kid=$_SESSION['r_id'];
$sql=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
$row=mysqli_fetch_array($sql);
$row1=$_GET['uid'];
$sql1="select * from `tbl_rooms` where `rm_id`='$row1'";
$result=mysqli_query($con,$sql1);
$row2=mysqli_fetch_array($result);
$id=$row2['rm_id'];
$_SESSION['rm_id']=$id;
$room=$row2['rm_cat'];
$rate=$row2['rm_package'];

?>
<head>
<title>Travellog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start" style="    margin-top: -32px;">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelog</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="customer_home.php?uid=<?php echo $_SESSION['r_id'];?>">Home</a></li>
								<li class="main_nav_item"><a href="customer_profile.php?uid=<?php echo $_SESSION['r_id'];?>">Profile</a></li>
								<li class="main_nav_item"><a href="cust_search.php?uid=<?php echo $_SESSION['r_id'];?>">Resorts</a></li>
								<li class="main_nav_item"><a href="feedback.php?uid=<?php echo $_SESSION['r_id'];?>">Feedback</a></li>
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
	<script>
function showDays(){

     var start = $('.cn').val();
     var end = $('.co').val();

     var startDay = new Date(start);
     var endDay = new Date(end);
     var millisecondsPerDay = 1000 * 60 * 60 * 24;

     var millisBetween = endDay.getTime() - startDay.getTime();
     var days = millisBetween / millisecondsPerDay;
	 //var textValue1 = document.getElementById('txt_Amount').value;
	 //var textValue2=<?php echo $row2['rm_package']; ?>;
	 var textValue1 = document.getElementByValue('<?php echo $row2['rm_package']; ?>');
	 var t=textValue2*days;
	document.getElementById('txt_Amount1').value = t;
      // Round down.
       //document.write(t);

}
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<form action="booking_action.php?uid=$row1" method="post" class="form-horizontal">
<script type="text/javascript">
function validate()
{
 
var  dvar5 = document.getElementById("txt_qty");
if(dvar5.value=="")
{
 alert("Enter Quantity...");
dvar5.focus();
return false;
}
else
	{
	  
	   var expn=/^[0-9]+$/;
                if(dvar5.value.match(expn))
	     {
		    if(dvar5.value.length>5)
		
		 {alert("Enter a valid number"); 
				 	  dvar5.focus();
                 return false;
		}
            }
         else
        {
                 alert("Enter a valid number"); 
				 	  dvar5.focus();
                 return false;
				 
         }
		
	  }
}
</script>
<script type="text/javascript" src="calender/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="calender/js/jquery-ui-1.8.14.custom.min.js"></script>
		<link type="text/css" href="calender/css/redmond/jquery-ui-1.8.14.custom.css" rel="stylesheet" />	
		<script>
			<!--//function calc(){ -->
			
			 function calc(){
   var textValue1 = document.getElementById('txt_Amount').value;
   var textValue2 = document.getElementById('txt_qty').value;

   document.getElementById('txt_total').value = textValue1 * textValue2; 
 }
			</script>

	
		<div class="wrapper" style="background-image:url('images/bg-01.jpg');">
			<body>
		<div class="col-lg-6">
		<br><br><br><br><br><br>
			     <div class="card">
                                                    <div class="card-header">
                                                        <b>BOOK NOW</b>
                                                    </div>
                                                    <div class="card-body card-block">
													


                                                        
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-email" class=" form-control-label"><b>Check in</b></label></div>
                                                                <div class="col-12 col-md-9"><input type="date" name="cn" placeholder="Enter check in date..." class="form-control" min="<?php $date= date("Y-m-d",strtotime("+0 day"));echo $date;?>" required></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label"><b>Check out</b></label></div>
                                                                <div class="col-12 col-md-9"><input type="date" name="co" placeholder="Enter check out date..." class="form-control" min="<?php $date= date("Y-m-d",strtotime("+1 day"));echo $date;?>" required></div>
                                                            </div>
																 <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label"><b>Room Category</b></label></div>
                                                                <div class="col-12 col-md-9"><input type="txt" name="cat"  class="form-control" value="<?php echo $row2['rm_cat']; ?>"></div>
                                                            </div>
															 
																 <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label"><b>Price</b></label></div>
                                                                <div class="col-12 col-md-9"><input type="text" name="txt_Amount" id="txt_Amount"  class="form-control" value="<?php echo $row2['rm_package']; ?>"></div>
                                                           </div>
														   	 
															<div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label"><b>Number of rooms</b></label></div>
                                                                <div class="col-12 col-md-9"><input type="number" value="txt_qty" name="txt_qty" id="txt_qty"  class="form-control" onblur="calc()" required></div>
                                                            </div>
																
																 <div class="row form-group">
                                                                <div class="col col-md-3"><label for="hf-password" class=" form-control-label"><b>Total Price</b></label></div>
                                                                <div class="col-12 col-md-9"><input type="number" value="txt_total" name="txt_total" id="txt_total"  class="form-control" required></div>
                                                            </div>
                                                        
                                                    </div>
													
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm" name="submit" value="submit" a href="payment.php?uid=<?php echo $row['rm_id'];?>">
                                                            <i class="fa fa-dot-circle-o"></i>BOOK</a>
                                                        </button>
                                           
                                                    </div>
													</form>
                                                </div>
			</div>
			</div>
			</div>
			