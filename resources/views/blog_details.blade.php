<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Courses | Education</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/slicknav.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/hamburgers.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <!--? Preloader Start -->
   <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <img src="assets/img/logo/loder.png" alt="">
         </div>
      </div>
   </div>
</div>
<!-- Preloader Start -->
<!-- Header Start -->
<div class="header-area header-transparent">
   <div class="main-header ">
      <div class="header-bottom  header-sticky">
         <div class="container-fluid">
            <div class="row align-items-center">
               <!-- Logo -->
               <div class="col-xl-2 col-lg-2">
                  <div class="logo">
                     <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-xl-10 col-lg-10">
                  <div class="menu-wrapper d-flex align-items-center justify-content-end">
                     <!-- Main-menu -->
                     <div class="main-menu d-none d-lg-block">
                        <nav>
                           <ul id="navigation">                                                                                          
                              
                              <li><a href="{{ route('home') }}">Home</a></li>
                              <li><a href="{{ route('dashboard') }}">Profile</a></li>
                             
                              
                              
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div> 
               <!-- Mobile Menu -->
               <div class="col-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Header End -->
<main>
   <!--? slider Area Start-->
   <section class="slider-area slider-area2">
     <div class="slider-active">
       <!-- Single Slider -->
       <div class="single-slider slider-height2">
         <div class="container">
           <div class="row">
             <div class="col-xl-8 col-lg-11 col-md-12">
               <div class="hero__caption hero__caption2">
                 <h1 data-animation="bounceIn" data-delay="0.2s">Add course</h1>
                 <!-- breadcrumb Start-->
               
               <!-- breadcrumb End -->
            </div>
         </div>
      </div>
   </div>          
</div>
</div>
</section>
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
   <div class="container">
      
      
      
      <div class="comment-form">
      @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

         <h4>Create a course</h4>
         <form class="form-contact comment_form" action="{{ route('courses.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" name="field" id="field" type="text" placeholder="Field" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input class="form-control" name="duration" id="duration" type="number" placeholder="Duration" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Course</button>
    </div>
</form>
      </div>
   </div>
  
</div>
</div>
</section>
<!-- Blog Area End -->
</main>
 
<!-- Scroll Up -->

<div id="back-top" >
   <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>