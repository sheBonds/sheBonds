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

<?php
session_start();
if(!isset($_SESSION['UniqueId']))
{
     header('location:login_register.php');
     //$_SESSION['sys']=0;
}
else
{ 
     $user_id=$_SESSION['UniqueId'];
}
echo $user_id;
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

.card-1{
  background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
}

.card-2{
  border: solid;
  border-color: lightblue;
  background-color: white;
  /*color: black;*/

/*   background-image: url(images/service-bg.png);
      background-repeat: no-repeat;
    background-position: bottom;
    background-size: 100px;
*/}
.ee{
  border:solid;
   border-color: lightblue;
  background-color: lightblue;

}
.conti{
  text-align: center;
  /*background-image: url(images/bg-testimonial.png);*/

}
.card-3{
   background-image: url(https://ionicframework.com/img/getting-started/theming-card.png);
      background-repeat: no-repeat;
    background-position: right;
    background-size: 80px;
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
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      

      
      
      <div id="service" class="services wow fadeIn">
         <div class="container">
           <div class="heading">
               
               <h2>Post Your Question Here </h2>
            </div>
            <div class="row">
                  <div class="container">
        
        
     <?php   
        
         $con = mysqli_connect("localhost","root","");
        mysqli_select_db($con,"forum");
        
        $q = $_GET['id'];
        $insert_query = "select * from forum where id=$q";
        $res=mysqli_query($con, $insert_query);
           $arr=mysqli_fetch_array($res);
        
        $qq=$arr['question'];
        $dd=$arr['description'];
        $aa=$arr['author'];
        $cc=$arr['topic'];
        $tt=$arr['time'];
        
        
            ?>
            <div class="conti">
            <h3><span class="badge badge-light" style="color: white;"><?php echo $cc; ?></span></h3>
            <div class="list-group">
                <div class="d-flex w-100 justify-content-between">
                    <h2 class="display-4" style="color: white;"> <?php echo $qq ?></h2>
                        <small style="background-color: white;"><?php echo $tt ; ?> by <b><?php echo $aa; ?></b></small>
                </div>
                <h5><p style="color: white;" class="mb-1"><?php echo $dd ; ?></p></h5>
            </div>

            </div>

            <?php
        
        
        
        
    $insert_query1 = "select * from comments where post_id=$q";

        $res1=mysqli_query($con, $insert_query1);
        
        if(mysqli_num_rows($res1)>0){
            
           while($row1=mysqli_fetch_assoc($res1)){
             $selectFuser="select * from user_details where UserNo=$row1[author]";
              $resUser=mysqli_query($con, $selectFuser);
              $rowUser=mysqli_fetch_assoc($resUser);
            echo "<div class=\"card bg-light border-secondary\">
            <div class=\"card-body\">
            <div class=\"row no-gutters\">
            <div class=\"col-12 col-sm-6 col-md-8\">$row1[comment]</div>
            <div class=\"col-6 col-md-4\"><small>$row1[time] by <b>$rowUser[UserFullName]</b></small></div>
            </div>
            </div>
            </div>
<br>
            <br>

            "

            ;

        
           }
           }
        else{
            echo "<div class=\"container\"><center>No Comments posted</center></div>";
        }
                
        
        ?>
           

            <!--Input Box--> 
            <br>

            <div class="card bg-light border-dark"><div class="card-body">

            <form action="#" method="post">
            <div class="row">
                <div class="input-group col-md-12">
                
                <textarea class="form-control" rows="6" id="comment"  name="comment" placeholder="Enter your answer" aria-label="Recipient's username" aria-describedby="basic-addon2"></textarea>
                </div>

                <h5 style="color: black;">Your Email Address and Name will get recorded.</h5>
 
            </div>
            <br>
                <div class="input-group " >

                <button position="center" class="btn btn-outline-dark" type="submit" name="submit">Post Comment</button>
                </div>
             

            </form>

            </div></div>


                   
                
    </div>


              </div> 
         </div>
      </div>
      <!-- end section -->
    
    <!-- doctor -->
   
    
    <!-- end doctor section -->
    
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


 
      <?php
      
       
      
    if(isset($_POST['submit'])){
        
        //  $con = mysqli_connect("localhost","root","");
        // mysqli_select_db($con,"forum");
        
        // $q = $user_id;
        // $select_query = "select * from user_details where UserNo=$q";
        // $res1=mysqli_query($con, $select_query);
        //    $arr1=mysqli_fetch_array($res1);
        
    $comment = $_POST['comment'];
    $authorid = $user_id;
      echo $authorid;
        if($comment=='' ){
               echo "<script>alert('Please Enter your answer')</script>";
           }
        else{
            
            date_default_timezone_set('Asia/Kolkata');                                          //TIME

            $timestamp = time();
            $date_time = date("d-m-Y (D) H:i:s", $timestamp);
            
                       $ins_query = "insert into comments (post_id, comment, author, time) values ('$q','$comment','$authorid','$date_time')";

                    $result=mysqli_query($con, $ins_query);
            echo "<script>alert('Submitted Successfully')</script>";
            //echo "<script>window.location.href='post.php?id=$q'</script>";
            
        }
        
        
    }
      
      echo $user_id;

      
      
      ?>



 