<?php
include 'connection.php';
session_start();

if (isset($_POST["submit"])) {
    $email = $_POST["email"];   //username value from the form
    $password=$_POST["password"];
    
   // $st="pending";
    $un = "SELECT `email`,`password`,`status` FROM `login` WHERE email='" . $_POST["email"] . "'  and  password='$password'";
    $r1 = mysqli_query($con, $un);
    $row = mysqli_fetch_array($r1);
    $rr1 = $row["email"];
    $rr2 = $row["password"];
    $rr3=$row["status"];
    if ($rr1 != $email && $rr2 != $password)
     {
        echo"<script>alert('Username or password is wrong ');</script>)";
    }

    else {

        $q = "select * from login where email='" . $_POST["email"] . "' and status=1 and password='$password'";
        $res = mysqli_query($con, $q) or die("error");
        while ($fetch = mysqli_fetch_array($res)) 
        {
            if ($fetch['role'] == 0) 
            {
                $_SESSION['lid'] = $fetch['lid'];
                $_SESSION['role']=$fetch['role'];
                header("location:octopus-master/octopus/adminhome.php");
            }
           elseif ($fetch['role'] == 1) 
           {
            
            $_SESSION['lid'] = $fetch['lid'];
            $_SESSION['name'] = $s;
              if ($fetch['pr_complete'] == 1)
                 {
                    
                    header("location:colorlib-regform-15/completeprofile.php");
                  
               }
            else{
                  header("location:NEW/new.php");
                }
              
             
      
           }
            
             
          
          
            elseif ($fetch['role'] == 2)
                {
                $_SESSION['lid'] = $fetch['lid'];
                header("location:NEW/retailerhome.php");
            }

            elseif ($fetch['role'] == 3)
             {
              if ($fetch['status'] == 'approved')
               {
              $_SESSION['lid'] = $fetch['lid'];
              header("location:../personal/retailerhome.php");
              }
              }
          
           
            else
             {
                echo"please check your username and password";
            }
           
        }
    }
  }



?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="css/oh-autoVal-style.css">
<script src="js/jquery-3.2.1.min.js">
</script>
<script src="js/oh-autoVal-script.js"></script>

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
  background:#010a0138;
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
  background: #010a018c;
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
  background: #010a018c;
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
  background: #f82249; /* fallback for old browsers */
  background: -webkit-linear-gradient(right,#161716,  #b90861);
  background: -moz-linear-gradient(right,#161716, #b90861;
  background: -o-linear-gradient(right,#161716, #b90861);
  background: linear-gradient(to left, #161716 ,#b90861);
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
    <!-- <form class="register-form" method="POST" >
      <input type="text" name="name" placeholder="name"/>
      <input type="password" name="password" placeholder="password"/>
      <input type="text" name="email"placeholder="email address"/>
       <button>create</button> -->
      <!-- <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> --> 
    <form class="login-form" method="POST">
      <input type="text" class="av-email"  av-message="Invalid email" name="email" placeholder="username"/>
      <input type="password" class="av-password" av-message="Invalid password" name="password" placeholder="password"/>
      <button type="submit"   name="submit" value="submit">login</button>
      <p class="message"><a href="mails/forgotpassword.php">Forgot Password   |   </a>  <a href="registration.php">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>
