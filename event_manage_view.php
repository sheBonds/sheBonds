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

	//Read button script
	include "top_button.html";
?>

<!DOCTYPE html>
<html>
<head>
	<title>TARUC Events - View User</title>
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
		a:hover{
			font-size: 24px;
		}
		a{
			color: blue;
		}
		form{
			margin-left: 60px;
			margin-top: 15px;
			margin-right: 60px;
		}
		table{
			max-width: 1200px;
			margin-bottom:50px;
			margin-left:auto;
			margin-right:auto;
			background-color: white;
			text-align:center;
		}
		th{
			background-color: #66CDAA;
			border:1px solid #66CDAA;
			font-size: 18px;
			text-align: center;
			padding: 5px 10px;
		}
		td{
			border:1px solid black;
			font-size: 16px;
			font-family: Times New Roman;
			padding: 5px 5px;
		}
		input[type=submit]{
			padding: 5px;
			color: black;
			border: none;
			background-color: #66CDAA;
			font-weight: 700;
			font-family: Times New Roman;
			font-size: 18px;
			text-align: center;
			width: 100px;
		}
		input[type=submit]:hover{
			background-color: #20B2AA;
		}
		div{
			margin: auto;
			padding-bottom: 20px;
			min-width: 70%;
			max-width: 95%;
			background-color: white;
		}
		hr{
			border-top: 5px dotted grey;
			border-bottom: none;
			border-left: none;
			border-right: none;
			width: 95%;
			padding-top: 10px
		}
	</style>
</head>
<body background="image\bg.png">

	<button onclick="topFunction()" id="myBtn" title="Go to top"></button>

	<!--Sort according to name in ascending/descending order-->
	<!--Sort according to UserID by default-->
	<div id="view" align="center">
		<br>
		<p><span style="text-decoration: underline;font-weight: 900;font-size: 30px"> >>> View All Event <<< </span></p>
		<hr>
		<form action="event_manage_view.php" method="POST" style="font-size: 20px;">
			Event Name: 
			<input type="submit" name="name_asc" value="Ascending">&nbsp;
			<input type="submit" name="name_desc" value="Descending">
			&nbsp;&nbsp;Event Date: 
			<input type="submit" name="date_asc" value="Ascending">&nbsp;
			<input type="submit" name="date_desc" value="Descending">
		</form>
		<hr>
		<table align="center" cellpadding="20px" cellspacing="6px">
			<tr>
				<th width="4%">No.</th>
				<th width="25%">Name</th>
				<th width="11%">Date</th>
				<th width="11%">Time</th>
				<th width="12%">Category</th>
				<th width="4%">Ticket Price</th>
				<th width="4%">Total Ticket</th>
				<th width="4%">Ticket Sold</th>
				<th width="20%">Venue</th>
				<th width="5%">Organizer</th>
			</tr>
			<?php
				if (isset($_POST['name_asc'])) {
					$count=0;
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					$read_event = "SELECT * FROM event_details INNER JOIN venue_details ON event_details.VenueID = venue_details.VenueID WHERE UserID='$uid' ORDER BY EventName ASC";
					$result_read_event = mysqli_query($conn, $read_event);
					if(mysqli_num_rows($result_read_event)>0){
						while($row = mysqli_fetch_array($result_read_event, MYSQLI_ASSOC)){
							$count=$count+1;
							echo "<tr>";
							echo "<td style='text-align:center'>".$count."</td>";
							echo "<td>".$row['EventName']."</td>";
							echo "<td>".$row['EventDate']."</td>";
							echo "<td>".$row['EventTime']."</td>";
							echo "<td>".$row['EventCategory']."</td>";
							echo "<td>".$row['EventTicketPrice']."</td>";
							echo "<td>".$row['EventTicketTotal']."</td>";
							echo "<td>".$row['EventTicketSold']."</td>";
							echo "<td>".$row['VenueName']."</td>";
							echo "<td>".$row['UserID']."</td>";
							echo "<tr>";
						}
					}
				}
				else if (isset($_POST['name_desc'])) {
					$count=0;
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					$read_event = "SELECT * FROM event_details INNER JOIN venue_details ON event_details.VenueID = venue_details.VenueID WHERE UserID='$uid' ORDER BY EventName DESC";
					$result_read_event = mysqli_query($conn, $read_event);
					if(mysqli_num_rows($result_read_event)>0){
						while($row = mysqli_fetch_array($result_read_event, MYSQLI_ASSOC)){
							$count=$count+1;
							echo "<tr>";
							echo "<td style='text-align:center'>".$count."</td>";
							echo "<td>".$row['EventName']."</td>";
							echo "<td>".$row['EventDate']."</td>";
							echo "<td>".$row['EventTime']."</td>";
							echo "<td>".$row['EventCategory']."</td>";
							echo "<td>".$row['EventTicketPrice']."</td>";
							echo "<td>".$row['EventTicketTotal']."</td>";
							echo "<td>".$row['EventTicketSold']."</td>";
							echo "<td>".$row['VenueName']."</td>";
							echo "<td>".$row['UserID']."</td>";
							echo "<tr>";
						}
					}
				}
				else if (isset($_POST['date_asc'])) {
					$count=0;
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					$read_event = "SELECT * FROM event_details INNER JOIN venue_details ON event_details.VenueID = venue_details.VenueID WHERE UserID='$uid' ORDER BY EventDate ASC";
					$result_read_event = mysqli_query($conn, $read_event);
					if(mysqli_num_rows($result_read_event)>0){
						while($row = mysqli_fetch_array($result_read_event, MYSQLI_ASSOC)){
							$count=$count+1;
							echo "<tr>";
							echo "<td style='text-align:center'>".$count."</td>";
							echo "<td>".$row['EventName']."</td>";
							echo "<td>".$row['EventDate']."</td>";
							echo "<td>".$row['EventTime']."</td>";
							echo "<td>".$row['EventCategory']."</td>";
							echo "<td>".$row['EventTicketPrice']."</td>";
							echo "<td>".$row['EventTicketTotal']."</td>";
							echo "<td>".$row['EventTicketSold']."</td>";
							echo "<td>".$row['VenueName']."</td>";
							echo "<td>".$row['UserID']."</td>";
							echo "<tr>";
						}
					}
				}
				else if (isset($_POST['date_desc'])) {
					$count=0;
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					$read_event = "SELECT * FROM event_details INNER JOIN venue_details ON event_details.VenueID = venue_details.VenueID WHERE UserID='$uid' ORDER BY EventDate DESC";
					$result_read_event = mysqli_query($conn, $read_event);
					if(mysqli_num_rows($result_read_event)>0){
						while($row = mysqli_fetch_array($result_read_event, MYSQLI_ASSOC)){
							$count=$count+1;
							echo "<tr>";
							echo "<td style='text-align:center'>".$count."</td>";
							echo "<td>".$row['EventName']."</td>";
							echo "<td>".$row['EventDate']."</td>";
							echo "<td>".$row['EventTime']."</td>";
							echo "<td>".$row['EventCategory']."</td>";
							echo "<td>".$row['EventTicketPrice']."</td>";
							echo "<td>".$row['EventTicketTotal']."</td>";
							echo "<td>".$row['EventTicketSold']."</td>";
							echo "<td>".$row['VenueName']."</td>";
							echo "<td>".$row['UserID']."</td>";
							echo "<tr>";
						}
					}
				}
				else{
					$count=0;
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					$read_event = "SELECT * FROM event_details INNER JOIN venue_details ON event_details.VenueID = venue_details.VenueID WHERE UserID='$uid' ORDER BY EventName ASC";
					$result_read_event = mysqli_query($conn, $read_event);
					if(mysqli_num_rows($result_read_event)>0){
						while($row = mysqli_fetch_array($result_read_event, MYSQLI_ASSOC)){
							$count=$count+1;
							echo "<tr>";
							echo "<td style='text-align:center'>".$count."</td>";
							echo "<td>".$row['EventName']."</td>";
							echo "<td>".$row['EventDate']."</td>";
							echo "<td>".$row['EventTime']."</td>";
							echo "<td>".$row['EventCategory']."</td>";
							echo "<td>".$row['EventTicketPrice']."</td>";
							echo "<td>".$row['EventTicketTotal']."</td>";
							echo "<td>".$row['EventTicketSold']."</td>";
							echo "<td>".$row['VenueName']."</td>";
							echo "<td>".$row['UserID']."</td>";
							echo "<tr>";
						}
					}
				}
			?>
		</table>
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