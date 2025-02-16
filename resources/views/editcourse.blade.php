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
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/hamburgers.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
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
                 <h1 data-animation="bounceIn" data-delay="0.2s">Update course</h1>
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

         <h4>Edit a course</h4>
         <form class="form-contact comment_form" action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" name="field" class="form-control" value="{{ $course->field }}" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input type="number" name="duration" class="form-control" value="{{ $course->duration }}" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Save Changes</button>
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



<script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('./assets/js/popper.min.js')}}"></script>
<script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('./assets/js/slick.min.js')}}"></script>
<script src="{{asset('./assets/js/wow.min.js')}}"></script>
<script src="{{asset('./assets/js/animated.headline.js')}}"></script>
<script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('./assets/js/gijgo.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('./assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('./assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('./assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('./assets/js/hover-direction-snake.min.js')}}"></script>
<script src="{{asset('./assets/js/contact.js')}}"></script>
<script src="{{asset('./assets/js/jquery.form.js')}}"></script>
<script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('./assets/js/mail-script.js')}}"></script>
<script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>	
<script src="{{asset('./assets/js/plugins.js')}}"></script>
<script src="{{asset('./assets/js/main.js')}}"></script>

</body>
</html>