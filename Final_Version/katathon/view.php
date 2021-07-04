
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
/*background-image: url(images/bg-testimonial.png);*/

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <!-- <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div> -->
      <!-- END LOADER -->


       <a href='admin_manage.php'>Back</a>
       

      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">



<?php
if (isset($_POST['View'])) {
			?>
	<table align="center" style="background-color: white;" class="table" cellpadding="20px" cellspacing="6px">
			<tr>
				<th width="4%">No.</th>
				<th width="25%">Name</th>
				<th width="11%">Date</th>
				<th width="11%">Time</th>
				<th width="12%">Category</th>
				
			</tr>

      	<?php
				
				$eid=$_POST['a_eventid'];
					$count=0;
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					$read_event = "SELECT   *  FROM booking_details where EventID='$eid'  ORDER BY BookingID ASC";
					$result_read_event = mysqli_query($conn, $read_event);
					if(mysqli_num_rows($result_read_event)>0){
						while($row = mysqli_fetch_array($result_read_event, MYSQLI_ASSOC)){
							$count=$count+1;
							echo "<tr>";
							echo "<td style='text-align:center'>".$count."</td>";
							echo "<td>".$row['emailid']."</td>";
							echo "<td>".$row['expectations']."</td>";
							echo "<td>".$row['mobileno']."</td>";
							echo "<td>".$row['name']."</td>";
							echo "<tr>";
						}
					}
				?>
			</table>

<?php
}
?>

</div>
</div>
</div>
</body>
</html>
