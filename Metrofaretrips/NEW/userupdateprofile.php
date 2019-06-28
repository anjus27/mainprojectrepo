<?php
include 'connection.php';
include 'dbconnection.php';
$db= new DbConnection;
session_start();
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
  background-image:url("images1/img_2.jpg");
  background-repeat: no-repeat;
  background-size: cover;
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

body, html {
  height: 100%;
  margin: 0;
}

/* .bg {
  /* The image used */
  background-image: url("../uploads/bag.jpg.");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
} */
</style>

</head>
<body >

<div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
  <p><b>Welcome <?php echo $x['0']?></b></p>
  <div class="header-right">
    <a class="active" href="#home">Home</a> 
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
<form method="post" enctype="multipart/form-data">
<table class="table">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="firstname">FIRST NAME</label>
      <input type="text" class="form-control" id="firstname" value="<?php echo $firstname;?>" readonly="">
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">LAST NAME</label>
      <input type="text" class="form-control" id="lastname" value="<?php echo $lastname;?>" readonly="">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phone">PHONE</label>
      <input type="text" name="phone" id="phone" >
    </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="gender">GENDER</label>
      <select name="gender">
      <option value="">---select---</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      </select>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dob">DATE OF BIRTH</label>
      <input type="date" name="dob" class="form-control" min="1900-01-01" max="2000-12-31" id="dob"  readonly="">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">HOUSE NUMBER</label>
      <input type="text" class="form-control" id="housenumber" value="<?php echo $housenumber;?>">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">LOCALITY</label>
      <input type="text" class="form-control" id="locality" value="<?php echo $locality;?>">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">DISTRICT</label>
      <input type="text" class="form-control" id="district" value="<?php echo $district;?>">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">STATE</label>
      <input type="text" class="form-control" id="state" value="<?php echo $state;?>">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">EMAIL</label>
      <input type="text" class="form-control" id="email" value="<?php echo $email;?>">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">IDPROOF</label>
      <input type="text" class="form-control" id="idproof" value="<?php echo $idproof;?>">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">PROFILEPIC</label>
      <input type="text" class="form-control" id="profilepic" onchange="validateImage()" value="<?php echo $profilepic;?>">
    </div>
    <input type="submit" class="submit" name="submit" value="Update">
  </table>
</form>
</body>
</html>

    <script>
/* ---- PDF FILE UPLOAD VALIDATION --- */
var formOK = false;

function validatePDF(objFileControl){
 var file = objFileControl.value;
 var len = file.length;
 var ext = file.slice(len - 4, len);
 if(ext.toUpperCase() == ".PDF"){
   formOK = true;
 }
 else{
   formOK = false;
   alert("Only PDF files allowed.");
   objFileControl.value="";
 }
}
/*---- IMAGE UPLOAD VALIDATION ---*/

function validateImage() {
    var formData = new FormData();
 
    var file = document.getElementById("img").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("img").value = '';
        return false;
    }
    return true;
}

</script>

<?php
if(isset($_POST['submit'])){

$phone=$_POST['phone'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$housenumber=$_POST['housenumber'];
$locality=$_POST['locality'];
$district=$_POST['district'];
$state=$_POST['state'];
$email=$_POST['email'];
//$idproof=$_POST['idproof'];
//$profilepic=$_POST['profilepic'];

$file_name = $_FILES['tphoto']['name'];

      $file_tmp = $_FILES['tphoto']['tmp_name'];
	 move_uploaded_file($file_tmp,"../uploads/".$file_name);
		 
		  $file_name2 = $_FILES['tresume']['name'];

       $file_tmp2 = $_FILES['tresume']['tmp_name'];
      move_uploaded_file($file_tmp2,"../uploads/".$file_name2);

$sqlUpdate="UPDATE `tbl_userreg` SET `phone`='$phone',`gender`='$gender',`dob`='$dob',`housenumber`='$housenumber',
  `locality`='$locality',`district`='$district',`state`='$state',
  `email`='$email',`idproof`='$file_name',`profilepic`='$file_tmp2'
   WHERE lid='$id'";

  $data=mysqli_query($con,$sqlUpdate) or die(mysqli_error($con));



}
