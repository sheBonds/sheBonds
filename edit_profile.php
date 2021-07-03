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

	if(isset($_POST['editpicture'])){
		//mySQL (Object-oriented)
		$conn = new mysqli($servername, $username, $password, $dbname);
		//get uploaded image
		$newpicture=addslashes(file_get_contents($_FILES['picture']['tmp_name']));
		//get uploaded image name
		$newpicture_name=$_FILES['picture']['name'];
		if($newpicture==false){
			echo "<script>alert('Empty field. No update made.')</script>";		
		}
		else{
			$update_picture = "UPDATE user_details SET UserImage='".$newpicture."' WHERE UserID='$uid'";
			$result_update_picture = $conn->query($update_picture); 
			$update_picture_name = "UPDATE user_details SET UserImageName='".$newpicture_name."' WHERE UserID='$uid'";
			$result_update_picture_name = $conn->query($update_picture_name); 
			if($result_update_picture==true)
			{
				$message="Update profile picture success.";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header("Refresh: 0, my_profile.php");				
			}
			else
			{
				$message="Fail to update profile picture. Please try again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
	}		
	if(isset($_POST['editname'])){
		$newname=$_POST['username'];
		$update_name = "UPDATE user_details SET UserFullName='$newname' WHERE UserID='$uid'";
		$result_update_name = mysqli_query($conn, $update_name);
		if($result_update_name){
			$_SESSION['UserFullName']=$newname;
			$message="Update name success.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Refresh: 0, my_profile.php");
		}
		else{
			$message="Fail to update name. Please try again.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	else if(isset($_POST['editemail'])){
		$newemail=$_POST['email'];
		$update_email = "UPDATE user_details SET UserEmail='$newemail' WHERE UserID='$uid'";
		$result_update_email = mysqli_query($conn, $update_email);
		if($result_update_email){
			$message="Update e-mail success.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("Refresh: 0, my_profile.php");
		}
		else{
			$message="Fail to update e-mail. Please try again.";
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


 
.message-box{

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
      <!-- <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div> -->
      <!-- END LOADER -->

      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row" >

	<button onclick="topFunction()" id="myBtn" title="Go to top"></button>
    
            	
	


		<div class="col-md-0">
    	
    </div>

    <div class="col-md-12">

    	<div class="message-box">

<!-- <hr width="auto" size="10" style="background: #808000"> -->
	<div class="row">
          <div class="col-md-3">
    	
    		</div>
    		<div class="col-md-6">
    	
    		
		<form action="edit_profile.php" method="POST" enctype="multipart/form-data">
			
                 

				
				<div class="form-group">
          			<label for="user" class="font-weight-bold"> New Profile Picture: </label>
          			<input type="file"  class="form-control" name="picture">
          		</div>

          			<input type="submit" name="editpicture" value="Save" >&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset"   name="cancel" value="Cancel">
			
		</form>
		</div>
		<div class="col-md-3">
    	
    		</div>


	</div>
	<!-- <hr width="auto" size="10" style="background-color:  #808000"> -->
	<div class="row">
          <div class="col-md-3">
    	
    		</div>
    		<div class="col-md-6">
		<form action="edit_profile.php" method="POST">
			<!-- <table  class="table" align="center" cellspacing="20px"> -->
				<!-- <tr><th style="text-decoration: underline;"> >>> Edit Name <<< </th></tr> -->
				
				<!-- <tr><td>New Name: <input type="text" name="username" size="30" required ></tr>
 -->

				<!-- <tr> -->
				<div class="form-group">
          			<label for="user" class="font-weight-bold"> New Name:  </label>
					<input type="text" name="username" size="30"   class="form-control"  required>
					</div>
				<!-- </tr> -->

				<input type="submit" name="editname" value="Save">&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset" name="cancel" value="Cancel">
			
		</form>
	</div>
	
          <div class="col-md-3">
    	
    		</div>
    		
	</div>
	<hr width="auto" size="10" style="background: #808000">
	<div class="row">
          <div class="col-md-3">
    	
    		</div>
    		<div class="col-md-6">
		<form action="edit_profile.php" method="POST">
			
			
				<div class="form-group">
          			<label for="user" class="font-weight-bold"> New E-mail:  </label>
					<input type="email" name="email" class="form-control"  required>
					</div>
				

				
				<input type="submit" name="editemail" value="Save">&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" name="cancel" value="Cancel">

			
		</form>
		</div>
          <div class="col-md-3">
    	
    		</div>
    		
	</div>
	<hr width="auto" size="10" style="background: #808000">
	</div>
	</div>
      <div class="col-md-0">
    	
    </div>
	
	</div>

	 
	
	</div>
	</div>
</body>
</html>