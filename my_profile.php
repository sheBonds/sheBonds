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

	 $utype=$_SESSION['UserType'];
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$(".dropdown").mouseleave(function () {
			$(".dropdown-content").hide();
		});
	});
	$(document).ready(function () {
		$(".dropdown").mouseenter(function () {
			$(".dropdown-content").show();
		});
	});
	$(document).ready(function () {
		$("#epicture").click(function () {
			window.location = "edit_profile.php#epicture";
		});
	});
	$(document).ready(function () {
		$("#ename").click(function () {
			window.location = "edit_profile.php#ename";
		});
	});
	$(document).ready(function () {
		$("#eemail").click(function () {
			window.location = "edit_profile.php#eemail";
		});
	});
</script>
</head>

<body class="clinic_version">

	<div id="service" class="services wow fadeIn" style="margin-top: 10rem;">
		<div class="container">
			<div class="row message-box">

				<h4 style="text-align: center;">My Profile</h4>

				<form action="edit_profile.php" method="POST">
					<div class="col-lg-4 col-md-4 ">

						<?php
						$user_image = "SELECT UserImage FROM user_details WHERE UserID='$uid'";
						$result_user_image = mysqli_query($conn, $user_image);
						if($result_user_image){
							while($row = mysqli_fetch_array($result_user_image, MYSQLI_ASSOC)){
								echo "<img height=4rem; width:5 rem; style='padding:3rem; ' class='img-responsive card-img' src='data:image/png;base64,".base64_encode($row['UserImage'])."'>";

							}
						}
					?>


					</div>

					<div class="col-lg-8 col-md-8 ">

						<?php
					$read_user = "SELECT * FROM user_details WHERE UserID='$uid'";
				$result_read_user = mysqli_query($conn, $read_user);
					if($result_read_user){
						while($row = mysqli_fetch_array($result_read_user, MYSQLI_ASSOC)){
							?>

						<ul style="text-align: left;">
							<hr width="auto" size="4" style="background: #808000">
							<li><b>User ID: </b>
								<?php echo $row['UserID'] ?>
							</li>

							<li><b>Name: </b>
								<?php echo $row['UserFullName'] ?>
							</li>

							<li><b>Email: </b>
								<?php echo $row['UserEmail'] ;?>
							</li>

							<li><b>Date of Birth : </b>
								<?php echo $row['userdob']; ?>
							</li>

							<li><b>Mobile Number: </b>
								<?php echo $row['userphone']; ?>
							</li>


							<hr width="auto" size="4" style="background: #808000">
						</ul>

						<div class="dropdown">
							<input type="submit" name="editprofile" value="Edit Profile" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1">
							
						</div>


						<?php
						}
					}
				?>

					</div>
				</form>


			</div>


			<?php

		 if ($utype=='Admin'){ 
		 	


		 	$conn = mysqli_connect($servername, $username, $password, $dbname);
				//Read user booking detail
				$read_user_booking = "SELECT * FROM forum  INNER JOIN  user_details  on forum.topic=user_details.Speciality where forum.time = date('d-m-Y')";

				// echo date("Y-m-d");


				$result_read_user_booking = mysqli_query($conn, $read_user_booking);
				if ($result_read_user_booking){
					while($row = mysqli_fetch_array($result_read_user_booking, MYSQLI_ASSOC)){

						// echo "post.php?id=".$row['id'];
						// echo $row['UserID'];
						if($uid==$row['UserID']){
						?>

								<br>
							  <h3 class="desc">Do you like to answer Question posted by <?php echo $row['author']; ?> on <?php echo $row['topic']; ?>

							  <a href="post.php?id=<?php echo $row['id']; ?>" style="color: blue;">yessss
							</a>
							    </h3>

							  
						<?php

					}

					}
				}
				else{
					echo "fail";
				}




		 }

		?>
	</div>
		</div>
	</div>



	<div id="testimonials" class="section wb wow fadeIn">
		<div class="container">
			<div class="row">
				<div id="view" align="center" class=".message-box">
					<p style="padding-top: 30px; text-decoration: underline; font-size: 30px;font-weight: 900">My
						Booking</p>
					<hr>
					<table align="center" cellpadding="6px" class="table table-hover" cellspacing="6px"
						style="background-color:white;">
						<tr>
							<th>No.</th>
							<th>Booking<br>Date & Time</th>
							<th>Event Name</th>
							<th>Event Date</th>
							<th>Event Time</th>
							<!-- <th>Venue</th> -->
						</tr>
						<!--Get all booking record of hte user-->
						<?php
				
				$count=0;
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				//Read user booking detail
				$read_user_booking = "SELECT * FROM booking_details as b, event_details as e WHERE b.UserID='$uid'AND b.EventID=e.EventID AND e.EventDate >= CURDATE()";
				
				$result_read_user_booking = mysqli_query($conn, $read_user_booking);
				if ($result_read_user_booking){
					while($row = mysqli_fetch_array($result_read_user_booking, MYSQLI_ASSOC)){
						$eid=$row['EventID'];
						$count=$count+1;
						echo "<tr>";
						echo "<td>".$count."</td>";
						echo "<td>".$row['BookingTimeStamp']."</td>";
						//Read event detail
						$read_event_detail = "SELECT * FROM event_details WHERE EventID='$eid'";
						$result_read_event_detail = mysqli_query($conn, $read_event_detail);
						if ($result_read_event_detail){
							while($row1 = mysqli_fetch_array($result_read_event_detail, MYSQLI_ASSOC)){
								$vid=$row1['VenueID'];
								echo "<td>".$row1['EventName']."</td>";
								echo "<td>".$row1['EventDate']."</td>";
								echo "<td>".$row1['EventTime']."</td>";
								//Read venue detail
								// $read_venue_detail = "SELECT * FROM venue_details WHERE VenueID='$vid'";
								// $result_read_venue_detail = mysqli_query($conn, $read_venue_detail);
								// if ($result_read_event_detail){
								// 	while($row2 = mysqli_fetch_array($result_read_venue_detail, MYSQLI_ASSOC)){
								// 		echo "<td>".$row2['VenueName']."</td>";
								// 	}
								// }
							}
						}
						echo "</tr>";
					}
				}
			?>
					</table>
				</div>

			</div>
		</div>
	</div>

	<div id="testimonials" class="section wb wow fadeIn">
		<div class="container">
			<div class="row">
				<div id="view" align="center" class=".message-box">
					<p style="padding-top: 30px; text-decoration: underline; font-size: 30px;font-weight: 900">My
						Booking</p>
					<hr>
					<table align="center" cellpadding="6px" class="table table-hover" cellspacing="6px"
						style="background-color:white;">
						<tr>
							<th>No.</th>
							<th>Booking<br>Date & Time</th>
							<th>Event Name</th>
							<th>Event Date</th>
							<th>Event Time</th>
							<!-- <th>Venue</th> -->
						</tr>
						<!--Get all booking record of hte user-->
						<?php
				
				$count=0;
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				//Read user booking detail
				$read_user_booking = "SELECT * FROM booking_details as b, event_details as e WHERE b.UserID='$uid'AND b.EventID=e.EventID AND e.EventDate < CURDATE()";
				$result_read_user_booking = mysqli_query($conn, $read_user_booking);
				if ($result_read_user_booking){
					while($row = mysqli_fetch_array($result_read_user_booking, MYSQLI_ASSOC)){
						$eid=$row['EventID'];
						$count=$count+1;
						echo "<tr>";
						echo "<td>".$count."</td>";
						echo "<td>".$row['BookingTimeStamp']."</td>";
						//Read event detail
						$read_event_detail = "SELECT * FROM event_details WHERE EventID='$eid'";
						$result_read_event_detail = mysqli_query($conn, $read_event_detail);
						if ($result_read_event_detail){
							while($row1 = mysqli_fetch_array($result_read_event_detail, MYSQLI_ASSOC)){
								$vid=$row1['VenueID'];
								echo "<td>".$row1['EventName']."</td>";
								echo "<td>".$row1['EventDate']."</td>";
								echo "<td>".$row1['EventTime']."</td>";
								//Read venue detail
								// $read_venue_detail = "SELECT * FROM venue_details WHERE VenueID='$vid'";
								// $result_read_venue_detail = mysqli_query($conn, $read_venue_detail);
								// if ($result_read_event_detail){
								// 	while($row2 = mysqli_fetch_array($result_read_venue_detail, MYSQLI_ASSOC)){
								// 		echo "<td>".$row2['VenueName']."</td>";
								// 	}
								// }
							}
						}
						echo "</tr>";
					}
				}
			?>
					</table>
				</div>

			</div>
		</div>
	</div>



	<footer id="footer" class="footer-area wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logo padding">
						<p>A place for ladies to ask about, share and discuss their problems. An opportunity to get
							advices
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