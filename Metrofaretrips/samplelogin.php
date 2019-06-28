<?php>
include 'connection.php';
session_start();
if (isset($_POST['submit']))
{
   //echo"hai";
   $email=$_POST["email"];
   // $ps=$_POST["pwd"];   //username value from the form
   // $pwd=md5($_POST["pwd"]);
   $password=$_POST["password"];
   //$password=md5($_POST["pwd"]);
   $un="SELECT `email`,`password` FROM `login` WHERE `email`='$email' and `password`='$password'";
         $rq1=mysqli_query($con,$un);
         $row=mysqli_fetch_array($rq1);
 $rrs1=$row["email"];
 $rrs2=$row["password"];
 if ($rrs1!=$email && $rrs2!=$password )
 {
     echo"<script>alert('Username or password is wrong ');</script>)";
 }
 else {
     
//password value from the form
   $sql="select * from `login` where email='$email' and password='$password'"; //value querried from the table
         //echo $sql;
   $res=mysqli_query($con,$sql); 
   //query executing function

   if($res)
   {
     if($fetch=mysqli_fetch_array($res)) // role means user , for admin set to 0 and for user set to
     {
      		if($fetch['role']==1 AND $fetch['status']==1)   
		{
			 $_SESSION['lid']=$fetch['lid'];	// setting username as session variable
                  header("location:../adminhome.php");	//home page or the dashboard page to be redirected
            	}

     else if($fetch['role']==2 AND $fetch['status']==1) // role means user , for admin set to 0 and for user set to
     {
       $_SESSION['lid']=$fetch['lid'];	// setting username as session variable
                  header("location:../userhome.php");	//home page or the dashboard page to be redirected
      }

  else if($fetch['role']==3 AND $fetch['status']==1) // role means user , for admin set to 0 and for user set to
     {
       $_SESSION['lid']=$fetch['lid'];	// setting username as session variable
                  header("location:../userhome.php");	//home page or the dashboard page to be redirected
      }
     //    else if($fetch['role']==3 AND $fetch['status']==1) // role means user , for admin set to 0 and for user set to
     // {
     //   $_SESSION['l_id']=$fetch['l_id'];	// setting username as session variable
     //              header("location:stagemgrhome.php");	//home page or the dashboard page to be redirected
     //  }
      
      }
     


      }
	else
	{
             echo"<script>alert('Username or password is wrong ');</script>)";
	}
 }
	
}


?>




<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>
<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" name="name" placeholder="name"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="text" name="email"placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="registration.php">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>
