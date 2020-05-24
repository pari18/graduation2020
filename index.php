<?php
session_start();
include('connect.php');
error_reporting(0);
if(isset($_GET['Expire'])){
session_destroy();
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merienda:700" rel="stylesheet"> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

 input[type=text], input[type=password], input[type=tel], input[type=email], input[type=file], input[type=tel], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

    body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("adi.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
    .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 22px;
  text-decoration: none;
  font-size: 22px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
    .adi{
      width:35%;  
        
    }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body class="bg">
    <div class="topnav" id="myTopnav">
  <a href="index.php" class="" style="float:left;" align="left">ERP</a>
  <!-- <a href="facregis.php">Staff Reg</a> -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
    
    <br>
    <br>
    
    <br>
    <br>
        <div class="container">
            <div class="row">
             <div class="col-sm-6" style="background-color:white; margin-left:23%;">
<form method="post" action="controller.php" >
  <h1 style="font-family: 'Merienda', cursive;font-size: 36px;text-align: center;">Sign In:</h1><hr>
    <br>
     <label for="uname">Username</label>
    <input type="text" id="fname" name="uname" placeholder="Your Username..">

    <label for="pwd">Password</label>
    <input type="password" id="myInput" name="pwd" placeholder="Your Password..">
    <label>
    <input type="checkbox" onclick="myFunction()" name="remember"> Show Your Password
    </label>
    <br>
    <label> <input type="submit" value="Submit" name="login"></label> 
    </form>
    <br>
    <br>
            
     Don't have an account? <a href="registration.php" style="text-decoration:none;">Click Here</a> <a href="#" style="float:right; text-decoration:none;"></a>
            <br><br> 
    <br><script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
        </div>
    </div>
  </div>

</body>
</html>
