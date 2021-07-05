<?php
//Connect database
include_once "database/connect.php";

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
    <link rel="shortcut icon" href="images/logo.png" type="image/png" />
    <link rel="apple-touch-icon" href="images/logo.png">
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

    <style>
    .question {
        font-weight: 600;
    }

    .answers {
        margin-bottom: 20px;
    }

    .answers label {
        display: block;
    }

    #submit {
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

    #submit:hover {
        background-color: #38a;
    }

    .message-box {

        border: solid;
        border-color: lightblue;
        color: black;
        background-color: white;
        border-radius: 2rem;

    }
    </style>
</head>

<body class="clinic_version">
   <!-- LOADER -->
   <div id="preloader">
      <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
   </div>
   <!-- END LOADER -->

   <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4"
      style="background-image:url('images/slider-bg.png');">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-sm-12">
               <div class="text-contant">
                  <h2>
                     <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="#" /></span></span>
                     <a href="" class="typewrite" data-period="2000"
                        data-type='[ "Welcome to She Bonds", "your bonds..", "We Care Your Health", "Share your issues", "We connect you to the Expert!" ]'>
                        <span class="wrap"></span>
                     </a>
                  </h2>
               </div>
            </div>
         </div>
         <!-- end row -->
      </div>
      <!-- end container -->
   </div>
   <!-- end section -->

   <!-- advertisement -->
   <div id="time-table" class="time-table-section">
      <div class="container">
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
               <div class="service-time one" style="background:#2895f1;">
                  <span class="info-icon"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                  <h3>Talk to Doctors</h3>
                  <p>Make informed health choices by connecting with fact-based, expert-sourced discussion forums to discuss your issues, symptoms, home remedies and treatment options.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
               <div class="service-time middle" style="background:#0071d1;">
                  <span class="info-icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                  <h3>Attend Events</h3>
                  <p>We believe in the power of the community to solve most pressing issues related to women's healthcare. Discover and learn from today’s innovative health leaders through live events. Join us in transforming the next decade of women's health, together.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="row">
               <div class="service-time three" style="background:#0060b1;">
                  <span class="info-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                  <h3>Get to know More</h3>
                  <p>Read through blogs, gamify with quizes. Test your knowledge. It's more like we are disucssion with a coffee! <a href="curl.php"><i class="fa fa-heartbeat" aria-hidden="true"></i></a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Advertisement end -->
   <!-- end section -->

   <!-- events -->

   <div id="events" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;"
      data-scroll-id="doctors" tabindex="-1">
      <div class="container">

         <div class="heading">
            <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
            <h2>Events</h2>
         </div>

         <div class="row dev-list text-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
               style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
               <div class="widget clearfix">
                  <img src="images/event_0.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                     <h3>Yoga and Meditation</h3>
                     <small>Dr. Drake Ramory</small>
                  </div>
                  <!-- end title -->
                  <p>Enhance your health by doing meditation daily. Get guidelines from the experts to practise easy
                     yoga. Boost your health in a better way!</p>

                  <a href="events.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Know More</a>
               </div>
               <!--widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s"
               style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
               <div class="widget clearfix">
                  <img src="images/event_1.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                     <h3>Pregnancy</h3>
                     <small>Dr. Geetha Haripriya</small>
                  </div>
                  <!-- end title -->
                  <p>Are you still feeling nervous about Pregnancy? Worried about diet and nutrition? No worry, attend
                     this session for the heathy baby.</p>

                  <a href="events.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Know More</a>
               </div>
               <!--widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn">
               <div class="widget clearfix">
                  <img src="images/event_3.jpg" alt="" class="img-responsive img-rounded">
                  <div class="widget-title">
                     <h3>Menstruation</h3>
                     <small>Dr. Gayatri Thite</small>
                  </div>
                  <!-- end title -->
                  <p>Does it pains really hard during periods? Have conncerns about daily cycles? Doctors are here to
                     clear away all the myths.</p>

                  <a href="events.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Know More</a>
               </div>
               <!--widget -->
            </div><!-- end col -->

         </div><!-- end row -->
      </div><!-- end container -->
   </div>
   <!-- end events section -->

   <div id="blogs" class="section wb wow fadeIn">
      <div class="container">
         <div class="heading">
            <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
            <h2>Blogs</h2>
         </div>
         <!-- end title -->
         <div class="row">
            <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
               <div class="testimonial clearfix">
                  <div class="desc">
                     <h3><i class="fa fa-quote-left"></i> An Apple a Day keeps doctor away!</h3>
                     <p class="lead"> You likely know the familiar expression, “An apple a day keeps the doctor away.” In fact, Notes and Queries magazine was the first to publish the original quote: “Eat an apple on going to bed, and you’ll keep the doctor from earning his bread.</p>
                  </div>
                  <div class="testi-meta">
                     <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                     <h4>Dr. Drake Ramory <small>- Doctor of all</small></h4>
                  </div>
                  <!-- end testi-meta -->
               </div>
               <!-- end testimonial -->
            </div>
            <!-- end col -->
            <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
               <div class="testimonial clearfix">
                  <div class="desc">
                     <h3><i class="fa fa-quote-left"></i>What is breast cancer?</h3>
                     <p class="lead">Breast cancer is the most common invasive cancer in women and the second leading cause of cancer death in women after lung cancer.</p>
                  </div>
                  <div class="testi-meta">
                     <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                     <h4>Andrew Atkinson <small>- Gynacologist</small></h4>
                  </div>
                  <!-- end testi-meta -->
               </div>
               <!-- end testimonial -->
            </div>
            <!-- end col -->
         </div>
         <!-- end row -->
         <hr class="invis">
         <div class="row">
            <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
               <div class="testimonial clearfix">
                  <div class="desc">
                     <h3><i class="fa fa-quote-left"></i> Key vitamins to manage your Endometriosis Symptoms</h3>
                     <p class="lead">Endometriosis is a common condition in which tissue similar to the lining of the uterus grows outside the womb and can cause pelvic pain and difficulty getting pregnant. These Key Vitamins Can Help You Manage Endometriosis Symptoms.</p>
                  </div>
                  <div class="testi-meta">
                     <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                     <h4>Amanda DOE <small>- Nutritionist</small></h4>
                  </div>
                  <!-- end testi-meta -->
               </div>
               <!-- end testimonial -->
            </div>
            <!-- end col -->
            <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
               <div class="testimonial clearfix">
                  <div class="desc">
                     <h3><i class="fa fa-quote-left"></i>Importance of focusing on your emotional wellbeing</h3>
                     <p class="lead">It’s important to remember that emotional health is not fixed: it fluctuates over time, depending on your physical health, your experiences, and a myriad of things that might be happening in your personal, or work life.</p>
                  </div>
                  <div class="testi-meta">
                     <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                     <h4>Martin Johnson <small>- Psychiatrist</small></h4>
                  </div>
                  <!-- end testi-meta -->
               </div>
               <!-- end testimonial -->
            </div>
            <!-- end col -->
         </div>
         <!-- end row -->
      </div>
      <!-- end container -->
   </div>
   <!-- end section -->

   <div id="service" class="services wow fadeIn">
      <div class="container">
         <div class="row">


            <!-- Column -->
            <div class="col-md-4 col-lg-4 col-xlg-4">



               <div class="message-box ">



                  <h4 style="padding: 2rem;">
                     Lets find How much you are aware of PCOS?


                  </h4>

                  <hr width="auto" size="4" style="background: #808000">

                  <div id="bor" class="row">
                     <!-- <div class="col-lg-5 "> -->
                     <img style="padding: 2rem; height:30rem;" id="img"
                        src="https://thumbs.dreamstime.com/z/pcos-polycystic-ovary-syndrome-write-sticky-notes-isolated-white-table-background-161977857.jpg"
                        alt="loding" class="img-responsive card-img">

                     <!--    </div>

                            <div class=" col-lg-7  "> -->


                     <p class="lead" style="text-align: justify ; margin: 2rem;">

                        Check your knowlege on PCOD .
                        Click on the button Below to start a quick quiz!!!!


                     </p>

                     <!--  </div> -->
                  </div>


                  <hr width="auto" size="4" style="background: #808000">




                  <div class="form-group">
                     <div class="center"> <button type="button" data-toggle="modal" style="text-align: center;"
                           data-target="#message3">Start Quiz</button></div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
               </div>



            </div>
            <div class="col-md-4 col-lg-4 col-xlg-4">







               <!-- <div class="col-md-8 col-lg-8 col-xlg-8">
                     <br>  
                   <h4>hii</h4>

                   </div>
                    <div class="col-md-4 col-lg-4 col-xlg-4">
                        <a href="quiz.html" ><button class="btn btn-default btn-lg float-right" type="submit"> Start </button></a>
                       
                   </div>
                  <hr style="background-color : white;"> -->

               <div class="message-box ">



                  <h4 style="padding: 2rem;">
                     PCOD


                  </h4>

                  <hr width="auto" size="4" style="background: #808000">

                  <div id="bor" class="row">
                     <!-- <div class="col-lg-5 "> -->
                     <img style="padding: 2rem; height:30rem;" id="img"
                        src="https://thumbs.dreamstime.com/z/pcos-polycystic-ovary-syndrome-write-sticky-notes-isolated-white-table-background-161977857.jpg"
                        alt="loding" class="img-responsive card-img">

                     <!--    </div>

                            <div class=" col-lg-7  "> -->


                     <p class="lead" style="text-align: justify ; margin: 2rem;">

                        Check your knowlege on PCOD .
                        Click on the button Below to start a quick quiz!!!!


                     </p>

                     <!--  </div> -->
                  </div>


                  <hr width="auto" size="4" style="background: #808000">




                  <div class="form-group">
                     <div class="center"> <button type="button" data-toggle="modal" style="text-align: center;"
                           data-target="#message">Start Quiz</button></div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
               </div>












            </div>
            <div class="col-md-4 col-lg-4 col-xlg-4">


               <div class="message-box ">



                  <h4 style="padding: 2rem;">
                     Do you know nuritent contents of green leafy vegetables ?


                  </h4>

                  <hr width="auto" size="4" style="background: #808000">

                  <div id="bor" class="row">
                     <!-- <div class="col-lg-5 "> -->
                     <img style="padding: 2rem; height:30rem;" id="img"
                        src="https://thumbs.dreamstime.com/z/ingredients-cooking-vegetarian-food-colorful-various-organic-farm-vegetables-healthy-food-diet-nutrition-concept-place-62488912.jpg"
                        alt="loding" class="img-responsive card-img">

                     <!--    </div>

                            <div class=" col-lg-7  "> -->


                     <p class="lead" style="text-align: justify ; margin: 2rem;">

                        Check your knowlege on PCOS .
                        Click on the button Below to start a quick quiz!!!!


                     </p>

                     <!--  </div> -->
                  </div>


                  <hr width="auto" size="4" style="background: #808000">




                  <div class="form-group">
                     <div class="center"> <button type="button" data-toggle="modal" style="text-align: center;"
                           data-target="#message2">Start Quiz</button></div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
               </div>





            </div>





         </div>
      </div>
   </div>
   <!-- <input onclick=" #myModal" id="submitButton" class="btn small" title="Register!"> -->
   <br>
   <br>
   <!-- Model -->

   <div id="message"
      style=" background-image: url('https://thumbs.dreamstime.com/z/pcos-polycystic-ovary-syndrome-write-sticky-notes-isolated-white-table-background-161977857.jpg'); background-repeat: no-repeat; "
      class="modal fade" role="dialog">
      <div class="modal-dialog">


         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Select Options </h4>
            </div>
            <div class="modal-body" id="model1">

               <div id="quiz"></div>
               <button id="submit" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1">Submit Quiz</button>
               <div id="results"></div>
            </div>
            <div class="modal-footer">
               <button type="submit" name="join"class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1" data-dismiss="modal">Cancel</button>
            </div>
         </div>

      </div>
   </div>

   <!-- Model end -->

   <div id="message2"
      style=" background-image: url('https://thumbs.dreamstime.com/z/selection-various-paleo-diet-products-healthy-nutrition-balanced-food-background-148722795.jpg'); background-repeat: no-repeat; "
      class="modal fade" role="dialog">
      <div class="modal-dialog">


         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Select Options </h4>
            </div>
            <div class="modal-body" id="model2">

               <div id="quiz2"></div>
               <button id="submit2" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1">Submit Quiz</button>
               <div id="results2"></div>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1" name="join"  data-dismiss="modal">Cancel</button>
            </div>
         </div>

      </div>
   </div>

   <div id="message3"
      style=" background-image: url('https://thumbs.dreamstime.com/z/pcos-polycystic-ovary-syndrome-write-sticky-notes-isolated-white-table-background-161977857.jpg'); background-repeat: no-repeat; "
      class="modal fade" role="dialog">
      <div class="modal-dialog">


         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Select Options </h4>
            </div>
            <div class="modal-body" id="model3">

               <div id="quiz3"></div>
               <button id="submit3" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1">Submit Quiz</button>
               <div id="results3"></div>
            </div>
            <div class="modal-footer">
               <button type="submit"  name="join" class="btn btn-default" class="btn btn-medium btn-radius btn-brd btn1 effect-1 grd1" data-dismiss="modal">Cancel</button>
            </div>
         </div>

      </div>
   </div>

   <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
      <div class="container">
         <div class="heading">
            <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
            <h2>Get in Touch</h2>
         </div>
      </div>
      <div class="contact-section">
         <div class="form-contant">
            <form id="ajax-contact" action="assets/mailer.php" method="post">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group in_name">
                        <input type="text" class="form-control" placeholder="Name" required="required">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group in_email">
                        <input type="email" class="form-control" placeholder="E-mail" required="required">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group in_email">
                        <input type="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group in_email">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group in_message">
                        <textarea class="form-control" id="message" rows="5" placeholder="Message"
                           required="required"></textarea>
                     </div>
                     <div class="actions">
                        <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small"
                           title="Submit Your Message!">
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div id="googleMap" style="width:100%;height:450px;"></div>
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
   <!-- map -->
   <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>

   <script type="text/javascript">(function () {
         function buildQuiz() {
            // variable to store the HTML output
            const output = [];
            const output2 = [];
            const output3 = [];

            // for each question...
            myQuestions.forEach(
               (currentQuestion, questionNumber) => {

                  // variable to store the list of possible answers
                  const answers = [];

                  // and for each available answer...
                  for (letter in currentQuestion.answers) {

                     // ...add an HTML radio button
                     answers.push(
                        `<label>
                     <input type="radio" name="question${questionNumber}" value="${letter}">
                     ${letter} :
                     ${currentQuestion.answers[letter]}
                   </label>`
                     );
                  }

                  // add this question and its answers to the output
                  output.push(
                     `<div class="question"> ${currentQuestion.question} </div>
                 <div class="answers"> ${answers.join('')} </div>`
                  );
               }
            );


            myQuestions2.forEach(
               (currentQuestion, questionNumber) => {

                  // variable to store the list of possible answers
                  const answers = [];

                  // and for each available answer...
                  for (letter in currentQuestion.answers) {

                     // ...add an HTML radio button
                     answers.push(
                        `<label>
                     <input type="radio" name="question${questionNumber}" value="${letter}">
                     ${letter} :
                     ${currentQuestion.answers[letter]}
                   </label>`
                     );
                  }

                  // add this question and its answers to the output
                  output2.push(
                     `<div class="question"> ${currentQuestion.question} </div>
                 <div class="answers"> ${answers.join('')} </div>`
                  );
               }
            );

            myQuestions3.forEach(
               (currentQuestion, questionNumber) => {

                  // variable to store the list of possible answers
                  const answers = [];

                  // and for each available answer...
                  for (letter in currentQuestion.answers) {

                     // ...add an HTML radio button
                     answers.push(
                        `<label>
                     <input type="radio" name="question${questionNumber}" value="${letter}">
                     ${letter} :
                     ${currentQuestion.answers[letter]}
                   </label>`
                     );
                  }

                  // add this question and its answers to the output
                  output3.push(
                     `<div class="question"> ${currentQuestion.question} </div>
                 <div class="answers"> ${answers.join('')} </div>`
                  );
               }
            );


            // finally combine our output list into one string of HTML and put it on the page
            quizContainer.innerHTML = output.join('');
            quizContainer2.innerHTML = output2.join('');
            quizContainer3.innerHTML = output3.join('');
         }

         function showResults() {

            // gather answer containers from our quiz
            const answerContainers = quizContainer.querySelectorAll('.answers');

            // keep track of user's answers
            let numCorrect = 0;

            // for each question...
            myQuestions.forEach((currentQuestion, questionNumber) => {

               // find selected answer
               const answerContainer = answerContainers[questionNumber];
               const selector = `input[name=question${questionNumber}]:checked`;
               const userAnswer = (answerContainer.querySelector(selector) || {}).value;

               // if answer is correct
               if (userAnswer === currentQuestion.correctAnswer) {
                  // add to the number of correct answers
                  numCorrect++;

                  // color the answers green
                  answerContainers[questionNumber].style.color = 'lightgreen';
               }
               // if answer is wrong or blank
               else {
                  // color the answers red
                  answerContainers[questionNumber].style.color = 'red';
               }
            });

            // show number of correct answers out of total
            resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length} 
            <h2>We recommend you to attend this event to know more about your health.</h2>
            <h1 style="margin-left:90px; font-weight:bold ">Precautions to take while pregnancy</h1>
            
            <img style="width:40%;height:30%;margin-left:30%" src="images/event_1.jpg" alt="Italian Trulli">
            
            <div class="form-group">
                     <div class="center"> <button type="button" data-toggle="modal" style="text-align: center;"
                     onclick="location.href='events.php'" data-target="events.php">Know More</button></div>
                  </div>
            `;

            
    document.getElementById("myButton").onclick = function () {
        location.href = "events.php";
    };





            // gather answer containers from our quiz
            const answerContainers2 = quizContainer2.querySelectorAll('.answers');

            // keep track of user's answers
            numCorrect = 0;

            // for each question...
            myQuestions2.forEach((currentQuestion, questionNumber) => {

               // find selected answer
               const answerContainer2 = answerContainers2[questionNumber];
               const selector = `input[name=question${questionNumber}]:checked`;
               const userAnswer = (answerContainer2.querySelector(selector) || {}).value;

               // if answer is correct
               if (userAnswer === currentQuestion.correctAnswer) {
                  // add to the number of correct answers
                  numCorrect++;

                  // color the answers green
                  answerContainers2[questionNumber].style.color = 'lightgreen';
               }
               // if answer is wrong or blank
               else {
                  // color the answers red
                  answerContainers2[questionNumber].style.color = 'red';
               }
            });

            // show number of correct answers out of total
            resultsContainer2.innerHTML = `${numCorrect} out of ${myQuestions.length} <p>ajhs</p>`;





            // gather answer containers from our quiz
            const answerContainers3 = quizContainer3.querySelectorAll('.answers');

            // keep track of user's answers
            numCorrect = 0;

            // for each question...
            myQuestions3.forEach((currentQuestion, questionNumber) => {

               // find selected answer
               const answerContainer3 = answerContainers3[questionNumber];
               const selector = `input[name=question${questionNumber}]:checked`;
               const userAnswer = (answerContainer3.querySelector(selector) || {}).value;

               // if answer is correct
               if (userAnswer === currentQuestion.correctAnswer) {
                  // add to the number of correct answers
                  numCorrect++;

                  // color the answers green
                  answerContainers3[questionNumber].style.color = 'lightgreen';
               }
               // if answer is wrong or blank
               else {
                  // color the answers red
                  answerContainers3[questionNumber].style.color = 'red';
               }
            });

            // show number of correct answers out of total
            resultsContainer3.innerHTML = `${numCorrect} out of ${myQuestions.length}<p>`;

         }

         const quizContainer = document.getElementById('quiz');
         const quizContainer2 = document.getElementById('quiz2');
         const quizContainer3 = document.getElementById('quiz3');
         const resultsContainer = document.getElementById('model1');
         const resultsContainer2 = document.getElementById('model2');
         const resultsContainer3 = document.getElementById('model3');
         const submitButton = document.getElementById('submit');
         const submitButton2 = document.getElementById('submit2');
         const submitButton3 = document.getElementById('submit3');

         const myQuestions = [
            {
               question: "What does PCOS mean?",
               answers: {
                  a: "Polycystic Ovary Syndrome",
                  b: "Polyvin Ovary system",
                  c: "Polycycle ovary syndrome"
               },
               correctAnswer: "a"
            },
            {
               question: "Can PCOS affect your chances of getting pregnant?",
               answers: {
                  a: "Yes",
                  b: "No",
                  c: "Depends"
               },
               correctAnswer: "c"
            },
            {
               question: "Is there a complete cure for PCOS?",
               answers: {
                  a: "Yes",
                  b: "No",
                  c: "Maybe",
                  d: "None"
               },
               correctAnswer: "b"
            }
         ];


         const myQuestions2 = [
            {
               question: "How PCOS be managed?",
               answers: {
                  a: "the appropriate treatment at a fertility clinic in Denver depending on symptoms",
                  b: "Weight loss may help improve the symptoms in a lot of women with PCOS",
                  c: "Both"
               },
               correctAnswer: "c"
            },
            {
               question: "Which are the criteria determine if you have PCOS?",
               answers: {
                  a: " Irregular menstrual cycles  since puberty",
                  b: "Signs of androgen excess. ",
                  c: "PCOS appearing ovaries by ultrasound.",
                  d: "All of the above"
               },
               correctAnswer: "d"
            },
            {
               question: "If you have PCOS what medical problems are you at risk for?",
               answers: {
                  a: "Hypertension",
                  b: " Diabetes",
                  c: "Impaired glucose tolerance ",
                  d: "All of the above",
               },
               correctAnswer: "d"
            }
         ];

         const myQuestions3 = [
            {
               question: "If a woman is overweight, will losing that excess weight help her to become pregnant?",
               answers: {
                  a: " Yes",
                  b: "No",
                  c: "Maybe"
               },
               correctAnswer: "c"
            },
            {
               question: "Is it true that pregnancy cures PCOS?",
               answers: {
                  a: " Yes",
                  b: "No",
                  c: "Maybe"
               },
               correctAnswer: "b"
            },
            {
               question: "What are the symptoms of PCOS?",
               answers: {
                  a: "Irregular periods",
                  b: "Excess male hormone (androgen)",
                  c: "Polycystic ovaries",
                  d: "All of the above"
               },
               correctAnswer: "d"
            }
         ];

         // Kick things off
         buildQuiz();

         // Event listeners
         submitButton.addEventListener('click', showResults);
         submitButton2.addEventListener('click', showResults);
         submitButton3.addEventListener('click', showResults);
      })();
   </script>
</body>

</html>