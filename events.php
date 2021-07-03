<?php
   //Connect database
   include "database/connect.php";
   
   //Read session
   include 'session.php';

   //Read button script
   include "top_button.html";
   $utype=$_SESSION['UserType'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
         border-radius: 30px;
         border-color: lightblue;
         color: black;
         background-image: url(images/bg-testimonial.png);
      }

      .message-box {

         border: solid;
         border-radius: 10px;
         border-color: lightblue;
         color: black;

         background-image: url(images/bg-testimonial.png);

      }

      .center {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 200px;
         border: 3px solid green;
      }
   </style>
</head>

<body class="clinic_version">
   <!-- LOADER -->
   <div id="preloader">
      <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
   </div>
   <!-- END LOADER -->

   <div class="wb wow fadeIn" style="margin-top: 140px;">
      <div class="container">
         <div class="heading">
            <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
            <h2>Events & Activities</h2>
         </div>

         <?php
            if ($utype=='Admin'){ ?>
         <div class="search" style="text-align: center; justify-content: center; align-items: center;">
            <form action="event_detail.php" method="POST">
               <a href="admin_manage.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Manage
                  Events</a>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

               <input type="text" size="40" name="searchevent" placeholder="Which event are you looking for?"
                  style="font-size: 16px;" />
               <input type="submit" name="search" value="Search"
                  class="btn btn-light btn-radius btn-brd grd1 effect-1" />

            </form>


         </div>

         <?php
            }
            else {
         ?>
         <div class="search" style="text-align: center; justify-content: center; align-items: center;">
            <form action="event_detail.php" method="POST">
               <input type="text" size="40" name="searchevent" placeholder="Which event are you looking for?"
                  style="font-size: 16px;" />
               <input type="submit" name="search" value="Search"
                  class="btn btn-light btn-radius btn-brd grd1 effect-1" />
            </form>
         </div>
         <?php
            }
         ?>

      </div>
   </div>



   <!-- Upcoming -->
   <div id="service" class="services wow fadeIn">
      <div class="container">
         <div class="row">
            <h3 class="desc">Upcoming Events</h3>
            <hr width="auto" size="4" style="background: #808000">

            <!--Display all event area-->
            <div class="content" align="center">
               <?php
                     $conn = mysqli_connect($servername, $username, $password, $dbname);

                     //Read all event
                     $read_DB = "SELECT * FROM event_details where EventDate >= CURDATE() ORDER BY EventDate DESC";
                     $result = mysqli_query($conn, $read_DB);
                     
                     //Display all result
                     if($result){
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                ?>
               <div class="col-lg-4 col-md-4 ">

                  <form action='event_detail.php' method='POST'>
                     <div class="message-box ">
                        <h4 style="height: 25px; padding: 2rem;">
                           <input style="border: none ; text-align: center; " class='event_name' type='text'
                              name='eventname' value='<?php echo $row["EventName"] ; ?>' hidden>
                           <?php echo $row["EventName"] ; ?>

                        </h4>

                        <hr width="auto" size="4" style="background: #808000">

                        <div id="bor" class="row">
                           <!-- <div class="col-lg-5 "> -->
                           <img style="padding: 2rem; height:30rem;" id="img"
                              src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&w=1000&q=80"
                              class="img-responsive card-img">

                           <p class="lead" style="text-align: justify ; margin: 2rem;">
                              <?php
                                 echo substr($row['EventDescription'], 0, 150);;
                              ?>
                           </p>

                        </div>

                        <hr width="auto" size="4" style="background: #808000">
                        <input type="submit" value="More Details" name='more_detail' id="submitButton" class="btn small"
                           title="Submit Your Message!">

                        <br>
                        <br>
                     </div>



                  </form>

               </div>
               <?php
                     }
                  }
               ?>
            </div>
         </div>

      </div>

      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <h3 class="desc">Past Events</h3>

               <hr width="auto" size="4" style="background: #808000">

               <!--Display all event area-->
               <div class="content" align="center">
                  <?php
               $conn = mysqli_connect($servername, $username, $password, $dbname);

               //Read all event
               $read_DB = "SELECT * FROM event_details where EventDate <= CURDATE() ORDER BY EventDate DESC";
               $result = mysqli_query($conn, $read_DB);
               
               //Display all result
               if($result){
                  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
               ?>
                  <div class="col-lg-4 col-md-4 ">

                     <form action='event_detail.php' method='POST'>

                        <div class="message-box ">

                           <h4 style="height: 25px; padding: 2rem;">
                              <input style="border: none ; text-align: center; " class='event_name' type='text'
                                 name='eventname' value='<?php echo $row["EventName"] ; ?>' hidden>
                              <?php echo $row["EventName"] ; ?>

                           </h4>

                           <hr width="auto" size="4" style="background: #808000">

                           <div id="bor" class="row">
                              <!-- <div class="col-lg-5 "> -->
                              <img style="padding: 2rem; height:30rem;" id="img"
                                 src="https://lh3.googleusercontent.com/proxy/YLfSsKTRriE06jPt2uwHzg_T5nvDpJd3Fuwmi8zUSZQ_7f6E1-bxuanunri8MVsPVJtMeW_qfs9j9sKh1Bk1ppDctycC_hd7OJK2U949tfQpaXLePq7OPhF84P-uK8aZZq6ar73v"
                                 alt="loding" class="img-responsive card-img">

                              <p class="lead" style="text-align: justify ; margin: 2rem;">
                                 <?php
                           

                        echo substr($row['EventDescription'], 0, 150);;
                        ?>
                              </p>

                           </div>

                           <hr width="auto" size="4" style="background: #808000">

                           <input type="submit" value="More Details" name='more_detail' id="submitButton"
                              class="btn small" title="Submit Your Message!">

                           <br>
                           <br>
                        </div>
                     </form>

                  </div>
                  <?php
                     }
                        }
                     ?>
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
                  <p>© 2021 She Bonds. All Rights Reserved. Made by Code like A Girl with <i
                        class="fa fa-heart" aria-hidden="true"></i></p>
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