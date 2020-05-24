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
<title>Student Panel</title>
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
<link href="css/w3.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->

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



<script>
        
         $(document).ready(function(){
     $("#overlay").hide();
       
    });
$(document).ready(function(){
     $("#overlay").hide();
    $("#team").click(function(){
        $("#overlay").show();
        
         
    });
});
          $(document).ready(function(){
        $("#div1").show();
        $("#div2").hide();
        $("#div3").hide();
        $("#div4").hide();
        $("#div5").hide();  
        $("#div6").hide();
        $("#div7").hide();
        $("#div8").hide(); 
        $("#div9").hide();
        $("#div10").hide();
        $("#div11").hide();
         });
        
    jQuery(function(){
         jQuery('#showall').click(function(){
               jQuery('.targetDiv').show();
        });
        jQuery('.showSingle').click(function(){
              jQuery('.targetDiv').hide();
              jQuery('#div'+$(this).attr('target')).show();
        });
});
    
    </script>    
    
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
				<div class="col-lg-12 right-abw3ls mt-lg-0 mt-sm-6 mt-6">
        <a href="news/tt.png">	<img src="news/tt.png" alt="Avatar"  border-radius= 20px height="300" width="550" class="w3-left w3-margin-right w2-margin-left"></a>
				<hr class="w3-clear">
        <h4 align="center" style="background:linear-gradient(to right, #42a5f5, #86c9ff); padding-top:7px;  padding-bottom:7px; color:white;">External Exams Time Table 2019-2020</h4>
   </div>
 </div>
                
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
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="user.php"> <span style="color:white; font-size: 1.6em; font-family: Brush Script MT, ;">ERP MODULE</span>
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
                                
								<li><a href="result.php"><i class="fa fa-file-text-o"></i> <span>Marks/Result</span> </a></li>
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