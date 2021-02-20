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
      <title>Nalanda Tour </title>
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
      <!-- Slider Area Start -->
      <section class="gauto-slider-area fix">
         <div class="gauto-slide owl-carousel">
            <div class="gauto-main-slide slide-item-1">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p>for Book Now Rs.11 per Km.</p>
                                 <h2>Reserved Now & Get <span>50% Off</span></h2>
                                 <a href="book-now.php" class="gauto-btn">Book Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gauto-main-slide slide-item-2">
               <div class="gauto-main-caption">
                  <div class="gauto-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-text">
                                 <p>for Book Now Rs.11 per Km</p>
                                 <h2>Book Now & Get <span>50% Off</span></h2>
                                 <a href="book-now.php" class="gauto-btn">Book Now!</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Slider Area End -->
      <!-- Find Area Start -->
      <section class="gauto-find-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="find-box">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="find-text">
                              <h3>Search Your Best Cars here.</h3>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <h4 class="<?php echo $color;?>"><?php echo $message;?></h4>
                           <div class="find-form">
                              <form  method="post">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <p>
                                          <input type="text" placeholder="From Address" / name="fromaddress" required="">
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <input type="text" placeholder="To Address" / name="toaddress" required="">
                                       </p>
                                    </div>
                                    <div class="col-md-4">
                                       <p>
                                          <select name="service" required="" class="form-control">
                                             <option value="">Select Car</option>
                                             <option value="AC Car">AC Car</option>
                                             <option value="Non-AC Car">Non-AC Car</option>
                                          </select>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-3">
                                       <p>
                                          <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text" required="">
                                       </p>
                                    </div>
                                    <div class="col-md-3">
                                       <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                          <input type="text" class="form-control" placeholder="Journey Time" / name="times" required="">
                                       </p>
                                    </div>
                                    <div class="col-md-3">
                                       <p class="input-group" data-placement="bottom" data-align="top" data-autoclose="true">
                                          <input type="text" class="form-control" placeholder="Mobile No" / name="mobile" required="">
                                       </p>
                                    </div>
                                    <div class="col-md-3">
                                       <p>
                                          <button type="submit" class="gauto-theme-btn" name="submit">Book Now</button>
                                       </p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Find Area End -->
      <!-- About Area Start -->
      <section class="gauto-about-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="about-left">
                     <h4>about us</h4>
                     <h2>Welcome to Nalanda Toor Service</h2>
                     <p style="font-size:16px;">We provide best services to customer, <b>book car for part, weeding, tours in local, or outstation. Net and clean, good educated and experienced driver</b>.<br> Please contact on <span class="text-danger">What's app and mobile- 8434268871</span></p>
                     <div class="about-list">
                        <ul>
                           <li><i class="fa fa-check"></i>We are a trusted name</li>
                           <li><i class="fa fa-check"></i>we deal in have all brands</li>
                           <li><i class="fa fa-check"></i>have a larger stock of vehicles</li>
                           <li><i class="fa fa-check"></i>we are at worldwide locations</li>
                        </ul>
                     </div>
                     <div class="about-signature">
                        <!-- <div class="signature-left">
                           <img src="assets/img/signature.png" alt="signature" />
                        </div> -->
                        <div class="signature-right">
                           <h3>Nalanda Toor</h3>
                           <p>Director</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-right">
                     <img src="assets/img/about.png" alt="car" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="gauto-about-promo section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="about-promo-text">
                     <h3>We are proud of our business. <span>Book Car</span> Now!</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="about-promo-image">
                     <img src="assets/img/cars.png" alt="about promo" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- About Area End -->
      <!-- About Page Area Start -->
      <section class="gauto-about-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="about-right">
                     <img src="assets/img/dus.png" alt="car" />
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-left">
                     <h4>Choose Us</h4>
                     <h2>Nalanda Tour</h2>
                     <p style="font-size:16px"><b style="color:red;">Patna is capital of Bihar</b> and is home of best tourist attraction places of the country. One of the finest ways of seeing the historical sites of Bihar is through Luxury or Deluxe Taxi (like Multi pleasure TOYOTA, ertigazxi+) & Bus, Coach Rental services. We also offer Car rentals for areas adjoining Bihari circuit to ensure your pleasurable tour</p><br>
                     <p style="font-size:16px"><b style="color:red;">Nalandatour</b> on its own provide and facilitates you with best car, bus hire in any part of country to make your trip more contented. With well-organized Car & Coach rental service and proper guidance, you can make your trip across the city of Bihar with ease.</p>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- About Page Area End -->
      <!-- Service Area Start -->
      <section class="gauto-service-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>see our</h4>
                     <h2>Latest Services</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="service-slider owl-carousel">
                     <div class="single-service">
                        <span class="service-number">01 </span>
                        <div class="service-icon">
                           <img src="assets/img/city-transport.png" alt="city trasport" />
                        </div>
                        <div class="service-text">
                           <a href="book-now.php">
                              <h3>शहर घूमना</h3>
                           </a>
                           <p>Nalandatour.in offers the most reliable service for the tourists as we as the localities to travel to their preferred location. There are no hidden charges involved in your booking as we always follow the approach of transparent billing for cabs and to provide best in class services. Whether you are taking Patna airport cabs for a pickup or drop service, <a href="https://nalandatour.in">Nalandatour.in</a> provides cost-effective taxis in quick time</p>
                           <a href="book-now.php" target="_blank" class="btn btn-danger text-white">Book Now</a>
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">02 </span>
                        <div class="service-icon">
                           <img src="assets/img/airport-transport.png" alt="airport trasport" />
                        </div>
                        <div class="service-text">
                           <a href="book-now.php">
                              <h3>हवाई यात्रा पर पहुँचें</h3>
                           </a>
                           <p>Patna Airport is one of the important passenger airports in the city of Patna, Bihar. This airport is widely known as Jaiprakesh Narayan Airport. This airport was built in the year 1973 and is located 5 kms southwest of Patna. The Airport Authority of India classified this airport as a Restricted International Airport. Patna Airport is the 20th busiest Airport in India since the domestic traffic is increasing quickly. </p>
                            <a href="book-now.php" target="_blank" class="btn btn-danger text-white">Book Now</a>
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">04 </span>
                        <div class="service-icon">
                           <img src="assets/img/wedding-ceremony.png" alt="wedding trasport" />
                        </div>
                        <div class="service-text">
                           <a href="book-now.php">
                              <h3>शादी समारोह</h3>
                           </a>
                           <p>चंद मिनटों में शादी-पार्टी के लिए सस्ते में करें गाड़ियों की बुकिंग- आपको शादी या कोई खास मौके पर ज्यादा गाड़ियों की दरकार है तो आप सीधे  संपर्क कर सकते हैं. खास मौकों के लिए <a href="http://nalandatour.in/">Nalandatour.iN </a>विशेष छूट के साथ मस्त गाड़ियां देती हैं. इन गाड़ियों की क्वालिटी के साथ-साथ आपको हर चीज पसंद आएगी.</p>
                            <a href="book-now.php" target="_blank" class="btn btn-danger text-white">Book Now</a>
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">05 </span>
                        <div class="service-icon">
                           <img src="assets/img/hotel-transport.png" alt="wedding trasport" />
                        </div>
                        <div class="service-text">
                           <a href="book-now.php">
                              <h3>पूरे शहर का दौरा</h3>
                           </a>
                           <p>Nalandatour.in offers the most reliable service for the tourists as we as the localities to travel to their preferred location. There are no hidden charges involved in your booking as we always follow the approach of transparent billing for cabs and to provide best in class services. Whether you are taking Patna airport cabs for a pickup or drop service, http://nalandatour.in/ provides cost-effective taxis in quick time
</p>
                            <a href="book-now.php" target="_blank" class="btn btn-danger text-white">Book Now</a>
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">06 </span>
                        <div class="service-icon">
                           <img src="assets/img/luggege-transport.png" alt="wedding trasport" />
                        </div>
                        <div class="service-text">
                           <a href="book-now.php">
                              <h3>सामान यात्रा</h3>
                           </a>
                           <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p>
                            <a href="book-now.php" target="_blank" class="btn btn-danger text-white">Book Now</a>
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">07 </span>
                        <div class="service-icon">
                           <img src="assets/img/luggege-transport.png" alt="wedding trasport" />
                        </div>
                        <div class="service-text">
                           <a href="book-now.php">
                              <h3>छुट्टी यात्रा</h3>
                           </a>
                           <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur adipiscing elit.</p>
                            <a href="book-now.php" target="_blank" class="btn btn-danger text-white">Book Now</a>
                        </div>
                     </div>
                     <div class="single-service">
                        <span class="service-number">07 </span>
                        <div class="service-icon">
                           <img src="assets/img/luggege-transport.png" alt="wedding trasport" />
                        </div>
                        <div class="service-text">
                           <a href="book-now.php">
                              <h3>बरात के लिए</h3>
                           </a>
                           <p>चंद मिनटों में शादी-पार्टी के लिए सस्ते में करें गाड़ियों की बुकिंग- आपको शादी या कोई खास मौके पर ज्यादा गाड़ियों की दरकार है तो आप सीधे  संपर्क कर सकते हैं. खास मौकों के लिए <a href="http://nalandatour.in/">Nalandatour.iN </a>विशेष छूट के साथ मस्त गाड़ियां देती हैं. इन गाड़ियों की क्वालिटी के साथ-साथ आपको हर चीज पसंद आएगी.</p>
                            <a href="book-now.php" target="_blank" class="btn btn-danger text-white">Book Now</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Service Area End -->
       
       
      <!-- Promo Area Start -->
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
                     <h3>Do You Want To Book Now A Car ? So Don't be Late.</h3>
                     <a href="book-now.php" class="gauto-btn">Book Now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Promo Area End -->
       
       
      <!-- Offers Area Start -->
      <section class="gauto-offers-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Come with</h4>
                     <h2>Hot offers</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="offer-tabs">
                     <ul class="nav nav-tabs" id="offerTab" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All Brands</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="nissan-tab" data-toggle="tab" href="#nissan" role="tab" aria-controls="nissan" aria-selected="false">nissan</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="Toyota-tab" data-toggle="tab" href="#Toyota" role="tab" aria-controls="Toyota" aria-selected="false">Toyota</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="Audi-tab" data-toggle="tab" href="#Audi" role="tab" aria-controls="Audi" aria-selected="false">Audi</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" id="mercedes-tab" data-toggle="tab" href="#mercedes" role="tab" aria-controls="mercedes" aria-selected="false">mercedes</a>
                        </li>
                     </ul>
                     <div class="tab-content" id="offerTabContent">
                        <!-- All Tab Start -->
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/offer-toyota.png" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
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
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                        </div>
                        <!-- All Tab End -->
                         
                        <!-- Nissan Tab Start -->
                        <div class="tab-pane fade" id="nissan" role="tabpanel" aria-labelledby="nissan-tab">
                           <div class="row">
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                                          <a href="#" class="offer-btn-1">Rent Car</a>
                                          <a href="#" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Nissan Tab End -->
                         
                        <!-- Toyota Tab Start -->
                        <div class="tab-pane fade" id="Toyota" role="tabpanel" aria-labelledby="Toyota-tab">
                           <div class="row">
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/offer-toyota.png" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
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
                              <div class="col-lg-4">
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
                        <!-- Toyota Tab Start -->
                         
                        <!-- Audi Tab Start -->
                        <div class="tab-pane fade" id="Audi" role="tabpanel" aria-labelledby="Audi-tab">
                           <div class="row">
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="#">
                                       <img src="assets/img/toyota-offer-2.png" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3>Toyota Alphard</h3>
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
                        <!-- Audi Tab End -->
                         
                        <!-- Marcedes Tab Start -->
                        <div class="tab-pane fade" id="mercedes" role="tabpanel" aria-labelledby="mercedes-tab">
                           <div class="row">
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                              <div class="col-lg-4">
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
                           </div>
                        </div>
                        <!-- Marcedes Tab End -->
                         
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Offers Area End -->
       
       
      <!-- Testimonial Area Start -->
      <section class="gauto-testimonial-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>what customer says</h4>
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonial-slider owl-carousel">
                     <div class="single-testimonial">
                        <div class="testimonial-text">
                           <p>".I traveled from Patna to Sathi (Champaram). I am new to this place and worried about the travel but I found Nalandatour.in through google. He provided me a  good car and driver and I reached my place safely and on time. Thanks to the nalandatour services and Driver. I am giving 5 start rating and must recommend."</p>
                           <div class="testimonial-meta">
                              <!-- <div class="client-image">
                                 <img src="assets/img/testimonial.jpg" alt="testimonial" />
                              </div> -->
                              <div class="client-info">
                                 <h3>Vinay Singh</h3>
                                 <p>Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="single-testimonial">
                        <div class="testimonial-text">
                           <p>"Forem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                           <div class="testimonial-meta">
                              <div class="client-image">
                                 <img src="assets/img/testimonial-2.jpg" alt="testimonial" />
                              </div>
                              <div class="client-info">
                                 <h3>Sherief Arafa</h3>
                                 <p>Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="single-testimonial">
                        <div class="testimonial-text">
                           <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                           <div class="testimonial-meta">
                              <div class="client-image">
                                 <img src="assets/img/testimonial.jpg" alt="testimonial" />
                              </div>
                              <div class="client-info">
                                 <h3>Marco Ghaly</h3>
                                 <p>Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="single-testimonial">
                        <div class="testimonial-text">
                           <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                           <div class="testimonial-meta">
                              <div class="client-image">
                                 <img src="assets/img/testimonial.jpg" alt="testimonial" />
                              </div>
                              <div class="client-info">
                                 <h3>Marco Ghaly</h3>
                                 <p>Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Testimonial Area End -->
       
       
      <!-- Driver Area Start -->
      <!-- <section class="gauto-driver-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>experts</h4>
                     <h2>our Members</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="single-driver">
                     <div class="driver-image">
                        <img src="assets/img/driver-1.jpg" alt="driver 1" />
                        <div class="hover">
                           <ul class="social-icon">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="driver-text">
                        <div class="driver-name">
                           <a href="#">
                              <h3>Marco Ghaly</h3>
                           </a>
                           <p>4 years experience</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="single-driver">
                     <div class="driver-image">
                        <img src="assets/img/driver-2.jpg" alt="driver 1" />
                        <div class="hover">
                           <ul class="social-icon">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="driver-text">
                        <div class="driver-name">
                           <a href="#">
                              <h3>Sheref joe</h3>
                           </a>
                           <p>7 years experience</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="single-driver">
                     <div class="driver-image">
                        <img src="assets/img/driver-4.jpg" alt="driver 1" />
                        <div class="hover">
                           <ul class="social-icon">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="driver-text">
                        <div class="driver-name">
                           <a href="#">
                              <h3>Arafa lep</h3>
                           </a>
                           <p>3 years experience</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="single-driver">
                     <div class="driver-image">
                        <img src="assets/img/driver-3.jpg" alt="driver 1" />
                        <div class="hover">
                           <ul class="social-icon">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="driver-text">
                        <div class="driver-name">
                           <a href="#">
                              <h3>Endly Kent</h3>
                           </a>
                           <p>4 years experience</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="load-more">
                     <a href="#" class="gauto-btn">More Members</a>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- Driver Area End -->
       
       
      <!-- Call Area Start -->
      <section class="gauto-call-area" style="margin-bottom: 20px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="call-box">
                     <div class="call-box-inner">
                        <h2>With Over <span>150+</span> Partners Locations</h2>
                        <p>Labore dolore magna aliqua ipsum veniam quis nostrud exercitation voluptate velit cillum dolore feu fugiat nulla excepteur sint occaecat sed ipsum cupidatat proident culpa exercitation ullamco laboris aliquik.</p>
                        <div class="call-number">
                           <div class="call-icon">
                              <i class="fa fa-phone"></i>
                           </div>
                           <div class="call-text">
                              <p>need any help?</p>
                              <h4><a href="#">+ 91 - 8434268871</a></h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Call Area End -->
       
       
      <!-- Blog Area Start -->
     <!--  <section class="gauto-blog-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>latest</h4>
                     <h2>our blog</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4">
                  <div class="single-blog">
                     <div class="blog-image">
                        <a href="#">
                        <img src="assets/img/blog-1.jpg" alt="blog 1" />
                        </a>
                     </div>
                     <div class="blog-text">
                        <h3><a href="#">if Your Car's bettery down.</a></h3>
                        <div class="blog-meta-home">
                           <div class="blog-meta-left">
                              <p>July 13, 09:43 am</p>
                           </div>
                           <div class="blog-meta-right">
                              <p><i class="fa fa-eye"></i> 322</p>
                              <p><i class="fa fa-commenting"></i> 67</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="single-blog">
                     <div class="blog-image">
                        <a href="#">
                        <img src="assets/img/blog-2.jpg" alt="blog 1" />
                        </a>
                     </div>
                     <div class="blog-text">
                        <h3><a href="#">How often is a taxi used?</a></h3>
                        <div class="blog-meta-home">
                           <div class="blog-meta-left">
                              <p>July 13, 09:43 am</p>
                           </div>
                           <div class="blog-meta-right">
                              <p><i class="fa fa-eye"></i> 322</p>
                              <p><i class="fa fa-commenting"></i> 67</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="single-blog">
                     <div class="blog-image">
                        <a href="#">
                        <img src="assets/img/blog-3.jpg" alt="blog 1" />
                        </a>
                     </div>
                     <div class="blog-text">
                        <h3><a href="#">The best ways to pay Drivers</a></h3>
                        <div class="blog-meta-home">
                           <div class="blog-meta-left">
                              <p>July 13, 09:43 am</p>
                           </div>
                           <div class="blog-meta-right">
                              <p><i class="fa fa-eye"></i> 322</p>
                              <p><i class="fa fa-commenting"></i> 67</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <?php
         include('footer.php');
       ?>
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