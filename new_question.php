<?php
  //Connect database
  include_once "database/connect.php";
  
  //Read session
  include 'session.php';
  $uid=$_SESSION['UniqueId'];
  echo $uid;
  if($uid=='' || $uid==null){
    $message="Please login to continue";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Refresh: 0, login_register.php");
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
<style type="text/css">
   .card {
      border-radius: 4px;
      background: #fff;
      box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
      transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
      padding: 14px 80px 18px 36px;
      cursor: pointer;
   }

   /*.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}*/

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

      /*   background-image: url(images/service-bg.png);
      background-repeat: no-repeat;
    background-position: bottom;
    background-size: 100px;
*/
   }

   .ee {
      border: solid;
      border-color: lightblue;
      /*background-color: lightblue;*/
      background-image: url(images/service-bg.png);
   }


   @media(max-width: 990px) {
      .card {
         margin: 20px;
      }
   }
</style>
<!-- [if lt IE 9] -->
</head>

<body class="clinic_version">
   <!-- LOADER -->
   <!-- <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div> -->
   <!-- END LOADER -->





   <div id="service" class="services wow fadeIn"  style="margin-top: 10rem;">
      <div class="container">
         <div class="row">



            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">


            </div>

            <div class="jumbotron">
               <div class="container">
                  <h1 class="display-4">Add a new Topic</h1><br>
                  <div class="container">


                     <form action="new.php" method="post">


                        <div class="form-group">
                           <label for="formGroupExampleInput">Enter Forum Heading</label>
                           <input type="text" class="form-control" id="formGroupExampleInput"
                              placeholder="Enter Forum Heading Here" name="question">
                        </div>

                        <label>Select Category</label>
                        <select class="form-control" name="select" id="select">
                           <option value="Breast Cancer">Breast Cancer</option>
                           <option value="Reproductive Health">Reproductive Health</option>
                           <option value="Exercise and Fitness">Exercise and Fitness</option>
                           <option value="Diet">Diet</option>
                           <option value="Mental Health">Mental Health</option>
                           <option value="Fertility Issues">Fertility Issues</option>

                           <option value="Others">Others</option>
                        </select>
                        <br>
                        <!--  <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Author Name" name="author">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Author's Email ID" name="email">
                </div>
              </div> -->


                        <div class="form-group">
                           <label for="formGroupExampleInput1">Detailed Description</label>
                           <input type="text" class="form-control" id="formGroupExampleInput1"
                              placeholder="Enter Forum Description" name="description">
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <div>
                           <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">+ Add
                              Forum</button>
                        </div>

                     </form>

                  </div>
               </div>
            </div>








            <?php

 

      
       if(isset($_POST['submit'])){
          
 $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con,"forum");
        
       
        $insert_query = "select * from user_details where UserNo=$uid";
        $res=mysqli_query($con, $insert_query);
           $arr=mysqli_fetch_assoc($res);


    
    $qu = $_POST['question'];
    $se = $_POST['select'];
    $au =  $arr['UserFullName'];
    $em = $arr['UserEmail'];
    $de = $_POST['description'];
           
           if($qu=='' || $se=='' || $au=='' || $em=='' || $de==''){
               echo "<script>alert('Please Enter all the Fields')</script>";
           }
           else{
           
      $con = mysqli_connect("localhost","root","","");
mysqli_select_db($con,"forum");

           
date_default_timezone_set('Asia/Kolkata');                                          //TIME

$date_time = time();
//$date_time = date("d-m-Y (D) H:i:s", $timestamp);
           
           
           $insert_query = "insert into forum (question, description, author, email, topic, time) values ('$qu','$de','$au','$em','$se','$date_time')";

$res=mysqli_query($con, $insert_query);
               
               echo "<script>alert('Your Forum has been successfully added, Please visit HomePage to see the changes')</script>";
           
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