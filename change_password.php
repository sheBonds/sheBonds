<?php
	//Connect database
	include_once "database/connect.php";
	
	//Read session
	include 'session.php';
	$uid=$_SESSION['UserID'];
	if($uid=='' || $uid==null){
		$message="Please login to continue";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Refresh: 0, login_register.php");
	}

	//To change password
	if (isset($_POST['change'])) {
		$passori = $_POST['original'];
		$passnew = $_POST['new'];
		$passre = $_POST['reenter'];

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		

		//check password reconfirmation
		if (strcmp($passre, $passnew)!==0){
			$message="New password and re-enter password is not same. Please try again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else{
			//read original password
			$read_ori = "SELECT UserPassword FROM user_details WHERE UserID='$uid'";
			$result_read_ori = mysqli_query($conn, $read_ori);
			//compare entered original password and password in database
			if($result_read_ori){
				while($row = mysqli_fetch_array($result_read_ori, MYSQLI_ASSOC)){
					$upass=$row['UserPassword'];
					//If not same, change password fail
					if (strcmp($passori, $upass)!==0){
						$message="Original password is incorrect. Please try again.";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
					//If same, procees with change password
					else{
						$update_password = "UPDATE user_details SET UserPassword='$passre' WHERE UserID='$uid'";
						$result_update_password = mysqli_query($conn, $update_password);
						if ($result_update_password){
							$message="Change password success.";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						else{
							$message="Fail to change password. Please try again.";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
					}
				}	
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- Site Metas -->
<title>She Bonds - Connect her with Experts</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>
<!-- [if lt IE 9] -->

<style type="text/css">
   .message-box {

      border: solid;
      border-color: lightblue;
      color: black;

      background-image: url(images/bg-testimonial.png);

   }

   img {
      border-radius: 30px;
      width: 100%;
      height: auto;
   }

   .dropdown {
      display: inline-block;
      position: relative;
   }

   .dropdown-content {
      display: none;
      position: absolute;
      z-index: 1;
      background: #E0FFFF;
      padding: 5px;
   }

   .dropdown-button {
      display: inline-block;
      width: 100%;
      padding: 5px;
      font-family: Times New Roman;
      font-size: 18px;
      /*background: #E0FFFF;*/
      border-top: none;
      border-left: none;
      border-right: none;
      /*border-bottom: 2px #66CDAA solid;*/
   }

   .dropdown-button:hover {
      background-color: #66CDAA;
   }
</style>

</head>

<body class="clinic_version" style="margin-top:15rem;">
   <div id="service" class="services wow fadeIn">
      <div class="container">
         <div class="row message-box">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <form action="change_password.php" method="POST">

                  <hr>
                  <div class="form-group">
                     <label for="user" class="font-weight-bold"> Current Password: </label>
                     <input type="password" name="original" placeholder="Current Password" class="form-control"
                        required>
                  </div>

                  <div class="form-group">
                     <label for="user" class="font-weight-bold"> New Password: </label>
                     <input type="password" name="new" placeholder="New Password" class="form-control" minlength="8"
                        maxlength="12" required>
                  </div>

                  <br><br>
                  <div class="form-group">
                     <label for="user" class="font-weight-bold">Re-enter New Password: </label>
                     <input type="password" name="reenter" class="form-control" placeholder="Re-enter New Password"
                        required>
                  </div>
                  <br><br><br>
                  <br>
                  <br>

                  <hr>

                  <input type="submit" name="change" value="Save"
                  class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1" >

                  


                  <input type="reset"  name="cancel" value="Cancel" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1">

               </form>
            </div>
            <div class="col-md-3"></div>
         </div>
      </div>
   </div>

   <footer id="footer" class="footer-area wow fadeIn">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="logo padding">
                  <p>A place for ladies to ask about, share and discuss their problems. An opportunity to get advices
                     directly from the doctors' desks. See you around!</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="footer-info padding">
                  <h3>CONTACT US</h3>
                  <p><i class="fa fa-map-marker" aria-hidden="true"></i> Everywhere still besides you</p>
                  <p><i class="fa fa-paper-plane" aria-hidden="true"></i> contact@shebonds.com</p>
                  <p><i class="fa fa-phone" aria-hidden="true"></i> (+91) 9876543210</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="subcriber-info">
                  <h3>SUBSCRIBE</h3>
                  <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                  <div class="subcriber-box">
                     <form id="mc-form" class="mc-form">
                        <div class="newsletter-form">
                           <input type="email" autocomplete="off" id="mc-email" placeholder="Email address"
                              class="form-control" name="EMAIL">
                           <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                           <div class="clearfix"></div>
                           <!-- mailchimp-alerts Start -->
                           <div class="mailchimp-alerts">
                              <div class="mailchimp-submitting"></div>
                              <!-- mailchimp-submitting end -->
                              <div class="mailchimp-success"></div>
                              <!-- mailchimp-success end -->
                              <div class="mailchimp-error"></div>
                              <!-- mailchimp-error end -->
                           </div>
                           <!-- mailchimp-alerts end -->
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <div class="copyright-area wow fadeIn">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="footer-text">
                  <p>© 2021 She Bonds. All Rights Reserved. Made by Code like A Girl with <i class="fa fa-heart"
                        aria-hidden="true"></i></p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="social">
                  <ul class="social-links">
                     <li><a href=""><i class="fa fa-rss"></i></a></li>
                     <li><a href=""><i class="fa fa-facebook"></i></a></li>
                     <li><a href=""><i class="fa fa-twitter"></i></a></li>
                     <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                     <li><a href=""><i class="fa fa-youtube"></i></a></li>
                     <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end copyrights -->

   <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
   <!-- all js files -->
   <script src="js/all.js"></script>
   <!-- all plugins -->
   <script src="js/custom.js"></script>
</body>

</html>