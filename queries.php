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
<title>Student Panel</title>
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

#myBtn {
  /* display: none; */
  position: fixed;
  bottom: 30px;
  right: 40px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#000066;
  color: white;
  cursor: pointer;
  padding: 10px;
  border-radius: 8px;
}
#test1 {
display:none;
position: fixed;
  bottom: 80px;
  right: 40px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#000066;
  color: white;
  cursor: pointer;
  padding: 5px;
  border-radius: 4px;
};

</style>

<script>
$(document).ready(function() {
	$(".btn").click(function() {
		$("#test1").show();
	});
});

 function myFunction() {
                    var x = document.getElementById("myDIV");
                    if (x.style.display === "none") {
                    x.style.display = "block";
                    } else {
                    x.style.display = "none";
                  }
                }
</script>




    
</head> 
<body bgcolor="grey">
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        									
							<!--/profile_details-->
								<div class="profile_details_left">
									
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
        
<div class="container" style="margin-top: 1%;">
 <div class="row ">
<div class="col-lg-16 mt-lg-0 mt-sm-5 mt-4">
     <h3 align="center" style="background:linear-gradient(to right, #42a5f5, #86c9ff); padding-top:20px; padding-bottom:20px; color:white;">Write your queries</h3><hr/><br>


       <?php error_reporting(0);
        if($_GET['msg']){ 
	    "<h3 style='color:green'>".$_GET['msg']."</h3>";
}
		?>
  <form method="post" action="controller.php" align="left" enctype="multipart/form-data" validate>
      
    <label for="fname">Subject</label>
    <input type="text" name="sub" placeholder="Enter subject of query" required>

	  
    <label for="fname">Your Name</label>
    <input type="text" name="uname" placeholder="Enter your name" required>
      
      
    <label for="lname">Message</label>
      <textarea type="text" name="msg" style="height:100px;" multiple placeholder="Write message for query" required></textarea><br>
	  <input type="hidden" name="uname" value="<?php echo $adi;?>" required>
	  
	  <label for="lname">Upload queries</label>
	  <input type="file" name="pdf" multiple placeholder="select the file">
		

    <input type="submit" value="Submit" name="sendq">
  </form>
      <br>
       <br>
            <br><br><br>
</div>
        </div>   
      
  </div>
           
               </div>
           
<div id='myDIV'>
          <iframe id="test1" allow="microphone;"
            position="relative"
             width="350"
            height="430" src="https://console.dialogflow.com/api-client/demo/embedded/dc66f18b-aadf-4570-b16c-6ee418e352b6">" ></iframe>
            </div>

<button class="btn" id="myBtn" class ="myBtn" onclick="myFunction()">Chat with us</button>

           
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
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="user.php"> <span style="color:white; font-size: 1.6em; font-family: Brush Script MT, ">ERP MODULE</span>
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down" style="height: 230px;">	
									  <a href=""><img src="<?php echo $rows['image']; ?>" height="100" width="100"></a>
									  <a href=""><span class=" name-caret"><?php echo $rows['name']; ?></span></a>
									<ul>
									<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										
										<li><a class="tooltips" href="index.php?Expire"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
                       
								<li><a href="result.php"><i class="fa fa-file-text-o"></i> <span>Result</span> </a></li>
								<li><a href="assign.php"><i class="lnr lnr-pencil"></i> <span>View Assignment</span></a></li>
								<li><a href="document.php"><i class="lnr lnr-book"></i> <span>View Document</span> </a></li>
                                <li><a href="queries.php"><i class="lnr lnr-envelope"></i> <span>Send Queries</span></a></li>
								<li><a  href="status.php"><i class="lnr lnr-envelope"></i> <span>Query Status</span></a></li>
                                <li><a  href="profile.php"><i class="fa fa-user"></i> <span>View Profile</span></a></li>
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