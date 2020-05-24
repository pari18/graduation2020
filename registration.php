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
 select, textarea {
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
    background-attachment: fixed;
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
  <a href="index.php" class="" style="float:left;" align="left">ERP SYSTEM</a>
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
             <div class="col-sm-8" style="background-color:white; margin-left:20%;">
<form method="post" action="controller.php" enctype="multipart/form-data">
  <h1 style="font-family: 'Merienda', cursive;font-size: 36px;text-align: center;">Sign Up For Students:</h1><hr>
    <br>
    <label for="email">Full Name:</label>
    <p><input type="text" class="form-control" name = "name" id="email" required></p>
     <label for="email">Enrollment ID:</label>
    <p><input type="text" class="form-control" name = "enroll" id="email" required></p>
    <label for="pwd">Course:</label>
 <p>  <select name = "course" id="pwd" required>
        <option value="select"> Select Course</option>
        <option value="M.TECH">M.TECH (INTEGRATED)</option>
        <option value="MCA">MCA</option>
        </select></p>
     <label for="pwd">Semester:</label>
    <p><select class="form-control" name = "sem" id="pwd" required>
        <option value="select"> Select Semester</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        </select></p>
      <label for="pwd">Email:</label>
    <input type="email" placeholder="Email..."  name="email">
    <label for="pwd">Mobile Number:</label>
    <p><input type="tel" placeholder="Contact number..."  name="mob"></p>
    <label for="pwd">Upload Image:</label>
    <input type="file" placeholder="Contact number..."  name="image">
    <label for="pwd">Username:</label>
    <p><input type="text" placeholder="Username..." name="uname" required></p>
    <label for="pwd">Password:</label>
    <p><input type="password" placeholder="password..."  name="pwd" required></p>
    
    <br>
    <label> <input type="submit" value="Submit" name="aditya"></label> 
    </form>
    <br>
    <br>
     <hr>       
    Already have an account? <a href="index.php" style="text-decoration:none;">Click Here</a> 
            <br><br>
    <br>
        </div>
    </div>
  </div>

</body>
</html>
