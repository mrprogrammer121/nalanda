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
      ///echo $query;die;
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
      <title>Cars | Nalanda Tour</title>
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
                     <h3>Car Listing</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>car listing</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
      <!-- Car Listing Area Start -->
      <section class="gauto-car-listing section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="car-list-left">
                     <div class="sidebar-widget">
                        <form action="#" method="post">
                           <p>
                              <input type="text" placeholder="From Address" / name="fromaddress" required="">
                           </p>
                           <p>
                              <input type="text" placeholder="To Address" / name="toaddress" required="">
                           </p>
                           <p>
                              <select name="service" required="" class="form-control">
                                 <option value="">Select Car</option>
                                 <option value="AC Car">AC Car</option>
                                 <option value="Non-AC Car">Non-AC Car</option>
                              </select>
                           </p>
                           <p>
                              <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text" required="">
                           </p>
                           <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true" >
                              <input type="text" class="form-control" placeholder="Journey Time" /name="times" required="">
                           </p>
                           <p>
                              <input type="text" placeholder="Mobile Number"  name="mobile" required="">
                           </p>
                           <p>
                              <button type="submit" class="gauto-theme-btn" name="submit">Book Now</button>
                           </p>
                        </form>
                     </div>
                     <div class="sidebar-widget">
                        <ul class="service-menu">
                           <li class="active">
                              <a href="book-now.php">All Brands</a>
                           </li>
                           <li>
                              <a href="book-now.php">Toyota</a>
                           </li>
                           <li>
                              <a href="book-now.php">nissan</a>
                           </li>
                           <li>
                              <a href="book-now.php">mercedes</a>
                           </li>
                           <li>
                              <a href="book-now.php">hyundai</a>
                           </li>
                           <li>
                              <a href="book-now.php">Audi</a>
                           </li>
                           <li>
                              <a href="book-now.php">datsun</a>
                           </li>
                           <li>
                              <a href="book-now.php">Mitsubishi</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <h3 class="<?php echo $color;?>"><?php echo $message;?></h3>
                  <div class="car-listing-right">
                     <div class="car-grid-list">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single-offers">
                                 <div class="offer-image">
                                    <a href="#">
                                    <img src="assets/img/nissan-offer.png" alt="offer 1" />
                                    </a>
                                 </div>
                                 <div class="offer-text">
                                    <a href="#">
                                       <h3>Nissan 370Z</h3>
                                    </a>
                                    <h4>Rs. 11.00<span>/ Km</span></h4>
                                    <ul>
                                       <li><i class="fa fa-car"></i>Model:2017</li>
                                       <li><i class="fa fa-cogs"></i>Automatic</li>
                                       <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                    </ul>
                                    <div class="offer-action">
                                       <a href="book-now.php" class="offer-btn-1">Book Now</a>
                                       <a href="contact.php" class="offer-btn-2">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-offers">
                                 <div class="offer-image">
                                    <a href="#">
                                    <img src="assets/img/audi-offer.png" alt="offer 1" />
                                    </a>
                                 </div>
                                 <div class="offer-text">
                                    <a href="#">
                                       <h3>Audi Q3</h3>
                                    </a>
                                    <h4>Rs. 11.00<span>/ Km</span></h4>
                                    <ul>
                                       <li><i class="fa fa-car"></i>Model:2017</li>
                                       <li><i class="fa fa-cogs"></i>Automatic</li>
                                       <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                    </ul>
                                    <div class="offer-action">
                                       <a href="book-now.php" class="offer-btn-1">Book Now</a>
                                       <a href="contact.php" class="offer-btn-2">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single-offers">
                                 <div class="offer-image">
                                    <a href="#">
                                    <img src="assets/img/bmw-offer.png" alt="offer 1" />
                                    </a>
                                 </div>
                                 <div class="offer-text">
                                    <a href="#">
                                       <h3>BMW X3</h3>
                                    </a>
                                    <h4>Rs. 11.00<span>/ Km</span></h4>
                                    <ul>
                                       <li><i class="fa fa-car"></i>Model:2017</li>
                                       <li><i class="fa fa-cogs"></i>Automatic</li>
                                       <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                    </ul>
                                    <div class="offer-action">
                                          <a href="book-now.php" class="offer-btn-1">Book Now</a>
                                          <a href="contact.php" class="offer-btn-2">Contact Us</a>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-offers">
                                 <div class="offer-image">
                                    <a href="#">
                                    <img src="assets/img/toyota-offer-2.png" alt="offer 1" />
                                    </a>
                                 </div>
                                 <div class="offer-text">
                                    <a href="#">
                                       <h3>Toyota Camry</h3>
                                    </a>
                                    <h4>Rs. 11.00<span>/ Km</span></h4>
                                    <ul>
                                       <li><i class="fa fa-car"></i>Model:2017</li>
                                       <li><i class="fa fa-cogs"></i>Automatic</li>
                                       <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                    </ul>
                                    <div class="offer-action">
                                          <a href="book-now.php" class="offer-btn-1">Book Now</a>
                                          <a href="contact.php" class="offer-btn-2">Contact Us</a>
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single-offers">
                                 <div class="offer-image">
                                    <a href="#">
                                    <img src="assets/img/marcedes-offer.png" alt="offer 1" />
                                    </a>
                                 </div>
                                 <div class="offer-text">
                                    <a href="#">
                                       <h3>marcedes S-class</h3>
                                    </a>
                                    <h4>Rs. 11.00<span>/ Km</span></h4>
                                    <ul>
                                       <li><i class="fa fa-car"></i>Model:2017</li>
                                       <li><i class="fa fa-cogs"></i>Automatic</li>
                                       <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                    </ul>
                                    <div class="offer-action">
                                          <a href="book-now.php" class="offer-btn-1">Book Now</a>
                                          <a href="contact.php" class="offer-btn-2">Contact Us</a>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-offers">
                                 <div class="offer-image">
                                    <a href="#">
                                    <img src="assets/img/audi-offer.png" alt="offer 1" />
                                    </a>
                                 </div>
                                 <div class="offer-text">
                                    <a href="#">
                                       <h3>Audi Q3</h3>
                                    </a>
                                    <h4>Rs. 11.00<span>/ Km</span></h4>
                                    <ul>
                                       <li><i class="fa fa-car"></i>Model:2017</li>
                                       <li><i class="fa fa-cogs"></i>Automatic</li>
                                       <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                    </ul>
                                    <div class="offer-action">
                                       <a href="book-now.php" class="offer-btn-1">Book Now</a>
                                       <a href="contact.php" class="offer-btn-2">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gauto-promo-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="promo-box-left">
                     <img src="assets/img/toyota-offer-2.png" alt="promo car" />
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="promo-box-right">
                     <h3>Do You Want To Book A Car? So Don't be Late.</h3>
                     <a href="book-now.php" class="gauto-btn">Book Now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
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