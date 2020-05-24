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
  <a href="facregis.php">Staff Reg</a>
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
  <h1 style="font-family: 'Merienda', cursive;font-size: 36px;text-align: center;">Sign Up For Staff:</h1><hr>
    <br>
    <label for="email">Full Name:</label>
    <p><input type="text" class="form-control" name = "name" id="email"></p>
     <label for="email">Employee ID:</label>
    <p><input type="text" class="form-control" name = "emp" id="email"></p>
    <label for="pwd">Subject to be taught:</label>
 <p> <select class="form-control" name = "sub1" id="pwd" required>
        <option value="select"> Select Subject</option>
        <option value="JAVA">JAVA</option>
        <option value="DIGITAL COMPUTER ORGANIZATION">DIGITAL COMPUTER ORGANIZATION</option>
        <option value="NUMERICAL ANALYSIS DESIGN">NUMERICAL ANALYSIS DESIGN</option>
        <option value="DATABASE MANAGEMENT SYSTEM">DATABASE MANAGEMENT SYSTEM</option>
        <option value="SYSTEM PROGRAMMING">SYSTEM PROGRAMMING</option>
        <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
        <option value="WEBITECHNOLOGY">WEBITECHNOLOGY</option>
        <option value="C++">C++</option>
        <option value="C-PROGRAMMING">C-PROGRAMMING</option>
        <option value="DISCRETE MATHMATICS">DISCRETE MATHMATICS</option>
        </select></p>
       <p> <select class="form-control" name = "sub2" id="pwd" required>
        <option value="select"> Select Subject</option>
        <option value="select"> Select Subject</option>
        <option value="JAVA">JAVA</option>
        <option value="DIGITAL COMPUTER ORGANIZATION">DIGITAL COMPUTER ORGANIZATION</option>
        <option value="NUMERICAL ANALYSIS DESIGN">NUMERICAL ANALYSIS DESIGN</option>
        <option value="DATABASE MANAGEMENT SYSTEM">DATABASE MANAGEMENT SYSTEM</option>
        <option value="SYSTEM PROGRAMMING">SYSTEM PROGRAMMING</option>
        <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
        <option value="WEBITECHNOLOGY">WEBITECHNOLOGY</option>
        <option value="C++">C++</option>
        <option value="C-PROGRAMMING">C-PROGRAMMING</option>
        <option value="DISCRETE MATHMATICS">DISCRETE MATHMATICS</option>
        </select></p>
       <p> <select class="form-control" name = "sub3" id="pwd" required>
        <option value="select"> Select Subject</option>
        <option value="JAVA">JAVA</option>
        <option value="DIGITAL COMPUTER ORGANIZATION">DIGITAL COMPUTER ORGANIZATION</option>
        <option value="NUMERICAL ANALYSIS DESIGN">NUMERICAL ANALYSIS DESIGN</option>
        <option value="DATABASE MANAGEMENT SYSTEM">DATABASE MANAGEMENT SYSTEM</option>
        <option value="SYSTEM PROGRAMMING">SYSTEM PROGRAMMING</option>
        <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
        <option value="WEBITECHNOLOGY">WEBITECHNOLOGY</option>
        <option value="C++">C++</option>
        <option value="C-PROGRAMMING">C-PROGRAMMING</option>
        <option value="DISCRETE MATHMATICS">DISCRETE MATHMATICS</option>
        </select></p>
     <label for="pwd">Designation:</label>
    <p><select class="form-control" name = "deg" id="pwd" required>
        <option value="select"> Select Semester</option>
        <option value="Professor">Professor</option>
        <option value="Asst. Professor">Asst. Professor</option>
        <option value="Doctrate">Doctrate</option>
        <option value="Head of Department">Head of Department</option>
        
        </select></p>
 <label for="id">Email</label>
    <p><input type="text" class="form-control" name="email" ></p>
   <label for="id">Profile Image</label>
   <p> <input type="file" class="form-control" name="image" ></p>
    <label for="id">Mobile Number</label>
  <p>  <input type="text" class="form-control" name="mob" id="email"></p>
     <label for="id">Status</label>
    <p>  <select class="form-control" id="sel1" name="status">
         <option value="select"> Select Status</option>
        <option value = "Permanent">Permanent</option>
        <option value="Visiting">Visiting</option>
         </select></p>
 <label for="id">Username</label>
    <p><input type="text" class="form-control" name="uname" id="email"></p>
   <label for="id">Password</label>
   <p> <input type="password" class="form-control" name="pwd" id="image"></p>
  
    <br>
    <label> <input type="submit" value="Submit" name="richa"></label> 
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
