<?php
include('connect.php');
session_start();
if($_SESSION['uname']=="")
{
  header("location:index.php");
  exit(0);
}
$adi= $_SESSION['uname'];
$sql = "select * from reg where username = '$adi' ";
$result = mysqli_query($conn, $sql);
$row123 = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>User Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
<style>


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
<body>
<div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						       
						<div class="container" style="margin-top: 1%;">
           <div class="row">
              <h2  align="center" style=" padding-top:2px; padding-bottom:2px; color:white;"> View Profile</h2>
						</div>
						</div>		
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
   
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="user.php">Home</a></li>
											<li class="active">Profile</li>
										</ol>
									   </div>
								    <!--//sub-heard-part-->
										<!--/profile-->
										<h3 class="sub-tittle pro">Profile</h3>
									       <div class="profile-widget">
														<img src="<?php echo $row123['image']; ?>" alt=" " />
														<h2><?php echo $row123['name']; ?></h2>
														<p>Admin</p>
													</div>
														<!--/profile-inner-->
														 <div class="profile-section-inner">
														       <div class="col-md-4 profile-info">
																	<h3 class="inner-tittle">Personal Information </h3>
																	<div class="main-grid3">
																     <div class="p-20">
																		<div class="about-info-p">
																			<strong>Full Name</strong>
																			<br>
																			<p class="text-muted"><?php echo $row123['name']; ?></p>
																		</div>
																		<div class="about-info-p">
																			<strong>Mobile</strong>
																			<br>
																			<p class="text-muted"><?php echo $row123['mobileno']; ?></p>
																		</div>
																		<div class="about-info-p">
																			<strong>Email</strong>
																			<br>
																			<p class="text-muted"><a href="mailto:info@example.com"><?php echo $row123['email']; ?></a></p>
																		</div>
																		<div class="about-info-p m-b-0">
																			<strong>Location</strong>
																			<br>
																			<p class="text-muted"><?php echo $row123['enroll_id'];?></p>
																		</div>
																	</div>
																 </div>

                                                             </div>
                                                                   
															   <div class="col-md-6 profile-info two">
															   <h3 class="inner-tittle">Activity </h3>
																<div class="main-grid3 p-skill">
														
																		<ul class="timeline">
																			<li>
																			  <div class="timeline-badge info"><i class="fa fa-smile-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a href="profile.html"><?php echo $row123['name']; ?></a></h4>
																				</div>
																				<div class="timeline-body">
																			
																				  <p>Uploaded  <i class="fa fa-picture-o"></i></p>
																				</div>
																			  </div>
																			</li>
																			<li>
																			  <div class="timeline-badge primary"><i class="fa fa-star-o"></i></div>
																			  <div class="timeline-panel">
																				<div class="timeline-heading">
																				   <h4 class="timeline-title"><a href="profile.html"><?php echo $row123['name']; ?></a></h4>
																				</div>
																				<div class="timeline-body">
																				   
																				  <p>Uploaded  <i class="fa fa-picture-o"></i></p>
																				</div>
																			  </div>
																			</li>
																			<li>
																			 
																		</ul>
																		<div class="clearfix"></div>		
																	</div>
																</div>
																</div>
																<div class="clearfix"></div>
															</div>
															
											 	<!--//profile-inner-->
												<!--//profile-->
									</div>
									<!--//outer-wp-->
													
<div id='myDIV'>
          <iframe id="test1" allow="microphone;"
            position="relative"
             width="350"
            height="430" src="https://console.dialogflow.com/api-client/demo/embedded/dc66f18b-aadf-4570-b16c-6ee418e352b6">" ></iframe>
            </div>

<button class="btn" id="myBtn" class ="myBtn" onclick="myFunction()">Chat with us</button>

										
									 <!--footer section start-->
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
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span style="color:white; font-size: 1.6em; font-family: Brush Script MT, ">ERP MODULE</span>
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down" style="height: 230px;">	
									  <a href="admin.php"><img src="<?php echo $row123['image']; ?>" height="100" width="100"></a>
									  <a href="profile.php"><span class=" name-caret"><?php echo $row123['name']; ?></span></a>
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