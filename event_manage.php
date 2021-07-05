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
   <style type="text/css">
.card{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
}

/*.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}*/

.card h3{
  font-weight: 600;
}

.card img{
  position: absolute;
  top: 20px;
  right: 15px;
  max-height: 120px;
}


.message-box{

   border: solid;
  border-color: lightblue;
  color: black;
 background-color: white;
 
/background-image: url(images/bg-testimonial.png);/

}
.ee{
  border:solid;
   border-color: lightblue;
  /background-color: lightblue;/
background-image: url(images/service-bg.png);
}


@media(max-width: 990px){
  .card{
    margin: 20px;
  }
} </style>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <!-- <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div> -->
      <!-- END LOADER -->
  

      
         
       
      <div id="service" class="services wow fadeIn" style="margin-top: 15rem;">
         <div class="container">
            <div class="row">

	


	  <div class="col-md-12 col-lg-12 col-xlg-12">
       


               				


	<div class="message-box">
		<button onclick="topFunction()" id="myBtn" title="Go to top"></button>
		<form action="event_manage.php#add" style="padding: 2rem;"method="POST">
			<h4>Add New Event </h4> 
			
                     <div class="form-group">
                      <label for="formGroupExampleInput">Enter Event Name: </label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Forum Heading Here" name="a_eventname" required>
                    </div>


		<!-- 	Name: <input type="text" name="a_eventname" size="35" required> -->
                       <div class="form-group">
                      
                      <label for="formGroupExampleInput"> Date , Duaration & Time (24-hour format): </label>

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
					 <input type="number"  class="form-control" name="a_eventduration" min="1" max="10" placeholder="Event Duaration" required>
				
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
 
					 <br><textarea class="form-control"  name="a_eventdescription" rows="5" cols="50" required style="text-align: justify"></textarea>
					
					 	</div>

				 <div class="col-md-6">
							
					<label>Select Category</label>
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
				 <input type="text"  class="form-control" name="a_eventprerequisite"  placeholder="Prerequisite" required>
				</div>
					 <div class="col-md-4">	
					<label>Event Image Link</label>
				 <input type="text"  class="form-control" name="a_eventemagelink"  placeholder="EventImageLink" required>
				</div>
				 <div class="col-md-4">	

				 <label>Number of Ticket: </label>
					<input type="number" class="form-control" name="a_eventtickettotal" min="10" placeholder="10" required>
				</div>


				</div>
			</div>

				

				
                 
                 <div class="row">
                 	
                 	<div class="col-md-3">
                 	</div>
                  <div class="col-md-3">	
				  <input type="submit" name="addevent" value="Add"  class="btn small" title="Submit Your Message!">
				  	</div>
				  	 <div class="col-md-3">	
				<input type="reset" class="btn small" name="cancel" value="Cancel">
					</div>
					<div class="col-md-3">
					</div>
					</div>
			
		</form>
	</div>

</div>


 <div class="col-md-12 col-lg-12 col-xlg-12">
<hr width="auto" size="10" style="background: #808000">
  <div class="message-box">
	
		<h4> Delete Event </h4>
		<form action="event_manage.php#delete" method="POST">
		
				

					<label>Select Event: </label>
            
					<select  class="form-control"name="delete_event_name">
						<?php
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							$read_event ="SELECT * FROM event_details  WHERE UserID='$uid' ORDER BY EventName ASC";
							$result_read_event = mysqli_query($conn, $read_event);
							if(mysqli_num_rows($result_read_event)>0){
								while($row = mysqli_fetch_array($result_read_event, MYSQLI_ASSOC)){
									echo "<option value='".$row[EventName]."'>".$row[EventName]."</option>";
								}
							}
						?>
					</select>
				&nbsp;&nbsp;


				<input type="submit" name="refreshevent" value="Refresh"></td></tr>
				<tr><td><input type="submit" name="deleteevent" value="Delete">&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset" name="cancel" value="Cancel"></td></tr>
		</form>
	</div>
 </div>
	</div>
</div>
</div>

	<!--Each button's action-->
	<?php
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		if (isset($_POST['addevent'])) {
			$ename=$_POST['a_eventname'];
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

			// echo $ename.'-'.$edate.'-'.$etime.'-'.$ecategory.'-'.$edescription.'-'.$ecategory.'-'.$eventduration.'-'.$etotal.'-'.$eimagelink;

					$insert_event = "INSERT INTO  `event_details` ( `EventName`,  `EventDate`,  `EventTime`,  `EventCategory`,  `EventDescription`,  `EventImageLink`, `EventDuration`, `EventPrerequisite` , `EventTicketTotal`,  `UserID`) VALUES ('$ename', '$edate', '$etime', '$ecategory', '$edescription', '$eimagelink','$eventduration','$eventprerequisite', '$etotal',  '$uid')";
					$result_insert_event = mysqli_query($conn, $insert_event);
					if($result_insert_event){
    					$message="Add new event success.";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
					else{
						$message="Fail to add new event. Please try again.";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
			
			
		}

		if (isset($_POST['deleteevent'])) {
			$selectname=$_POST['delete_event_name'];
			//Read event id
			$read_event_id = "SELECT EventID FROM event_details WHERE EventName='$selectname'";
			$result_read_event_id = mysqli_query($conn, $read_event_id);
			if($result_read_event_id){
				while($row = mysqli_fetch_array($result_read_event_id, MYSQLI_ASSOC)){
					$eid=$row['EventID'];
					//Check if any booking was made
					//If one or more booking found, delete fail
					$check_booking="SELECT EventID FROM booking_details WHERE EventID='$eid'";
					$result_check_booking = mysqli_query($conn, $check_booking);
					if(mysqli_num_rows($result_check_booking)>0){
						$message="Fail to delete event. One or more booking found.";
						echo "<script type='text/javascript'>alert('$message');</script>";
					}
					else{
						$delete_event = "DELETE FROM event_details WHERE EventID='$eid'";
						$result_delete_event = mysqli_query($conn, $delete_event);
						if($result_delete_event){
							$message="Delete event success.";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						else{
							$message="Fail to delete event. Please try again.";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
					}
				}
			}
		}
	?>



</body>
</html>