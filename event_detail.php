<?php
	//Connect database
	include "database/connect.php";
	
	//Read session
	include 'session.php';

	//Read button script
	include "top_button.html";

	//Join any event
	if(isset($_POST['join'])){
		//Go login page if not login
		if($login_status=="no"){
			$message="Please login to continue.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Refresh: 0; login_register.php");
		}

		//Purchase ticket to join event, Only ONE booking per user
		else if ($login_status=="yes"){
			$ename=$_POST['joineventname'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			$expect=$_POST['expect'];
			$mobileno=$_POST['mobileno'];
			

			//echo $ename . $name. $email.$expect.$mobileno;

			$message="Please login to continue.";
			echo "<script type='text/javascript'>alert('$ename');</script>";

			//Read selected event ID
			$read_eventid = "SELECT EventID FROM event_details WHERE EventName='$ename'";
			$result_read_eventid = mysqli_query($conn, $read_eventid);
			if($result_read_eventid){
				while($row = mysqli_fetch_array($result_read_eventid, MYSQLI_ASSOC)){
					$eid=$row['EventID'];
				}
			}

			//Check if user purchased ticket for the event
			$read_book_record = "SELECT * FROM booking_details WHERE UserID='$uid' AND EventID='$eid'";
			$result_read_book_record = mysqli_query($conn, $read_book_record);
			$number_of_rows = mysqli_num_rows($result_read_book_record);
			//If purchased
			if($number_of_rows>0){
				$message="Sorry, you purchased the ticket for the event. Only one ticket can be purchased by each user for an event.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header("Refresh: 0; events.php");
			}
			//If not purchase, check ticket availability
			else{
				$read_ticket_info = "SELECT EventTicketTotal, EventTicketSold from event_details WHERE EventID='$eid'";
				$result_read_ticket_info = mysqli_query($conn, $read_ticket_info);
				if($result_read_ticket_info){
					while($row = mysqli_fetch_array($result_read_ticket_info, MYSQLI_ASSOC)){
						$tickettotal=$row['EventTicketTotal'];
						$ticketsold=$row['EventTicketSold'];
						//If ticket sold is equal to total number of ticket, booking fail
						if($ticketsold==$tickettotal){
							$message="Oops! Tickets sold out! Try to be fast next time!";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						//Else, update ticket sold, then insert booking detail
						else{
							//main
							$currentsoldticket = $ticketsold+1;
							$update_ticket_sold = "UPDATE event_details SET EventTicketSold=$currentsoldticket WHERE EventID='$eid'";
							$result_update_ticket_sold = mysqli_query($conn, $update_ticket_sold);
							if($result_update_ticket_sold){
								date_default_timezone_set('Asia/Kolkata');
								$current_time = date('Y-m-d H:i:s');
								$insert_booking = "INSERT INTO booking_details (BookingTimeStamp, UserID, EventID, emailid,expectations ,mobileno,name) VALUES ('$current_time', '$uid', '$eid','$email','$expect','$mobileno','$name' ) ";
								$result_insert_booking = mysqli_query($conn, $insert_booking);
								if($result_insert_booking){

					    			$message="Ticket purchase success. You can check your booking details at 'My Booking'.";
									echo "<script type='text/javascript'>alert('$message');</script>";

									header("Refresh: 0; events.php");	
								}
								else{
									$message="Ticket purchase fail. Please try again. Back to the home page.";
									echo "<script type='text/javascript'>alert('$message');</script>";
								}
							}
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
   .overlay {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.7);
      transition: opacity 500ms;
      visibility: hidden;
      opacity: 0;
   }

   .overlay:target {
      visibility: visible;
      opacity: 1;
   }

   .popup {
      margin: 70px auto;
      padding: 20px;


      border-radius: 5px;
      width: 60%;
      height: 80%;
      position: relative;
      transition: all 2s ease-in-out;
   }

   .popup .close {
      position: absolute;
      top: 20px;
      right: 30px;
      transition: all 200ms;
      font-size: 30px;
      font-weight: bold;
      text-decoration: none;
      color: #333;
   }

   .popup .content {
      max-height: 30%;
      overflow: auto;
   }

   .card h3 {
      font-weight: 600;
   }

   .card img {
      position: absolute;
      top: 20px;
      right: 15px;
      max-height: 120px;
   }


   .card-2 {
      border: solid;
      border-color: lightblue;
      color: black;

      background-image: url(images/bg-testimonial.png);
      /*background-image: url(images/service-bg.png);
     background-repeat: no-repeat;
    background-position: bottom;
    background-size: 100px;*/
   }

   .message-box {

      border: solid;
      border-color: lightblue;
      color: black;

      background-image: url(images/bg-testimonial.png);

   }

   #but {
      background: linear-gradient(to right, #1d86df 0%, #39b49a 100%);
      border: none;
      margin-top: 15px;
      margin-bottom: 5px;
      color: #fff;
      padding: 8px 30px;
      border-radius: 50px;
      transition: ease all 1s;
      font-weight: 600;
   }
</style>
</head>

<body class="clinic_version">
   <!-- LOADER -->
   <div id="preloader">
      <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
   </div>
   <!-- END LOADER -->

   <div id="service" class="services wow fadeIn">
      <div class="container" style="margin-top: 80px;">
         <a href='events.php' data-scroll class="global-radius" style="color: white; float: right;"><i
               class="fa fa-chevron-left fa-2x" aria-hidden="true"></i></a>
         <div class="heading">
            <h2>Event Details</h2>
         </div>

         <div class="search" style="text-align: center; justify-content: center; align-items: center;">
            <form action="event_detail.php" method="POST">
               <input type="text" size="40" name="searchevent" placeholder="Which event are you looking for?"
                  style="font-size: 16px;" />
               <input type="submit" name="search" value="Search"
                  class="btn btn-medium btn-radius btn-brd btn1 effect-2" />
            </form>

         </div>

         <hr width="auto" size="4" style="background: #808000">
         <div class="content" align="center">
            <?php
                  $searchkey='-';

                  if(((isset($_POST['search'])) && ($_POST['searchevent'] != ""))){
                     $searchkey=$_POST['searchevent'];
                  }
                  else if (isset($_POST['more_detail'])){
                     $searchkey=$_POST['eventname'];
                  }
                  else{
                     $searchkey='-';
                  }
               
                  $conn = mysqli_connect($servername, $username, $password, $dbname);

               $read_DB = "SELECT * FROM event_details INNER JOIN venue_details ON event_details.VenueID = venue_details.VenueID WHERE event_details.EventName LIKE '$searchkey%'";
               $result = mysqli_query($conn, $read_DB);
               //Display related result and details
               if(mysqli_num_rows($result)>0){

            ?>
            <form action='event_detail.php' method='POST'>
               <?php

                  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

                  $uid= $row['UserID'];
                  echo $uid;
                  $speakerDetails="SELECT * FROM `user_details`  where  `user_details`.`UserID`= '$uid'";
                  
                     $speakerDetailsrun=mysqli_query($conn, $speakerDetails);
                  
                  $speakerDetailsresult=mysqli_fetch_assoc($speakerDetailsrun);

                     echo $speakerDetailsresult['UserID'];
               ?>

               <div class="message-box ">
                  <br>

                  <h4 style="height: 20px;">
                     <input style="border: none ; text-align: center;" class='event_name' id="joineventname" type='text'
                        name='joineventname' value='<?php echo $row["EventName"] ; ?>' hidden>
                     <?php echo $row["EventName"] ; ?>

                  </h4>
                  <hr width="auto" size="4" style="background: #808000">

                  <div id="bor" class="row">
                     <div class="col-lg-5 ">
                        <img style="padding: 2rem; " id="img"
                           src=" <?php
                        echo $row['EventImageLink'];
                     ?>"
                           alt="loding" class="img-responsive card-img">

                     </div>

                     <div class=" col-lg-7  ">
                        <p class="lead" style="text-align: justify ; margin: 2rem;">
                           <?php
                        echo $row['EventDescription'];
                     ?>
                        </p>

                        <ul style="text-align: left;">
                           <hr width="auto" size="4" style="background: #808000">
                           <li><b>Speaker : </b>
                              <?php echo $speakerDetailsresult['UserFullName'] ?>
                           </li>

                           <li><b>Date: </b>
                              <?php echo $row['EventDate'] ?>
                           </li>

                           <li><b>Duration: </b>
                              <?php echo $row['EventTime'] ;?>
                           </li>

                            <li><b>Duration: </b>
                              <?php echo $row['EventDuration']." hours "; ?>
                           </li>

                           <li><b>Platform : </b>
                              <?php echo "Google Meet /Zoom"; ?>
                           </li>

                           <li><b>Tickets Left: </b>
                              <?php echo $row['EventTicketTotal']- $row['EventTicketSold']; ?>
                           </li>

                          

                           <li><b>Category: </b>
                              <?php echo $row['EventCategory'];?>
                           </li>

                           <li><b>PreRequi: </b>
                              <?php echo $row['EventPrerequisite']; ?>
                           </li>
                           <hr width="auto" size="4" style="background: #808000">
                        </ul>

                     </div>
                  </div>


                  <hr width="auto" size="4" style="background: #808000">
                  <!-- <input type="submit" name="#message" value="Book Seat!"
                  class="btn btn-light btn-radius btn-brd grd1 effect-1" /> -->
                  <button type="submit" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1"data-toggle="modal"
                     data-target="#message">Book Seat!</button>

                  <!-- <input onclick=" #myModal" id="submitButton" class="btn small" title="Register!"> -->
                  <br>
                  <br>


                  <div id="message" class="modal fade" role="dialog">
                     <div class="modal-dialog">

                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 style="height: 20px;">
                                    <input style="border: none ; text-align: center;" class='event_name'
                                       id="joineventname" type='text' name='joineventname'
                                       value='<?php echo $row["EventName"] ; ?>' hidden>
                                    <?php echo $row["EventName"] ; ?>

                                 </h4>
                           </div>
                           <div class="modal-body">
                              <form action="event_detail.php" class="bg-light" method="post">
                                
                                 <div class="form-group">
                                    <label for="user" class="font-weight-bold"> Name: </label>
                                    <input type="text" name="name" class="form-control" id="name" autocomplete="off"
                                       required>
                                    <span id="username" class="text-danger font-weight-bold"> </span>

                                 </div>


                                 <div class="form-group">
                                    <label class="font-weight-bold"> Email: </label>
                                    <input type="text" name="email" class="form-control" id="email" autocomplete="off"
                                       required>
                                    <span id="emailids" class="text-danger font-weight-bold"> </span>
                                 </div>



                                 <div class="form-group">
                                    <label class="font-weight-bold"> Mobile no: </label>
                                    <input type="Number" name="mobileno" class="form-control" id="mobileno"
                                       autocomplete="off" required>
                                    <span id="mobilenos" class="text-danger font-weight-bold"> </span>
                                 </div>

                                 <div class="form-group">
                                    <label for="user" class="font-weight-bold">What you Expect from the session :
                                    </label>
                                    <input type="text" name="expect" class="form-control" id="expect"
                                       autocomplete="off">
                                    <span id="expect" class="text-danger font-weight-bold"> </span>

                                 </div>

                                 <input type="submit" name="join" value="submit" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1"
                                    autocomplete="off">


                              </form>
                           </div>
                           <div class="modal-footer">
                              <button type="submit" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1" name="join" class="btn btn-default"
                                 data-dismiss="modal">Cancle</button>
                           </div>
                        </div>

                     </div>
                  </div>

                  <!-- Model end -->
               </div>
               <?php
               }
            ?>
            </form>
            <?php
               }
            ?>
         </div>

      </div>
   </div>

   <script>
      function register() {
         var eventname = document.getElementById("joineventname");
         var btn = document.getElementById("btn");
         if (checkBox.checked == true) {
            btn.style.display = "block";
         } else {
            btn.style.display = "none";
         }
      }
   </script>

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