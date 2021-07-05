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

 



		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		 if (isset($_POST['update'])) {
			$ename=$_POST['a_eventname'];
			$eid=$_POST['a_eventid'];
			$eyear=$_POST['a_eventyear'];
			$emonth=$_POST['a_eventmonth'];
			$eday=$_POST['a_eventday'];
			$ehour=$_POST['a_eventhour'];
			$eminute=$_POST['a_eventminute'];
			$edescription=$_POST['a_eventdescription'];
			$ecategory=$_POST['a_eventcategory'];
			$eimagelink=$_POST['a_eventemagelink'];
			$eventprerequisite=$_POST['a_eventprerequisite'];
			$eventduration=$_POST['a_eventduration'];
			//$eprice=$_POST['a_eventticketprice'];
			$etotal=$_POST['a_eventtickettotal'];

			//Add '0' to month
			if(($emonth>0) && ($emonth<10)){
				$emonth='0'.$emonth;
			}
			//Add '0' to day
			if(($eday>0) && ($eday<10)){
				$eday='0'.$eday;
			}
			//Add '0' to hour
			if(($ehour>-1) && ($ehour<10)){
				$ehour='0'.$ehour;
			}
			//Add '0' to minute
			if(($eminute>-1) && ($eminute<10)){
				$eminute='0'.$eminute;
			}

			$edate=$eyear.'-'.$emonth.'-'.$eday;
			$etime=$ehour.':'.$eminute.':00';

			// echo $ename.'-'.$edate.'-'.$etime.'-'.$ecategory.'-'.$edescription.'-'.$ecategory.'-'.$eventduration.'-'.$etotal.'-'.$eimagelink.'-'.$eid;

					
						
						$update_name=" UPDATE `event_details` SET `EventName`='$ename',  `EventDate`='$edate',  `EventTime`='$etime',  `EventCategory`='$ecategory',  `EventDescription`='$edescription',  `EventImageLink`='$eimagelink', `EventDuration`='$eventduration', `EventPrerequisite`='$eventprerequisite' , `EventTicketTotal`='$etotal' WHERE `event_details`.`EventID` = '$eid'";

			// $update_name=" UPDATE event_details SET EventName='$ename', `EventDate`='$edate' WHERE `event_details`.`EventID` = '$eid'";


						$result_update_name = mysqli_query($conn, $update_name);
						if($result_update_name){
							$message="Update event name success.";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						else{
							$message="Fail to update event name. Please try again.";
							echo "<script type='text/javascript'>alert('$message');</script>";
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


 /*body{
	font-size: 20px;
	font-family: sans-serif;
	color: #333;
}*/
.question{
	font-weight: 600;
}
.answers {
  margin-bottom: 20px;
}
.answers label{
  display: block;
}
#submit{
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
#submit:hover{
	background-color: #38a;
}

.message-box{

   border: solid;
  border-color: lightblue;
  color: black;
 background-color: white;
 border-radius: 2rem;
/background-image: url(images/bg-testimonial.png);/

}


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
   </head>
   <body class="clinic_version">

      <div id="service" class="services wow fadeIn" style="margin-top: 140px;">
         <a href="event_manage.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1 center">Add Event</a>
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


								 
							
<div class="message-box ">

	<div class="row">

			 <div class="col-md-4 col-lg-4 col-xlg-4">
			 	<br>
			 	<br>
			 	<br>
			 	<img  style="padding: 2rem; height:25rem;"class="" id="img" src="<?php echo $row['EventImageLink'];?>"  class="img-responsive card-img">
			 </div>
                        


              <div class="col-md-8 col-lg-8 col-xlg-8">

            	          

        		<form action="admin_manage.php" style="padding: 2rem;"method="POST">
						<h4>Edit Event </h4> 
			          
			          <input type="text"  value="<?php echo $row['EventID']; ?>"  name="a_eventid" hidden>

			          <?php echo $row['EventID']; ?>


                     <div class="form-group">
                      <label for="formGroupExampleInput">Enter Event Name: </label>
                      <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $row['EventName']; ?>"  name="a_eventname" required>
                    </div>


		<!-- 	Name: <input type="text" name="a_eventname" size="35" required> -->
                       <div class="form-group">
                      
                      <label for="formGroupExampleInput"> Date , Duaration & Time (24-hour format): </label>
                       <label>Time : <?php echo $row['EventTime']; ?></label>
                       <label>Date : <?php echo $row['EventDate']; ?></label>

                        <div class="row">
			            <div class="col-md-2">
			            
						<input type="number" name="a_eventyear" min="2019" max="2050"  class="form-control"placeholder="YYYY" required></div>
						 
						 <div class="col-md-2">
						<input type="number" class="form-control" name="a_eventmonth" min="01" max="12" placeholder="MM" required> </div>
						<div class="col-md-2">
						<input type="number" class="form-control" name="a_eventday" min="01" max="31" placeholder="DD" required>
						</div>
						<div class="col-md-2">
							
						<!-- <label>Event Duaration</label> -->
					 <input type="number"  class="form-control" name="a_eventduration" value="<?php echo $row['EventDuration'] ;?>"min="1" max="10" placeholder="Event Duaration" required>
				
						</div>

						<div class="col-md-2">
						<input type="number" class="form-control" name="a_eventhour" min="00" max="24" placeholder="HH" required> 
						</div>
						<div class="col-md-2">
						<input type="number" class="form-control" name="a_eventminute" min="00" max="60" placeholder="MM" required>
						</div>
						</div>

						</div>


						

                    <div class="form-group">
                    <div class="row">
			            <div class="col-md-6">
                      <label for="formGroupExampleInput">Event Description:</label>
 
					 <br><textarea class="form-control"  name="a_eventdescription"  rows="5" cols="50" required style="text-align: justify"><?php echo $row['EventDescription'];?></textarea>
					
					 	</div>

				 <div class="col-md-6">


							
					<label>Selected Category : <?php echo $row['EventCategory']; ?></label>
		            <select class="form-control" name="a_eventcategory" id="select">
		              <option value="Breast Cancer">Breast Cancer</option>
		              <option value="Reproductive Health">Reproductive Health</option>
		              <option value="Men">Exercise and Fitness</option>
		              <option value="Exercise and Fitness">Diet</option>
		              <option value="Mental Health">Mental Health</option>
		              <option value="Fertility Issues">Fertility Issues</option>
		              
		              <option value="Others">Others</option>
		            </select>
		        		</div>
		        	</div>
		        </div>

				

				<div class="form-group">
				<div class="row">
			            <div class="col-md-4">	
					<label>Event Prerequisite</label>
				 <input type="text"  class="form-control" name="a_eventprerequisite" value="<?php echo $row['EventPrerequisite'] ;?>" placeholder="Prerequisite" required>
				</div>
					 <div class="col-md-4">	
					<label>Event Image Link</label>
				 <input type="text"  class="form-control" name="a_eventemagelink" value="<?php echo $row['EventImageLink'];?>" placeholder="EventImageLink" required>
				</div>
				 <div class="col-md-4">	

				 <label>Number of Ticket: </label>
					<input type="number" class="form-control" name="a_eventtickettotal" value="<?php echo $row['EventTicketTotal']; ?>" min="10" placeholder="10" required>

					<label>Number  Ticket Sold: <?php   echo$row['EventTicketSold']; ?> </label>
				</div>


				</div>
			</div>

				

				
                 
                 <div class="row">
                 	
                 	<div class="col-md-3">
                 	</div>
                  <div class="col-md-3">	
				  <input type="submit" name="update" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1" value="update"  class="btn small" title="Submit Your Message!">
				  	</div>
				   <div class="col-md-3">	
				 	<!-- <input type="reset" class="btn small" name="cancel" value="Cancel"> --> 
					</div>
					 <div class="col-md-3">	
				 	
					</div>

					</form>




					
					
					</div>


<form action="view.php" style="padding: 2rem;"method="POST">
			
			          

			          <input type="text"  value="<?php echo $row['EventID']; ?>"  name="a_eventid" hidden>
					<input type="submit" class="btn small" name="View" value="View" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1">
				</form>



 						


 						<!-- <input onclick=" #myModal" id="submitButton" class="btn small" title="Register!"> -->

<!-- Model -->
















			
		


				

               </div>


        		

</div>




</div>




 <br>
                            <br>
                            <br>
                            <br>
                            



   







               <?php

               	}
               }
				
			?>


               






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