 <?php
 session_start();
  //Connect database
  include_once "database/connect.php";
    
  //To register user
  if (isset($_POST['register'])) {
    $uid = $_POST['userid'];
    $upass = $_POST['userpass'];
   $upass1 = $_POST['userpass1'];
    $uname = $_POST['username'];
    $utype = "Student";
    $uemail = $_POST['useremail'];
    $udob = $_POST['date'];
     $uage = $_POST['age'];
      $uphone = $_POST['phone'];
    $upicture = file_get_contents("image/DefaultUserAvatar.jpg");
    $upicture = mysqli_real_escape_string($conn, $upicture);

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $insert_user = "INSERT INTO user_details (UserID, UserFullName, UserPassword, UserType, UserEmail, UserImage,userphone,userdob,userage) VALUES ('$uid', '$uname', '$upass', '$utype', '$uemail', '$upicture',' $uphone','$udob','$uage')";

    //check password reconfirmation
    if (($upass!=$upass1)){
      $message="Password and re-enter password is incorrect. Please try again.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else{
      $result_insert_user = mysqli_query($conn, $insert_user);
      if($result_insert_user){
          $message="Register success. You can login now.";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
      else{
        $message="Registration fail. Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
  }

  //To check entered details, login user, and retrieve user name and type
  if (isset($_POST['login'])) {
    $uid = $_POST['userid'];
    $upass = $_POST['userpass'];
    echo $uid;
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $read_DB = "SELECT * FROM user_details WHERE UserID='$uid' AND UserPassword='$upass'";
    $result = mysqli_query($conn, $read_DB);
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        //Compare string to check entered password and database record. Case sensitive.
        if (strcmp($upass, $row['UserPassword']) == 0) { 
            session_start();
          $_SESSION['UserFullName'] = $row['UserFullName'];
          $_SESSION['UserID'] = $row['UserID'];
           $_SESSION['UserNo'] = $row['UserNo'];

          $_SESSION['UserType'] = $row['UserType'];

          $_SESSION['UniqueId'] = $row['UserNo'];
          $message="Login Success.";
          echo "<script type='text/javascript'>alert('$message');</script>";
          header("Refresh: 0; home.php");
          } 
        else { 
            $message="Login Fail. Please try again.";
          echo "<script type='text/javascript'>alert('$message');</script>";
        } 
      }
    }
    else{
      $message="Login Fail. Please try again.";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
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
  <style>
    .login_button{
      font-family: Times New Roman;
      color: black;
      font-size: 26px;
      font-weight: 900;
      width: 50%;
      text-align: center;
      border: none;
      background-color: #66CDAA;
      padding: 8px 0px;
      display: inline-block;
    }
    .register_button{
      font-family: Times New Roman;
      color: black;
      font-size: 26px;
      font-weight: 900;
      width: 50%;
      text-align: center;
      border: none;
      background-color: white;
      padding: 8px 0px;
      display: inline-block;
    }
    
    
    .register-active{
      z-index: 2;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
       $(document).ready(function(){
          $(".home").click(function(){
            window.location="home.php";
          });
      });
     

     function login(){
      $(".register_button").css('background-color','white');
            $(".login_button").css('background-color','#66CDAA');
       document.getElementById('log').innerHTML=`<form method="POST"  action="login_register.php">

                        
                        

                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              

                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="userid">User Id</label>
                                   <input type="text" class="form-control" id="text" name="userid" placeholder="Your UserId">


                                   <label for="password">Password</label>
                                   <input type="password" class="form-control" id="password" name="userpass" placeholder="Password">
                                    

                              </div>

                               
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button  name="login"
                                       value="login" type="submit">Register</button></div>
                                    </div>
                                 </div>
                              </div>
                         </div>
                   </form>`;

     

     }

     function register(){
      $(".login_button").css('background-color','white');
            $(".register_button").css('background-color','#66CDAA');
       document.getElementById('log').innerHTML=`<form method="POST"  action="login_register.php">

                        
                        

                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <div class="col-md-12 col-sm-12">
                                   <label for="name">Name</label>
                                   <input type="text" class="form-control" id="name" name="username" placeholder="Full Name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <label for="email">Email</label>
                                   <input type="email" class="form-control" id="email" name="useremail" placeholder="Your Email">

                                   <label for="userid">User Id</label>
                                   <input type="text" class="form-control" id="text" name="userid" placeholder="Your UserId">


                                   <label for="password">Password</label>
                                   <input type="password" class="form-control" id="password" name="userpass" placeholder="Password">
                                    <label for="password">Renter Password</label>
                                   <input type="password" class="form-control" id="password1" name="userpass1" placeholder="Renter Password">

                                    <label for="date">Date of birth</label>
                                   <input type="date" name="date"  class="form-control">

                                     <label for="age">age</label>
                                   <input type="age" class="form-control" id="age" name="age" placeholder="Age">

                                    <label for="telephone">Phone Number</label>
                                   <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">


                              </div>

                               <div class="col-md-6 col-sm-6">
                                <br>
                              <label for="group">Would like to see content on  </label>
                              <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Reproductive Health" id="flexCheckDisabled" >
                              <label class="form-check-label" for="flexCheckDisabled">
                                Reproductive Health
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Nutrition" id="flexCheckDisabled" >
                              <label class="form-check-label" for="flexCheckDisabled">
                                Nutrition
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="Exercise and Fitness" id="flexCheckDisabled" >
                              <label class="form-check-label" for="flexCheckDisabled">
                                Exercise and Fitness
                              </label>
                            </div>
                                                               
                              </div>

                              
                             

                              
                                <br>
                                <br>
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit"  name="register"
                                       value="register" >Register</button></div>
                                    </div>
                                 </div>
                              </div>
                         </div>
                   </form>
`;

     }
      $(document).ready(function(){
          $(".home").click(function(){
            window.location="home.php";
          });
      });
  </script>
</head>




<body  >
  <!--Login form-->


  <div id="service" class="services wow fadeIn">
         <div class="container">
              
                  <div class="appointment-form">
                     <button type="button" class="login_button" onclick="login()"><h3>Login</h3></button><button type="button" onclick="register()" class="register_button"><h3>Register</h3></button>
                      
                   
    <div id="log">
                    <!-- CONTACT FORM HERE -->
                    <form method="POST"  action="login_register.php">

                        
                        

                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              

                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <label for="userid">User Id</label>
                                   <input type="text" class="form-control" id="text" name="userid" placeholder="Your UserId">


                                   <label for="password">Password</label>
                                   <input type="password" class="form-control" id="password" name="userpass" placeholder="Password">
                                    

                              </div>

                               
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button name="login"
                                       value="login" type="submit">Login</button></div>
                                    </div>
                                 </div>
                              </div>
                         </div>
                   </form>

</div>





 
















               
                  </div>
               </div>
           
      </div>



  <!-- <form method="POST" class="loginform" action="login_register.php">
    <br><br>
    <button type="button" class="login_button">Login</button><button type="button" class="register_button">Register</button>
    <br><br><br><br>
    <input type="text" class="" name="userid" placeholder="User ID" required>
    <br><br><br>
    <input type="password" class="" name="userpass" placeholder="Password" required>
    <br><br><br>
    <input type="submit" name="login" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" class="home" value="Home">
    <br><br><br><br>
  </form> -->

  <!--Register form color: #008B8B;-->  






  <!-- <form method="POST" class="registerform" action="logineg.php">
    <br><br>
    <button type="button" class="login_button">Login</button><button type="button" class="register_button">Register</button>
    <br><br>
    <input type="text" name="userid" placeholder="User ID" required>
    <br><br>
    <input type="text" name="username" placeholder="Name" required>
    <br><br>
    <input type="password" name="userpass" placeholder="Password" required>
    <br><br>
    <input type="password" name="userpass1" placeholder="Re-enter Password" required>
    <br><br>
    <input type="email" name="useremail" placeholder="E-mail" required>
    <br><br>
    <input type="text" name="usertype" value="Student" placeholder="User Type" readonly>
    <br><br>
    <input type="submit" name="register" value="Register">&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" class="home" value="Home">
  </form> -->
</body>
</html>