<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <style>
         table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         td, th {
         border: 1px solid #dddddd;
         text-align: center;
         padding: 8px;
         }
         tr:nth-child(even) {
         background-color: #dddddd;
         }
      </style>
      <title> SHHSS </title>
      <!-- for-mobile-apps -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="SHHSS,sacul heart higher secondary school,thiruvarangam,high School"  />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!-- //for-mobile-apps -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <link href="fonts/fontgoogle" rel="stylesheet" type="text/css" >
      <link href="fonts/fontgoogle2" rel="stylesheet" type="text/css" >
   </head>
   <body>
      <!-- header -->
      <div class="w3layouts-header">
         <div class="container">
            <div class="logo-nav-agileits">
               <div class="logo-nav-left">
                  <h1>
                     <a href="index.php">
                     <span class="fa fa-home"></span>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;      திரு இருதய மேல்நிலைப்பள்ளி
                     <span class="logo-title">திருவரங்கம் , முதுகுளத்தூர் தாலுகா, </span>
                     <span class="logo-title"> ராமநாதபுரம் மாவட்டம். </span>
                     <span class="logo-title"> தமிழ்நாடு - 623712  </span>
                     </a>
                  </h1>
               </div>
               <!--<div class="logo-nav-left">
                  <h1>
                  	<a href="index.php">
                  		<span class="fa fa-home"></span>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;      திரு இருதய மேல்நிலைப்பள்ளி
                  		<span class="logo-title">திருவரங்கம் , முதுகுளத்தூர் தாலுகா - ராமநாதபுரம் மாவட்டம். </span>
                  	</a>
                  </h1>
                  </div> -->
               <div class="header-grid-left-wthree">
                  <div class="h3-title">
                     <h3>தொடர்பு</h3>
                  </div>
                  <ul>
                     <li>
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <a href="mailto:info@example.com">info@shhss.in</a>
                     </li>
                     <li>
                        <span class="fa fa-phone" aria-hidden="true"></span>+04576 - 251203
                     </li>
                     <li>
                        <span class="fa fa-mobile" aria-hidden="true"></span>+91 8946005083
                     </li>
                  </ul>
                  <div class="clearfix"> </div>
               </div>
               <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
            <span class="logo-title">  "ஆண்டவரிடம் கொள்ளும் அச்சமே ஞானத்தின் தொடக்கம் - நீதிமொழிகள் 1:7 " </span> 
            <div class="logo-nav-left1">
               <nav class="navbar navbar-default">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                     <ul class="nav navbar-nav">
                        <li >
                           <a href="index.php">Home</a>
                        </li>
                        <li>
                           <a href="about.html">The school</a>
                        </li>
                        <li>
                           <a href="staff.html">Staff</a>
                        </li>
                       <!-- <li>
                           <a href="#">Academics</a>
                        </li>-->
                        <li>
                           <a href="gallery.html" >Gallery</a>
                        </li>
                        <!--<li>
                           <a href="#">Alumni</a>
                        </li>-->
                        <li >
                           <a href="#">Results</a>
                        </li>
                        <li >
                           <a href="contact.php">Contact Us</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <!-- //header -->
  
<?php
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "admin";
 $dbname = "shhss";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
      <!-- track order -->
      <div class="w3ls-section">
         <div class="container">
            <div class="register-top">
               <h5 class="main-title txt-center">Alumni List </h5>
               <br>
               <div class="col-md-12 col-sm-6 register-left">
                  
                  <br>
				  <div style="overflow-x:auto;">
                  <table >
                     <tr>
                        <th> R.No</th>
                        <th> Name </th>
                        <th> Mobile  </th>
						<th> Mail </th>
                        <th> Address  </th>
                     </tr>
					 <?php
					 $conn = Connect();
					  $result = mysqli_query($conn, 
						 "CALL sp_get_alumniList()") 
						 or die("Query fail: " . mysqli_error($conn));
						$rowNumber = 0;
					    while($row = $result->fetch_assoc()) {
							 $rowNumber++;
							 echo "<tr><td>";
							 echo $rowNumber;
							 echo "</td><td>";
							 echo $row["alumni_name"];
							 echo "</td><td>";
							 echo $row["alumni_mobile"];
							 echo "</td><td>";
							 echo $row["alumni_mail"];
							 echo "</td><td>";
							 echo $row["alumni_address"];
							 echo "</td></tr>";
						}
						
						$conn->close();
					 ?>
                  </table>
				  </div>
               </div>
            
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
	  
	  
	  <br><br><br><br><br><br>
      <!-- //track order -->
      <!-- footer -->
      <div class="cpy-footer">
         <div class="cpy-text">
            <p>© 2018 SHHSS. All rights reserved | Design by <a href="http://www.egaisoft.com" target="_blank" class="egai-txt-clr">eGai Soft</a></p>
         </div>
      </div>
      <!--//footer  -->
      <!-- js -->
      <script src="js/jquery-2.2.3.min.js"></script>
      <!-- //js-->
      <!--search-bar-->
      <script src="js/main.js"></script>
      <!--//search-bar-->
      <!-- start-smooth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 1000);
         	});
         });
      </script>
      <!-- //end-smooth-scrolling -->
      <!-- smooth-scrolling-of-move-up -->
      <script>
         $(document).ready(function () {
         	/*
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear' 
         	};
         	*/
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <script src="js/SmoothScroll.min.js"></script>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/bootstrap.js"></script>
   </body>
</html>