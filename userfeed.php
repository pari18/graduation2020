<!-- <?php
include('connect.php');
session_start();

$adi= $_SESSION['username'];
$sql = "select * from admin where username = '$adi' ";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
?> -->
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
			<div class="top_menu">
						
							<div class="clearfix"></div>	
								
				</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->

          <div class="container" style="margin-top: 3%;">
           
           <div class="row">
                <h3 align="center" style="background:linear-gradient(to right, #42a5f5, #86c9ff); padding-top:20px; padding-bottom:20px; color:white;">NewsFeed</h3><hr/><br>
				<div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4">
               <div class="w3-row">
   <div class="w3-col m12" >
    <div class="w3-container w3-card w3-white w3-round w3-margin" style="height:auto;"><br>
        <img src="amarUjala.jpg" height="50" width="50" alt="Avatar" class="w3-left w3-circle w3-margin-right">
        <span class="w3-right w3-opacity">1 min</span>
        <h5 style="color:#003d66">AmarUjala pvt. ltd is going to conduct a charity football tournament in Uttar Pradesh</h5><br>
        <hr class="w3-clear">
        <p align="justify">AmarUjala pvt. ltd is going to organise a charity football tournament on 20th June 2018 named as Charity trophy. All the information given by the chairman of Charity trophy Mr. Shishir Dwivedi said that total 36 teams are going to participate in this trophy and that tournament is going to start from 20th June 2018 and the final match is played on 22th Oct 2018. </p>
          <div class="w3-row-padding" style="margin:0 -16px; height:50%; width:100%">
            <div class="w3-half">
             <!-- <img src="/w3images/lights.jpg" style="width:100%; height:40%;" alt="Northern Lights" class="w3-margin-bottom">-->
            </div>
            <div class="w3-half">
              <!--<img src="/w3images/nature.jpg" style="width:100%; height:40%;" alt="Nature" class="w3-margin-bottom">-->
          </div>
        </div><hr>
		<p class="w3-left">ADMIN</p>
        <button type="button" class="w3-button w3-right w3-margin-bottom" data-toggle="modal" data-target="#myModal"><i class="fa fa-comment"></i> Message</button> 
      </div>
    </div>
    </div>
   </div>
 </div>
                <br/>
                <br/>
                <div class="row">
				<div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4 container">
               <div class="w3-row">
   <div class="w3-col m12" >
    <div class="w3-container w3-card w3-white w3-round w3-margin" style="height:auto;"><br>
        <img src="cric.jpg" alt="Avatar" height="50" width="50" class="w3-left w3-circle w3-margin-right">
        <span class="w3-right w3-opacity">1 min</span>
        <h5 style="color:#003d66">Everything is ready for the final match of east zone unversity tournament</h5><br>
        <hr class="w3-clear">
        <p align="justify">As per the news, its all set for the final match between KIIT university V/S Patna university. Both the teams are full of energy and full of experience player like as their captains and all-rounder.

 </p>
          <div class="w3-row-padding" style="margin:0 -16px; height:50%; width:100%">
            <div class="w3-half">
              <img src="kiit.png" style="width:30%; height:30%;" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="patna.jpg" style="width:30%; height:30%;" alt="Nature" class="w3-margin-bottom">
          </div>
        </div><hr>
		<p class="w3-left">ADMIN</p>
        <button type="button" data-toggle="modal" data-target="#myModal" class="w3-button w3-margin-bottom" style="float:right;"><i class="fa fa-comment"></i> Message</button> 
      </div>
    </div>
    </div>
	</div>
            </div>
                    <br/>
                    <br/>
            <div class="row">
				<div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-5 mt-4 container">
                    <div class="w3-row">
   <div class="w3-col m12" >
    <div class="w3-container w3-card w3-white w3-round w3-margin" style="height:auto;"><br>
        <img src="upcomming.png" alt="Avatar" height="50" width="50" class="w3-left w3-circle w3-margin-right">
        <span class="w3-right w3-opacity">1 min</span>
        <h5 style="color:#003d66">National Cricket clubs trails dates are released for upcoming tournaments</h5><br>
        <hr class="w3-clear">
        <p align="justify">As per the news, Trails for the upcoming national clubs cricket tournament are released for all groups likes as U-16, U-19 and seniour teams. Venue for the National trails are scheduled at institute of national club, Bangalore, Karnataka.</p>
          <div class="w3-row-padding" style="margin:0 -16px; height:50%; width:100%">
            <div class="w3-half">
              <!--<img src="/w3images/lights.jpg" style="width:100%; height:40%;" alt="Northern Lights" class="w3-margin-bottom">-->
            </div>
            <div class="w3-half">
             <!--<img src="/w3images/nature.jpg" style="width:100%; height:40%;" alt="Nature" class="w3-margin-bottom">-->
          </div>
        </div><hr>
		<p class="w3-left">ADMIN</p>
        <button type="button" data-toggle="modal" data-target="#myModal" class="w3-button w3-margin-bottom " style="float:right; border:none;"><i class="fa fa-comment"></i> Message</button> 
      </div>
    </div>
                    </div>
                </div>
			</div>
		</div>
    </div>
           <br>
       <br>
       <br>
        <div class="modal fade container-fluid" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="w3-left modal-title">Message</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form action="controller.php" method="post" id="contactForm" validate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" name="name" autocomplete="off" required>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" name="message" required autocomplete="off" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" name="newsmsg">Send Message</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
	</div>
               
           </div>
         
										<footer>
										   <p>&copy 2018 ERP SYSTEM . All Rights Reserved | Design by <a href="index.php" target="_blank">ERP SYSTEM</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span style="color:white; font-size: 1.6em; font-family: Brush Script MT, cursive;">ERP SYSTEM</span>
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down" style="height: 300px;">	
									  <a href="admin.php"><img src="<?php echo $rows['profile']; ?>" height="160" width="160"></a>
									  <a href="profile.php"><span class=" name-caret"><?php echo $rows['name']; ?></span></a>
									<ul>
									<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="adminupdate.php"><span>Update</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.php?Expire"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
<li><a href="user123.php" class="active"><i class="fa fa-tachometer"></i><span>News Feed</span></a></li>
								<li><a href="attendence.php"><i class="fa fa-table"></i><span> View Attendence</span></a></li>
								<li><a href="result.php"><i class="fa fa-file-text-o"></i> <span>Result</span> </a></li>
								<li><a href="assign.php"><i class="lnr lnr-pencil"></i> <span>View Assignment</span></a></li>
								<li><a href="document.php"><i class="lnr lnr-book"></i> <span>View Document</span> </a></li>
                                <li><a href="queries.php"><i class="lnr lnr-envelope"></i> <span>Send Queries</span></a></li>
								<li><a  href="status.php"><i class="lnr lnr-envelope"></i> <span>Query Status</span></a></li>
                                <li><a  href="profile.php"><i class="lnr lnr-envelope"></i> <span>View Profile</span></a></li>

								  </ul>
                    </div></div>
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