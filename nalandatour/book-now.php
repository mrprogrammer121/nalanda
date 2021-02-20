<?php

   include('admin/config.php');
   $color="";
   $message="";

   if(isset($_POST['submit']))
   {
      $fromaddress=$_POST['fromaddress'];
      $toaddress=$_POST['toaddress'];
      $service=$_POST['service'];
      $reservation_date=$_POST['reservation_date'];
      $times=$_POST['times'];
      $dates=date('d/m/Y');
      $mobile=$_POST['mobile'];

      $query="insert into findcar(fromaddress,toaddress,service,reservation_date,times,dates,mobile) values('$fromaddress','$toaddress','$service','$reservation_date','$times','$dates','$mobile')";
      //echo $query;die;
      $result=mysqli_query($conn,$query);
      if($result)
      {
         $color="alert alert-success";
         $message="Query Has Been Send !! We Will Contact You Soon";
         echo "<script>alert('Query Has Been Send !! We Will Contact You Soon');</script>";
      }else
      {
         $color="alert alert-danger";
         $message="Query Has Not  Been Send";
      }
   }

?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Title -->
      <title>Book Now | Nalanda Tour</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!--Datepicker css-->
      <link rel="stylesheet" href="assets/css/jquery.datepicker.css">
      <!--Nice Select css-->
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="assets/css/lightgallery.min.css">
      <!--ClockPicker css-->
      <link rel="stylesheet" href="assets/css/jquery-clockpicker.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
        <?php include('header.php');?>       
      <!-- Breadcromb Area Start -->
      <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Book Now</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Book Now</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
      <!-- Contact Area Start -->
      <section class="gauto-contact-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                   <h3 class="<?php echo $color;?>"><?php echo $message;?></h3>
                  <div class="contact-left">
                     <h3>Book Now Car</h3>
                     <form action="#" method="post">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="text" placeholder="From Address" / name="fromaddress" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="text" placeholder="To Address" / name="toaddress" required="">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single-contact-field" >
                                 <select name="service" required="" class="form-control">
                                    <option value="">Select Car</option>
                                    <option value="AC Car">AC Car</option>
                                    <option value="Non-AC Car">Non-AC Car</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text" required="">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="single-contact-field">
                                 <input type="text" class="form-control" placeholder="Journey Time"  name="times" required="">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="single-contact-field">
                                 <input type="text" class="form-control" placeholder="Mobile Number"  name="mobile" required="">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="single-contact-field">
                                 <button type="submit" class="gauto-theme-btn" name="submit"><i class="fa fa-paper-plane"></i> Book Now</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="contact-right">
                     <h3>Contact information</h3>
                     <div class="contact-details">
                        <p><i class="fa fa-map-marker"></i>  Nalanda
                        Main road,near post office<br>
                        Chandi,Nalanda – 803108</p>
                        <p><i class="fa fa-map-marker"></i>
                        East Ramkrishna Nagar,
                        Near <br>holy faith school,patna- 800007</p>
                        <div class="single-contact-btn">
                           <h4>Email Us</h4>
                           <a href="mail:book@nalandatour.in">book@nalandatour.in</a>
                        </div>
                        <div class="single-contact-btn">
                           <h4>Call Us</h4>
                           <a href="#">+91 - 8434268871</a>
                        </div>
                        <div class="social-links-contact">
                           <h4>Follow Us:</h4>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Area End -->
       <?php include('footer.php');?>
      <!--Jquery js-->
      <script src="assets/js/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="assets/js/popper.min.js"></script>
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!--Lightgallery js-->
      <script src="assets/js/lightgallery-all.js"></script>
      <script src="assets/js/custom_lightgallery.js"></script>
      <!--Slicknav js-->
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!--Nice Select js-->
      <script src="assets/js/jquery.nice-select.min.js"></script>
      <!-- Datepicker JS -->
      <script src="assets/js/jquery.datepicker.min.js"></script>
      <!--ClockPicker JS-->
      <script src="assets/js/jquery-clockpicker.min.js"></script>
      <!--Main js-->
      <script src="assets/js/main.js"></script>
   </body>
</html>