<?php

session_start();

// include("includes/db.php");
include("includes/header.php");
include("includes/main.php");

?>

   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- top -->
                    
      <!-- end header -->
            <div class="full_bg">
      <!-- header inner -->
         <div class="section">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide slider_main">
               <ol class="carousel-indicators ">
                  <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                  <li data-target="#banner1" data-slide-to="1" class="">02</li>
                  <li data-target="#banner1" data-slide-to="2" class="active">03</li>
               </ol>
               <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="photog">
                                    <h1>Care early<br>Coronavirus</h1>
                                    <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.php" >About Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Care early<br>Coronavirus</h1>
                                    <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.php" >About Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- third slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Care early<br>Coronavirus</h1>
                                    <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.php" >About Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- controls -->
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
                   <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2>About Corona Virus </h2>
                     <p>English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                     </p>
                     <a class="read_more" href="about.php">About More</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="images/about.png" alt="#"/></figure>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end about -->
     <!-- coronata -->
      <div class="coronata">
         <div class="container">
            <div class="row d_flex grid">
               <div class="col-md-7">
                  <div class="coronata_img text_align_center">
                     <figure><img src="images/corona.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5 oder1">
                  <div class="titlepage text_align_left">
                     <h2>Coronavirus what it is?</h2>
                     <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                     </p>
                     <a class="read_more" href="coronata.php">About More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end coronata -->
   
        <!-- protect -->
      <div class="protect">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>How to Protect Yourself</h2>
                     <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using  
                     </p>
                  </div>
               </div>
            </div>
         </div>
           <div class="protect_bg">
         <div class="container">
             <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro1.png" alt="#"/></i>
                           <h3> Wear Mask</h3>
                           <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                          </div>
                           <a class="read_more" href="protect.php">Read More</a>
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro2.png" alt="#"/></i>
                           <h3> Wash Your Hands</h3>
                           <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                          </div>
                           <a class="read_more" href="protect.php">Read More</a>
                        </div>
                     </div>
                     <div class="item">
                         <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="images/pro3.png" alt="#"/></i>
                           <h3> Stay at Home</h3>
                           <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                          </div>
                           <a class="read_more" href="protect.php">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
      </div>
         </div>
      </div>
      <!-- end protect -->
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Coronavirus Cases</h2>
                     <p>making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful</p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases1.png" alt="#"/></figure>
                      <a class="read_more" href="cases.php">Read More</a>
                     <div class="nostrud">
                        <h3>Cases 01</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases2.png" alt="#"/></figure>
                      <a class="read_more" href="cases.php">Read More</a>
                     <div class="nostrud">
                        <h3>Cases 02</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases3.png" alt="#"/></figure>
                      <a class="read_more" href="cases.php">Read More</a>
                     <div class="nostrud">
                        <h3>Cases 03</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cases -->
         <!-- doctors -->
      <div class="doctors">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>What doctors say..</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-6">
                     <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="images/doctor1.png" alt="#"/></i>
                        <h3>Dr.Golap den</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
                          <div class=" col-md-6">
                     <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="images/doctor2.png" alt="#"/></i>
                        <h3>Dr.Golap den</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- end cases -->
<!-- update -->
<div class="update">
   <div class="cevery_white">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Get Every Update.... </h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="cevery_bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <form id="colof" class="form_subscri">
                  <input class="newsl" placeholder="Your Email" type="text" name="Email">
                  <button class="subsci_btn">Subscribe Now</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- update -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Resources</h3>
                              <ul class="menu_footer">
                                 <li><a href="index.php">Home</a><li>
                                 <li><a href="javascript:void(0)">What we do</a><li>
                                 <li> <a href="javascript:void(0)">Media</a><li>
                                 <li> <a href="javascript:void(0)">Travel Advice</a><li>
                                 <li><a href="javascript:void(0)">Protection</a><li>
                                 <li><a href="javascript:void(0)">Care</a><li>
                              </ul>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>About</h3>
                              <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                           </div>
                        </div>
                     
                
                       
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact  Us</h3>
                                <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Making this the first true  
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Call : +01 1234567890
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email : demo@gmail.com</a>
                        </li>
                     </ul>
                            
                           
                     </div>
                  </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>countrys</h3>
                              <div class="map">
                                <img src="images/map.png" alt="#"/>
                              </div>
                           </div>
                        </div>
                    
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2022 Design by <a href=""> SGU</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>