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
   
   <?php
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";
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
    

  if (empty($_POST["message"])) {
	$messageErr = "Message is required";
  } else {
	$message = test_input($_POST["message"]);
	if (!preg_match("/^[a-zA-Z0-9 ]*$/",$message)) {
	  $messageErr = "Only numbers, letters and white space allowed"; 
	}else if (strlen($message) > 150){
		$addressErr = "Only 150 characters allowed";
	}
  }
 
 
	if($nameErr == "" &&  $emailErr == "" && $messageErr == "" ){
		$res = saveContact();
		if($res == "SUCCESS"){
			//sendEMail();
			$successMsg = "Thank you for contacting us..!";
			$name = $email = $message = "";
		}
	} 

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function sendEMail() {

/**
$to = "rajadurai.sathish@gmail.com, loganathanece93@gmail.com";
$subject = "test email";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <p.sathishrajadurai@gmail.com>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$msg,$headers);
**/





$to      = 'rajadurai.sathish@gmail.com';
$subject = 'test mail';
$message = 'this is message';
$headers = 'From: loganathanece93@gmail.com' . "\r\n" .
    'Reply-To: loganathanece93@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);






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
function saveContact()
{ 
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$email   = $conn->real_escape_string($_POST['email']);
$message    = $conn->real_escape_string($_POST['message']);

 $res = "FAILURE";
 
 $result = mysqli_query($conn, 
     "CALL sp_contact('" . $name . "','" . $email . "','" . $message . "')") 
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
                        <li >
                           <a href="index.php">Home</a>
                        </li>
                        <li>
                           <a href="about.html">The school</a>
                        </li>
                        <li>
                           <a href="staff.html">Staff</a>
                        </li>
                        <!--<li>
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
                        <li  class="active">
                           <a href="#">Contact Us</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <!-- //header -->
      <marquee style="color:Green;font-size: 150%;font-weight: bold" >  </marquee>
      <div class="banner-bg-gallery">
         <div class="banner-info bg3 inner">
            <h3> உண்மையை அன்பினில் ஆற்றுவோம் </h3>
         </div>
      </div>
      <!-- breadcrumbs -->
      <div class="breadcrumbs-w3l">
         <div class="container">
            <span class="breadcrumbs">
            <a href="index.php">Home</a> |
            <span>Contact</span>
            </span>
         </div>
      </div>
      <!-- //breadcrumbs -->
      <!-- Contact Us -->
      <div class="w3ls-section banner-single">
         <div class="container">
            <h4 class="main-title">contact us</h4>
            <div class="about-inner-main">
               <div class="col-md-12 contact-left">
                  <div class="agile-contact-top">
                     <h4>Address Map </h4>
                    
                  </div>
                  <div class="mb-left-map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d11041.13261152145!2d78.61080086659332!3d9.426475361766938!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57cef31b5c76f2f4!2sSacred+Heart+Higher+Secondary+School!5e1!3m2!1sen!2sin!4v1535526351359" width="100%" height="412" frameborder="0" style="border:0" allowfullscreen></iframe>"
                  </div>
               </div>
              <!-- <div class="col-md-6 w3layouts-reg-form contact-form-row-agileinfo">
                  <h4 class="form-con-txt">Send us a mail</h4>
                  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="banner_form">
                     <div class="contact-form-left contact-field1">
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
                     </div>
                     <div class="contact-form-right contact-field2">
                        <input type="submit" value="send" name="submit" value="Submit">
                     </div>
                     <div class="clearfix"></div>
                     <div class="form-tx contact-field3">
                        <label class="contact-form-text">Message</label>
                           <textarea placeholder="your message" name="message" value="<?php echo $message;?>"></textarea>
						   <span class="error"> <?php echo $messageErr;?></span>
                     </div>
					 <br><br><span style="color:yellow"> <?php echo $successMsg;?></span>
                  </form>
               </div> -->
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <!-- contact -->
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
      <!-- smooth-scrolling-of-move-up-->
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