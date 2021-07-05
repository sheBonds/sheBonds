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
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
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
   <link rel="stylesheet" href="blog.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->

   
    
</head>
<body>
    
<br><br><br><br><br>


<div style="display: flex; background-image: url(images/bg-testimonial.png);">
<div class="solution_card" style="width:20%">
    <div class="hover_color_bubble"></div>
    <img src="images\clinic_01.jpg" style="width:90%;margin-left:5%;margin-top:5%" alt="" srcset="">
    <div class="solu_title">
      <h3>Demo 1</h3>
    </div>
    <div class="solu_description">
      <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
      </p>
      <button type="button" class="read_more_btn">Read More</button>
    </div>
  </div>
  <div class="solution_card" style="width:20%">
    <div class="hover_color_bubble"></div>
    <img src="images\clinic_01.jpg" style="width:90%;margin-left:5%;margin-top:5%" alt="" srcset="">
    <div class="solu_title">
      <h3>Demo 1</h3>
    </div>
    <div class="solu_description">
      <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
      </p>
      <button type="button" class="read_more_btn">Read More</button>
    </div>
  </div>

  <div class="solution_card" style="width:20%">
  <div class="hover_color_bubble"></div>
    <img src="images\clinic_01.jpg" style="width:90%;margin-left:5%;margin-top:5%" alt="" srcset="">
    <div class="solu_title">
      <h3>Demo 1</h3>
    </div>
    <div class="solu_description">
      <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
      </p>
      <button type="button" class="read_more_btn">Read More</button>
    </div>
  </div>

  <div class="solution_card" style="width:20%">
    <div class="hover_color_bubble"></div>
    <img src="images\clinic_01.jpg" style="width:90%;margin-left:5%;margin-top:5%" alt="" srcset="">
    <div class="solu_title">
      <h3>Demo 1</h3>
    </div>
    <div class="solu_description">
      <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
      </p>
      <button type="button" class="read_more_btn">Read More</button>
    </div>
  </div>
  
</div>


<div style="display: flex;margin-top:7%">
    <div class="solution_card" style="width:20%">
        <div class="hover_color_bubble"></div>
        <img src="images\clinic_01.jpg" style="width:90%;margin-left:5%;margin-top:5%" alt="" srcset="">
        <div class="solu_title">
          <h3>Demo 1</h3>
        </div>
        <div class="solu_description">
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
          </p>
          <button type="button" class="read_more_btn">Read More</button>
        </div>
      </div>
      <div class="solution_card" style="width:20%">
        <div class="hover_color_bubble"></div>
        <img src="images\clinic_01.jpg" style="width:90%;margin-left:5%;margin-top:5%" alt="" srcset="">
        <div class="solu_title">
          <h3>Demo 1</h3>
        </div>
        <div class="solu_description">
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
          </p>
          <button type="button" class="read_more_btn">Read More</button>
        </div>
      </div>
    
      <div class="solution_card" style="width:20%">
      <div class="hover_color_bubble"></div>
        <img src="images\clinic_01.jpg" style="width:90%;margin-left:5%;margin-top:5%" alt="" srcset="">
        <div class="solu_title">
          <h3>Demo 1</h3>
        </div>
        <div class="solu_description">
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
          </p>
          <button type="button" class="read_more_btn">Read More</button>
        </div>
      </div>
    
      <div class="solution_card" style="width:20%">
        <div class="hover_color_bubble"></div>
        <img src="images\clinic_01.jpg" style="width:90%;margin-left:5%;margin-top:5%" alt="" srcset="">
        <div class="solu_title">
          <h3>Demo 1</h3>
        </div>
        <div class="solu_description">
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
          </p>
          <button type="button" class="read_more_btn">Read More</button>
        </div>
      </div>
      
    </div>

      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/logo.png" alt=""></a>
                     <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+1) 800 123 456</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>SUBSCRIBE</h3>
                     <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
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
                     <p>© 2018 Lifecare. All Rights Reserved.</p>
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
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>

</body>
</html>