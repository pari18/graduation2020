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
$rows = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Student panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<link href="css/w3.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
    
      <style>
        input[type=submit], button {
  background:linear-gradient(to right, #42a5f5, #86c9ff);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit], button:hover {
  background:linear-gradient(to right, #42a5f5, #86c9ff);
}
        table.zebra{font-size:14px;line-height:20px;background:#f7f2e2;border:1px solid #c0b791;border-style:solid solid none none}.zebra tr td,.zebra tr th{padding:5px;border:1px solid #c0b791;border-style:none none solid solid}.zebra tr.even td,.zebra tr.even th,.zebra td.even,.zebra2 tr:nth-child(even) td,.zebra3 tr:nth-child(odd) td{background-color:#faf8ee}.zebra p{margin-bottom:0} 
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




</style>
    
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
     <h3 align="center" style="background:linear-gradient(to right, #42a5f5, #86c9ff); padding-top:20px; padding-bottom:20px; color:white;">View Notes/Document</h3><hr/><br>
<table width="90%" align="center" cellpadding="4" cellspacing="0" class="zebra zebra2">
 <tr>
<th>ID</th>
<th>Subject</th>
<th>Course</th>
<th>Document </th>
<th>Operation</th>
</tr>
 <?php 
error_reporting(0); 
$sql1 = "select * from reg" ;
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_array($result1);
$course = $row["course"];
    
$sql = "select * from notes ";
      $result = $conn->query($sql);
       if ($result->num_rows > 0) {
            while($ro = $result->fetch_assoc()){    
              
                echo "<tr><td>".$ro["id"]."</td><td>".$ro["subject_name"]."</td><td>".$ro["course"]."</td><td>".$ro["docs"]."</td>";
                echo '<td><a href='.$ro["docs"].' download='.$ro["docs"].'><button>Download</button></a></td>';
                echo "</tr>";
            }
        }
    ?> 
</table>
    <br>
    <br>
    <br>
    <br>
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