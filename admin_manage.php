<?php
//Connect database
	include "database/connect.php";

	//Read session
	include 'session.php';
	$uid=$_SESSION['UserID'];
	if($uid=='' || $uid==null){
		$message="Please login to continue";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("Refresh: 0, login_register.php");
	}

	
		//Manage Event
	    if (isset($_POST['addevent'])) {
			header('Refresh: 0; event_manage.php#add');
		}
		else if (isset($_POST['Edit'])) {

			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Refresh: 0; event_manage_edit.php');
		}
		else if (isset($_POST['delete'])) {
			header('Refresh: 0; event_manage.php#delete');
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
<title>Life Care - Responsive HTML5 Multi Page Template</title>
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
	/*body{
	font-size: 20px;
	font-family: sans-serif;
	color: #333;
}*/
	.question {
		font-weight: 600;
	}

	.answers {
		margin-bottom: 20px;
	}

	.answers label {
		display: block;
	}

	#submit {
		font-family: sans-serif;
		font-size: 20px;
		background-color: #279;
		color: #fff;
		border: 0px;
		border-radius: 3px;
		padding: 20px;
		cursor: pointer;
		margin-bottom: 20px;
	}

	#submit:hover {
		background-color: #38a;
	}

	.message-box {

		border: solid;
		border-color: lightblue;
		color: black;
		background-color: white;
		border-radius: 2rem;
		/*background-image: url(images/bg-testimonial.png);*/

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
		$("#ename").click(function () {
			window.location = "event_manage_edit.php#editname";
		});
	});
	$(document).ready(function () {
		$("#edate").click(function () {
			window.location = "event_manage_edit.php#editdate";
		});
	});
	$(document).ready(function () {
		$("#etime").click(function () {
			window.location = "event_manage_edit.php#edittime";
		});
	});
	$(document).ready(function () {
		$("#ecategory").click(function () {
			window.location = "event_manage_edit.php#editcategory";
		});
	});
	$(document).ready(function () {
		$("#edescription").click(function () {
			window.location = "event_manage_edit.php#editdescription";
		});
	});
	$(document).ready(function () {
		$("#evenue").click(function () {
			window.location = "event_manage_edit.php#editvenue";
		});
	});
	$(document).ready(function () {
		$("#eprice").click(function () {
			window.location = "event_manage_edit.php#editticketprice";
		});
	});
	$(document).ready(function () {
		$("#etotal").click(function () {
			window.location = "event_manage_edit.php#edittickettotal";
		});
	});
</script>
</head>

<body class="clinic_version">
	<div id="service" class="services wow fadeIn">
		<div class="container">
			<div class="row">
				<?php $count=0;
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					$read_event = "SELECT * FROM event_details  WHERE UserID='$uid' ORDER BY EventName ASC";
					$result_read_event = mysqli_query($conn, $read_event);
					if(mysqli_num_rows($result_read_event)>0){



						while($row = mysqli_fetch_array($result_read_event, MYSQLI_ASSOC)){
							//$count=$count+1;

								  ?>
				<form action='' method='POST'>
					//$row['UserID']

					<div class="message-box ">

						<br>

						<h4 style="height: 20px;">
							<div class="form-group">
								<input style="border: none ; text-align: center;" class='event_name'
									class="form-control" id="joineventname" type='text' name='joineventname'
									value='<?php echo $row["EventName"] ; ?>'>
							</div>

						</h4>

						<hr width="auto" size="4" style="background: #808000">

						<div class="row">
							<div class="col-lg-5 ">
								<img style="padding: 2rem; " id="img"
									src="https://thumbs.dreamstime.com/z/selection-various-paleo-diet-products-healthy-nutrition-balanced-food-background-148722795.jpg"
									class="img-responsive card-img">

							</div>
							<div class=" col-lg-7  ">
								<div class="form-group">

									<textarea class="form-control" class='event_name' id="EventDescription"
										name="EventDescription" row="10"><?php
                          	echo $row['EventDescription'] ;
                           		?>'</textarea>

								</div>
								<ul style="text-align: left;">
									<hr width="auto" size="4" style="background: #808000">
									<li><b>Date: </b>
										<div class="form-group">

											<input style="border: none ; text-align: center;" class='event_name'
												class="form-control" id="EventDate" type='Date' name='EventDate'
												value='<?php echo $row["EventDate"] ; ?>'>

										</div>

									</li>
									<li><b>Time: </b>
										<div class="form-group">

											<input style="border: none ; text-align: center;" class="form-control"
												id="EventTime" type='Time' name='EventTime'
												value='<?php echo $row["EventTime"] ; ?>'>

										</div>


									</li>
									<li><b>Duartion: </b>
										<div class="form-group">

											<input style="border: none ; text-align: center;" class="form-control"
												id="EventDuration" type='number' name='EventDuration'
												value='<?php echo $row["EventDuration"] ; ?>'>

										</div>


									</li>
									<li><b>Total Ticket: </b>
										<div class="form-group">

											<input style="border: none ; text-align: center;" class="form-control"
												id="EventTicketTotal" type='number' name='EventTicketTotal'
												value='<?php echo $row["EventTicketTotal"] ; ?>'>

										</div>
									</li>

									<li><b>Sold Ticket: </b>
										<?php echo $row['EventTicketSold'] ;?>
									</li>
									<li><b>Duration: </b>
										<?php echo $row['EventTime'] ;?>
									</li>

									<li><b>Platform : </b>
										<?php echo $row['VenueName']; ?>
									</li>

									<li><b>Price: </b>
										<?php echo $row['EventTicketPrice']; ?>
									</li>

									<li><b>Category: </b>
										<?php echo ['EventCategory'];?>
									</li>

									<li><b>PreRequi: </b>
										<?php echo ['EventCategory']; ?>
									</li>
									<hr width="auto" size="4" style="background: #808000">

								</ul>

							</div>
						</div>
						<hr width="auto" size="4" style="background: #808000">
						<input type="submit" value="Edit" name='Edit' id="submitButton" class="btn small"
							title="Submit Your Message!">

						<input type="submit" value="Delete" name='Delete' id="submitButton" class="btn small"
							title="Submit">
						<br>
						<br>
					</div>
				</form>
				<?php
               	}}
			?>
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