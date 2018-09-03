<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title> SHHSS </title>
      <!-- for-mzzzzobile-apps -->
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
	    <!--clients slider  -->
      <link href="css/owl.carousel.css" rel="stylesheet">
      <!-- //clients slider  -->
      <!-- //for-mobile-apps -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <!--banner slider  -->
      <link href="css/JiSlider.css" rel="stylesheet">
      <!-- //banner-slider -->
      <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <link href="fonts/fontgoogle" rel="stylesheet" type="text/css" >
      <link href="fonts/fontgoogle2" rel="stylesheet" type="text/css" >
   </head>
   <body>
   
<?php

$nameErr = $emailErr = $mobileErr = $addressErr = "";
$name = $email = $mobile = $address = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
	$nameErr = "Name is required";
  } else {
	$name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	  $nameErr = "Only letters and white space allowed"; 
	}else if (strlen($name) > 45){
		$nameErr = "Only 45 characters allowed";
	}
  }
  
  if (empty($_POST["email"])) {
	$emailErr = "Email is required";
  } else {
	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  $emailErr = "Invalid email format"; 
	}else if (strlen($email) > 45){
		$emailErr = "Only 45 characters allowed";
	}
  }
	
  if (empty($_POST["mobile"])) {
	$mobileErr = "Mobile no is required";
  } else {
	$mobile = test_input($_POST["mobile"]);
	if (!preg_match("/^[0-9]*$/",$mobile)) {
	  $mobileErr = "Only numbers allowed"; 
	}else if (strlen($mobile) != 10){
		$mobileErr = "Incorrect mobile no";
	}
  }
  if (empty($_POST["address"])) {
	$addressErr = "Address is required";
  } else {
	$address = test_input($_POST["address"]);
	if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
	  $addressErr = "Only numbers, letters and white space allowed"; 
	}else if (strlen($address) > 150){
		$addressErr = "Only 150 characters allowed";
	}
  }
	if($nameErr == "" &&  $emailErr == "" && $mobileErr == "" && $addressErr == "" ){
		$res = saveAlumni();
		if($res == "SUCCESS"){
			$successMsg = "Thank you for your registration..!";
			$name = $email = $mobile = $address = "";
		}else if($res == "ALREADY_EXISTS"){
			$successMsg = "You are already registered the alumni..!";
		}
	} 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

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


<?php
function saveAlumni()
{ 
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$email   = $conn->real_escape_string($_POST['email']);
$mobile    = $conn->real_escape_string($_POST['mobile']);
$address = $conn->real_escape_string($_POST['address']);
//$query   = "INSERT into tbl_alumni (alumni_name,alumni_mobile,alumni_mail,alumni_address) VALUES('" . $name . "','" . $mobile . "','" . $email . "','" . $address . "')";
//$success = $conn->query($query);
 
//if (!$success) {
//    die("Couldn't enter data: ".$conn->error);
 
//}
 $res = "FAILURE";
 
 $result = mysqli_query($conn, 
     "CALL sp_alumni_registration('" . $name . "','" . $email . "','" . $mobile . "','" . $address . "')") 
	 or die("Query fail: " . mysqli_error($conn));
 
    while($row = $result->fetch_assoc()) {
        $res = $row["RESULT"];
		break;
    } 
  
$conn->close();
return $res;

} 

?>
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
                       <li class="active">
                           <a href="#">Home</a>
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
                       <!-- <li>
                           <a href="#">Alumni</a>
                        </li>-->
                        <li>
                           <a href="result.html">Results</a>
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
      <!-- banner -->
      <marquee style="color:Green;font-size: 150%;font-weight: bold" >  </marquee>
      <div class="banner-silder">
         <div id="JiSlider" class="jislider">
            <ul>
               <li>
                  <div class="banner-top banner-top1">
                     <div class="container">
                        <div class="banner-info info2">
                           <h3></h3>
                           <p></p>
                        </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="banner-top banner-top2">
                     <div class="container">
                        <div class="banner-info bg3 info2">
                           <h3></h3>
                           <p></p>
                        </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="banner-top banner-top3">
                     <div class="container">
                        <div class="banner-info bg3">
                           <h3></h3>
                           <p></p>
                        </div>
                     </div>
                  </div>
               </li>
			   <li>
                  <div class="banner-top banner-top4">
                     <div class="container">
                        <div class="banner-info bg3a">
                           <h3></h3>
                           <p></p>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
         <!-- //banner -->
         <!-- banner bottom -->
		 
         <div class="banner-btm">
		 <br><br><br><br><br><br><br><br>
            <div class="container">
               <div class="banner-bottom-main">
                  <div class="col-md-4 banner-btmg1">
                     <div class="form-text">
                        <h3>Alumni Registration</h3>
                        <p> மீண்டும் பள்ளிக்கு போகலாம்  !</p>
                        <img src="images/f1.png" alt="" />
                     </div>
                     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="banner_form" >
                        <div class="sec-left">
                           <label class="contact-form-text">Name</label>
                           <input placeholder="your name " type="text" name="name" value="<?php echo $name;?>">
						   <span class="error"> <?php echo $nameErr;?></span>
                        </div>
                        <div class="sec-right">
                           <label class="contact-form-text">Email</label>
                           <input placeholder="xxx@xx.com " type="email" name="email" value="<?php echo $email;?>">
						   <span class="error"> <?php echo $emailErr;?></span>
                        </div>
                        <div class="sec-left">
                           <label class="contact-form-text">Mobile Number</label>
                           <input placeholder=" Mobile Number" type="text" name="mobile" value="<?php echo $mobile;?>">
						   <span class="error"> <?php echo $mobileErr;?></span>
                        </div>
                        <div class="form-tx">
                           <label class="contact-form-text">Address</label>
                           <input type="text" placeholder="your address" name="address" value="<?php echo $address;?>">
						   <span class="error"> <?php echo $addressErr;?></span>
                        </div>
						<input type="submit" name="submit" value="Submit">
						<br><br><br><span style="color:yellow"> <?php echo $successMsg;?></span>
                     </form>
                  </div>
                  <div class="col-md-8 banner-btm-grid2">
                     <div class="col-md-4 banner-grid2">
                        <div class="banner-subg1">
                           <h3>மேலாண்மை </h3>
                           <p>சிவகங்கை  ஆயர் மேதகு முனைவர்  
						   <p>செ .சூசைமாணிக்கம்  D.D.,STD</p>&nbsp;
                           <span class="fa fa-user" aria-hidden="true"></span>
                            <!-- <div class="read-btn">
                              	<a href="about.html">view more</a> 
                              </div>-->
                        </div>
                        <div class="banner-subg1">
                           <h3>தலைமையாசிரியர்</h3>
                           <p> திரு. கு . அருளானந்து எம். எஸ்சி .,எம்.எட் .,எம்.பில்., </p>
						   <p  class="visibility-hidden-alt">சிவகங்கை  ஆயர் மேதா குரு முனைவர் </p>
                           <span class="fa fa-user" aria-hidden="true"></span>
                             <!-- <div class="read-btn">
                              	<a href="about.html">view more</a> 
                              </div>-->
                        </div>
                     </div>
                     <div class="col-md-4 banner-grid2">
                        <div class="banner-subg1 thal">
                           <h3> தாளாண்மை </h3>
                        
						      <p>அருள்பணி ஆ . சிங்கராயர் எம். ஏ .,எம். ஏ ., </p>
							    <p class="visibility-hidden-alt">சிவகங்கை  ஆயர் மேதா குரு முனைவர்       </p>
                           <span class="fa fa-user" aria-hidden="true"></span>
                             <!-- <div class="read-btn">
                              	<a href="about.html">view more</a> 
                              </div>-->
                        </div>
                        <div class="banner-subg1">
                           <h3>தொலைநோக்குப் பார்வை </h3>
                           <p>  " கிராமப்புற மாணவர்களின் ஒருங்கிணைந்த மேம்பாடு மற்றும் சமூக மாற்றத்திற்காக அவர்களை மேம்படுத்தல் " </p>
                           <span class="fa fa-gg" aria-hidden="true"></span>
                             <!-- <div class="read-btn">
                              	<a href="about.html">view more</a> 
                              </div>-->
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
		   <!--  valluvar -->
         <div class="w3ls-section">
            <div class="container">
			
			
               <div class="main-bottom">
                  <div class="col-md-6 col-sm-6 mb-left-2">
                  </div>
                  <div class="col-md-6 col-sm-6 mb-right">
				  <h5 class="main-title txt-center font-size-alt" >  அதிகாரம்: கல்வி  </h5><br>
				  			 <pre>
ஒருமைக்கண் தான்கற்ற கல்வி ஒருவற்கு
எழுமையும் ஏமாப் புடைத்து.
                           - திருவள்ளுவர்
					   </pre>
                     <p>
		
					   மு.வ  உரை:
ஒருவன் ஒரு பிறவியில் கற்ற கல்வி, அவனுக்கு ஏழு பிறப்பிலும் - எழும் பிறவிதோறும் கூடவே சென்று உதவும்.
                     </p>
                  </div>
               </div>
			   

			
			
            </div>
         </div>
         <!--  //valluvar -->
         <!--  abj -->
         <div class="w3ls-section">
            <div class="container">
               <div class="main-bottom">
                  <div class="col-md-6 col-sm-6 mb-left">
                  </div>
                  <div class="col-md-6 col-sm-6 mb-right">
                     <p>
                        If you fail, never give up because FAIL means  <br> "First Attempt In Learning" <br>
                        END is not the end, If fact END means <br>  "Effort Never Dies" <br>
                        If you get NO as an answer, remember NO means  <br> "Next Opportunity" <br>
                        protect all your home appliances & systems. <br>
						
						- A.P.J. Abdul Kalam
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!--  //abj -->
         <!-- footer -->
         <div class="cpy-text">
            <p>© 2018 SHHSS. All rights reserved | Design by <a href="http://www.egaisoft.com" target="_blank" class="egai-txt-clr">eGai Soft</a></p>
         </div>
      </div>
      <!--//footer  -->
      <!-- js -->
      <script src="js/jquery-2.2.3.min.js"></script>
      <!-- //js-->
      <!--banner-slider-->
      <script src="js/JiSlider.js"></script>
      <script> 
         $(window).load(function () {
         	$('#JiSlider').JiSlider({
         		color: '#fff',
         		start: 1,
         		reverse: false
         	}).addClass('ff')
         })
      </script>
      <!-- //banner-slider -->
	     <!-- clients slider-->
      <script src="js/owl.carousel.js"></script>
      <script>
         $(document).ready(function () {
         	$("#owl-demo").owlCarousel({
         		items: 1,
         		lazyLoad: true,
         		autoPlay:true,
         		navigation: true,
         		navigationText: false,
         		pagination: true,
         	});
         });
      </script>
      <!-- //clients slider-->
      <!--search-bar-->
      <script src="js/main.js"></script>
      <!--//search-bar-->
      <!-- start-smooth-scrolling -->
      <script  src="js/move-top.js"></script>
      <script  src="js/easing.js"></script>
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

      <script  src="js/SmoothScroll.min.js"></script>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/bootstrap.js"></script>
   </body>
</html>