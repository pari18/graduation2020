<?php
include('connect.php');
session_start();
if($_SESSION['uname']=="")
{
  header("location:index.php");
  exit(0);
}
$adi= $_SESSION['uname'];
error_reporting(0);
$sql = "select * from reg where username = '$adi' ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ERP SYSTEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
    
    <style>
input[type=text], select, textarea, input[type=file] {
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
  background:linear-gradient(to right, #42a5f5, #86c9ff);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background:linear-gradient(to right, #42a5f5, #86c9ff);
}

.container {
  width:50%;
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}
</style>
    
</head> 
<body>
<div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
					
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
					<!-- //header-ends -->
            <div class="container" style="margin-top: 3%;">
            <div id="div1" class="targetDiv">
       <h3 align="center" style="background:linear-gradient(to right, #42a5f5, #86c9ff); padding-top:20px; padding-bottom:20px; color:white;">Response Query</h3><hr/><br>
       <?php error_reporting(0);
        if($_GET['msg']){ 
	    "<h3 style='color:green'>".$_GET['msg']."</h3>";
}
		?>
        </div>

            <form method="post" action="controller.php" align="left" enctype="multipart/form-data" validate>
			<label for="fname">Student Name</label>
    <input type="text" name="uname" placeholder="Enter Student name" required>
      
	<label for="fname">Subject</label>
    <input type="text" name="sub" placeholder="Enter Subject" required>
      
            <label for="lname">Message</label>
      <textarea type="text" name="msg" style="height:100px;" multiple placeholder="Write message for query" required></textarea><br>
	  <input type="hidden" name="uname" value="<?php echo $adi;?>" required>
      
    <input type="submit" value="Submit" name="sendqresponse">
           
               </div>
			   
    <footer>
										  								<footer>
																		  <p> ERP @ All Rights Reserved | Design by <a href="index.php" target="_blank">International Institute Of Professional Studies DAVV</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
				<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="staff.php"> <span style="color:white; font-size: 1.6em; font-family: Brush Script MT,;">ERP MODULE</span>
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down" style="height: 230px;">	
									  <a href="admin.php"><img src="<?php echo $row123['image']; ?>" height="100" width="100"></a>
									  <a href="profile.php"><span class=" name-caret"><?php echo $row123['name']; ?></span></a>
									<ul>
									<li><a class="tooltips" href="sprofile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										
										<li><a class="tooltips" href="index.php?Expire"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
                                
								<li><a href="addmark.php"><i class="fa fa-table"></i><span>Add Marks</span></a></li>
								<li><a href="upassig.php"><i class="fa fa-file-text-o"></i> <span>Upload Assignment</span> </a></li>
								<li><a href="upnotes.php"><i class="lnr lnr-pencil"></i> <span>Share Document/Notes</span></a></li>
                                <li><a href="viewq.php"><i class="lnr lnr-envelope"></i> <span>View Queries</span></a></li>
                                <li><a  href="sprofile.php"><i class="fa fa-user"></i> <span>View Profile</span></a></li>
								  </ul>
                        </div>
                    </div>
							  <div class="clearfix"></div>	
							<script>

						var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											toggle = !toggle;
										});
							</script>


<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
           
           















