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
      border-radius: 10px;
      background: #fff;
      box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
      transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
      padding: 14px 80px 18px 36px;
      cursor: pointer;
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
   }

   .ee {
      border: solid;
      border-color: lightblue;
      background-color: lightblue;
      border-radius: 10px;
      /*background-image: url(images/service-bg.png);*/
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
   <!--    
      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span> Book Appointment</h3>
                     <div class="form">
                        <form action="index.html">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" placeholder="Your Name"  />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="email" placeholder="Email Address" id="email" />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Day</option>
                                          <option>Sunday</option>
                                          <option>Monday</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Time</option>
                                          <option>AM</option>
                                          <option>PM</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control">
                                          <option>Doctor Name</option>
                                          <option>Mr.XYZ</option>
                                          <option>Mr.ABC</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <textarea rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit">Submit</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
   <!-- end section -->
   <!-- doctor -->

   <div id="testimonials" class="section wb wow fadeIn">
      <div class="container">
         <div class="heading">
          <br>
          <br>
          <br>
            <h2>Get Answers of all your Queeries </h2>
         </div>
         <!-- end title -->
         <div class="row">
               <a href="new_question.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1 center">Ask a question?</a>

               

           

            <?php
               $con = mysqli_connect("localhost","root","","");
               mysqli_select_db($con,"forum");
                  $z1="SELECT DISTINCT topic FROM forum ORDER BY topic ASC";
                                 $zz2=mysqli_query($con, $z1);



            ?>


               <br>
                <br>
               <br>
                <br>
               <br>
            <form action="forum.php" style="margin: 200px; " method="post">
               <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <select class="form-control" id="Place" name="country">
                     <option value="0" selected="selected">Select Category</option>
                     <?php
                        if(mysqli_num_rows($zz2)>0){
                        
                        while($countryResult=mysqli_fetch_assoc($zz2)){
                           
                           echo '<option value="' . $countryResult['topic'] . '">' . $countryResult['topic'] . '</option>';
                           }
                        }
                     ?>
                  </select>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                  <button id="Filter" type="submit" value="submit2" name="submit2">Search</button>
               </div>


            </form>

            <br>
            <br>
            <br>
            <div class="container" id="cont">
               <?php

                  $con = mysqli_connect("localhost","root","","");
                  mysqli_select_db($con,"forum");


                  if(isset($_POST['submit2'])){

                  //echo $_POST['country'];
                  $topic=$_POST['country'];

              
            
                  $con = mysqli_connect("localhost","root","","");
                  mysqli_select_db($con,"forum");
                  echo $topic;
                  //$insert_query2 ="SELECT * FROM `forum`  where  `topic`='$topic' order by id desc";
                  $insert_query2 = "select * from forum where topic='$topic' order by id desc";

                  $res=mysqli_query($con, $insert_query2);
                  // $arr=mysqli_fetch_array($res);  
                  
                  if(mysqli_num_rows($res)>0){
                     
                     while($row=mysqli_fetch_assoc($res)){
                        
                        $z="select COUNT(comment) from comments where post_id=$row[id]";
                        // $ans="select * from comments where post_id=$row[id]" ;$read_user_booking = "SELECT * FROM forum  INNER JOIN  user_details  on forum.topic=user_details.Speciality where forum.time = date('d-m-Y')";

                        $ans="select * from comments INNER JOIN user_details on comments.author =user_details.UserNo where user_details.UserType='Admin'" ;

                        $zz=mysqli_query($con, $z);

                        $zzz=mysqli_fetch_array($zz);

                           $ansrun=mysqli_query($con, $ans);
                        $ansfin=mysqli_fetch_assoc($ansrun);

               ?>
               <br>
               <div class="container">
                  <div class="row">

                     <div class="col-md-12">
                        <div class="card card-2">
                           <h3><a href="post.php?id=<?php echo $row['id'] ; ?> ">
                                 <?php echo $row["question"]; ?>


                                 <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="20"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                       stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                       stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                       font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                       <path d="M0,172v-172h172v172z" fill="none"></path>
                                       <g fill="#3498db">
                                          <path
                                             d="M155.5525,6.88c-5.73781,-0.09406 -12.87312,3.58781 -20.1025,7.8475l21.8225,21.8225c6.19469,-10.50812 11.16656,-20.97594 5.16,-26.9825c-1.88125,-1.88125 -4.27312,-2.64719 -6.88,-2.6875zM124.3775,11.0725c-7.39062,0.33594 -19.30969,3.18469 -31.4975,15.3725c-12.45656,12.44313 -17.91219,22.60188 -21.5,29.3475c-1.73344,3.26531 -3.13094,5.79156 -4.6225,7.4175c-2.86219,3.1175 -6.78594,1.77375 -7.2025,1.6125c-1.76031,-0.72562 -3.78937,0.06719 -4.515,1.8275c-0.72562,1.76031 0.06719,3.78938 1.8275,4.515c0.17469,0.06719 2.41875,0.9675 5.375,0.9675c1.65281,0 3.50719,-0.33594 5.375,-1.1825c2.52625,-2.6875 5.10625,-5.36156 7.6325,-7.955c0.71219,-1.23625 1.37063,-2.51281 2.15,-3.9775c3.60125,-6.7725 8.58656,-16.0175 20.3175,-27.735c11.15313,-11.13969 21.72844,-13.41062 27.52,-13.545c0.84656,-0.67187 1.70656,-1.19594 2.365,-1.72l2.365,-1.935l2.9025,-1.8275c-0.3225,-0.24187 -0.59125,-0.52406 -0.9675,-0.645c-0.28219,-0.09406 -3.09062,-0.73906 -7.525,-0.5375zM129.7525,18.705c-7.31,5.71094 -26.56594,21.19094 -46.87,41.495c-21.715,21.715 -46.31906,50.56531 -53.535,59.125l23.3275,23.3275c8.55969,-7.2025 37.41,-31.82 59.125,-53.535c20.30406,-20.30406 35.78406,-39.54656 41.495,-46.87zM25.585,125.345c-9.94375,15.00969 -12.42969,25.39688 -13.115,29.455c0,0.01344 -0.1075,-0.01344 -0.1075,0l-4.6225,4.515c-1.34375,1.34375 -1.34375,3.60125 0,4.945c0.67188,0.67188 1.58563,0.9675 2.4725,0.9675c0.88688,0 1.80063,-0.29562 2.4725,-0.9675l4.515,-4.6225c0.01344,0 -0.01344,-0.1075 0,-0.1075c4.05813,-0.68531 14.45875,-3.17125 29.455,-13.115z">
                                          </path>
                                       </g>
                                    </g>
                                 </svg>
                              </a></h3>



                           <br>
                           <div class="ee">

                              <?php
                                 if(mysqli_num_rows($ansrun)>0)
                                 {  
                              ?>
                              <p><b>Answer : </b>
                                 <?php  echo $ansfin["comment"]; ?>
                              </p>
                              <?php
                                 }
                                 else
                                 {    ?>
                              <p> No Answers yet! </p>
                              <?php 
                              }
                              ?>

                              <div><small>
                                    <?php  echo $ansfin['time']."  " ; ?> <b>
                                       <?php  

                                          $connn = mysqli_connect("localhost","root","","");
                                          mysqli_select_db($connn,"forum");
                                       $id=$ansfin['author'];
                                       // echo  $id;

                                          // echo"hhhh";
                                         $insert_query3 = "SELECT * FROM `user_details` WHERE `UserNo`='$id'";

                        $res3=mysqli_query($connn, $insert_query3);
                         $row3=mysqli_fetch_assoc($res3);



                            echo $row3['UserFullName'];


                                        ?>
                                    </b>
                                 </small></div>

                           </div>

                           <br>

                           <div class="ee">

                              <div class="col-md-4">
                                 <p style="font-size: 1.2rem;"> <b>Category : </b>
                                    <?php echo $row["topic"] ;?>
                                 </p>

                              </div>
                              <div class="col-md-4">
                                 <p style="font-size: 1.2rem;">
                                    <?php 
                                       if($zzz[0]==0) {echo " Not answered by anyone" ;}
                                       else {echo $zzz[0] - 1 ." more answers";}?>
                                 </p>

                              </div>

                              <div class="col-md-4">
                                 <p style="font-size: 1.2rem;">
                                    <?php echo $row["time"]; ?>
                                 </p>
                              </div>

                           </div>
                           <br>

                        </div>
                     </div>


                  </div>
               </div>

               <br>
               <?php

}
  }  }
  else{

    ?>
               <script>
                  document.getElementById('cont').innerHTML = `   <br>
<br>
<br> <?php

 $con = mysqli_connect("localhost","root","","");
mysqli_select_db($con,"forum");


 

              
            
            
              //$insert_query2 ="SELECT * FROM `forum`  where  `topic`='$topic' order by id desc";
           $insert_query2 = "select * from forum  order by id desc";

            $res=mysqli_query($con, $insert_query2);
           // $arr=mysqli_fetch_array($res);  
            
            if(mysqli_num_rows($res)>0){
                
                while($row=mysqli_fetch_assoc($res)){
                    
                    $z="select COUNT(comment) from comments where post_id=$row[id]";
                    $ans="select * from comments where post_id=$row[id]";
                    $zz=mysqli_query($con, $z);

                    $zzz=mysqli_fetch_array($zz);

                     $ansrun=mysqli_query($con, $ans);
                    $ansfin=mysqli_fetch_assoc($ansrun);

?>
 <br>
    <div class="container">
      <div class="row">
       
        <div class="col-md-12">
          <div class="card card-2">
            <h3><a href= "post.php?id=<?php echo $row['id'] ; ?> "  >
              <?php echo $row["question"]; ?> 


              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="50" height="20"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#3498db"><path d="M155.5525,6.88c-5.73781,-0.09406 -12.87312,3.58781 -20.1025,7.8475l21.8225,21.8225c6.19469,-10.50812 11.16656,-20.97594 5.16,-26.9825c-1.88125,-1.88125 -4.27312,-2.64719 -6.88,-2.6875zM124.3775,11.0725c-7.39062,0.33594 -19.30969,3.18469 -31.4975,15.3725c-12.45656,12.44313 -17.91219,22.60188 -21.5,29.3475c-1.73344,3.26531 -3.13094,5.79156 -4.6225,7.4175c-2.86219,3.1175 -6.78594,1.77375 -7.2025,1.6125c-1.76031,-0.72562 -3.78937,0.06719 -4.515,1.8275c-0.72562,1.76031 0.06719,3.78938 1.8275,4.515c0.17469,0.06719 2.41875,0.9675 5.375,0.9675c1.65281,0 3.50719,-0.33594 5.375,-1.1825c2.52625,-2.6875 5.10625,-5.36156 7.6325,-7.955c0.71219,-1.23625 1.37063,-2.51281 2.15,-3.9775c3.60125,-6.7725 8.58656,-16.0175 20.3175,-27.735c11.15313,-11.13969 21.72844,-13.41062 27.52,-13.545c0.84656,-0.67187 1.70656,-1.19594 2.365,-1.72l2.365,-1.935l2.9025,-1.8275c-0.3225,-0.24187 -0.59125,-0.52406 -0.9675,-0.645c-0.28219,-0.09406 -3.09062,-0.73906 -7.525,-0.5375zM129.7525,18.705c-7.31,5.71094 -26.56594,21.19094 -46.87,41.495c-21.715,21.715 -46.31906,50.56531 -53.535,59.125l23.3275,23.3275c8.55969,-7.2025 37.41,-31.82 59.125,-53.535c20.30406,-20.30406 35.78406,-39.54656 41.495,-46.87zM25.585,125.345c-9.94375,15.00969 -12.42969,25.39688 -13.115,29.455c0,0.01344 -0.1075,-0.01344 -0.1075,0l-4.6225,4.515c-1.34375,1.34375 -1.34375,3.60125 0,4.945c0.67188,0.67188 1.58563,0.9675 2.4725,0.9675c0.88688,0 1.80063,-0.29562 2.4725,-0.9675l4.515,-4.6225c0.01344,0 -0.01344,-0.1075 0,-0.1075c4.05813,-0.68531 14.45875,-3.17125 29.455,-13.115z"></path></g></g></svg></a></h3>

           

                <br>
                

               

              

             <div class="ee" >
             
                           <?php
             if(mysqli_num_rows($ansrun)>0)
              {  ?>  <p><b>Answer : </b> <?php  echo $ansfin["comment"]; ?> </p>
              <?php
              }
             else
              {    ?> 
              <p> No Answers yet! </p>
              <?php 


              }
            ?>

            <div ><small> <?php  echo $ansfin['time']."  " ; ?> <b><?php  

                                          $connn = mysqli_connect("localhost","root","","");
                                          mysqli_select_db($connn,"forum");
                                       $id=$ansfin['author'];
                                       // echo  $id;

                                          // echo"hhhh";
                                         $insert_query3 = "SELECT * FROM `user_details` WHERE `UserNo`='$id'";

                        $res3=mysqli_query($connn, $insert_query3);
                         $row3=mysqli_fetch_assoc($res3);



                            echo $row3['UserFullName'];


                                        ?></b></small></div>

               </div>

              <br>
             
             <div class="ee" >

             <div class="col-md-4">
              <p  style="font-size: 1.2rem;"> <b>Category : </b><?php echo $row["topic"] ;?></p>

              </div>
              <div class="col-md-4">
              <p  style="font-size: 1.2rem;"> <?php 
              if($zzz[0]==0) {echo " Not answered by anyone" ;}
              else {echo $zzz[0] - 1 ." more answers";}?>   </p>

              </div>
              
              <div class="col-md-4">
                <p style="font-size: 1.2rem;"> <?php echo $row["time"]; ?> </p>
              </div>

              </div>
              <br>
            
          </div>
        </div>
        
      </div>
    </div>

            <br>
               <?php
               }}?>`;

               </script>
               <?php
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