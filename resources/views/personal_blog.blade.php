<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <!-- ? Preloader Start -->
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
                                            
                                            
                                            
                                            <li><a href="#">Blog</a>
                                                <ul class="submenu">
                                                    
                                                    <li><a href="{{ route('courses.create') }}">Blog Details</a></li>
                                                    
                                                </ul>
                                            </li>
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Courses</h1>
                                   
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Featured courses</h2>
                        </div>

                        <div class="row justify-content-center">
    @if(isset($userCourses) && $userCourses->isNotEmpty())
        @foreach($userCourses as $course)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow border-0 rounded-lg h-100">
                    <!-- Course Card Body -->
                    <div class="card-body text-center d-flex flex-column justify-content-between">
                        <h4 class="card-title font-weight-bold text-primary">{{ $course->name }}</h4>
                        <p class="card-text"><strong>Duration:</strong> {{ $course->duration }} hours</p>
                        <p class="card-text"><strong>Field:</strong> {{ $course->field }}</p>
                    </div>

                    <div class="card-footer d-flex justify-content-between p-2">
    <!-- Edit Button (Green) -->
    <a href="{{ route('courses.edit', $course->id) }}" class="flex-fill text-center text-success text-decoration-none">
        Edit
    </a>

    <!-- Delete Button (Red) -->
    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?');" class="flex-fill text-center">
        @csrf
        @method('DELETE')
        <button type="submit" class="border-0 bg-transparent p-0 text-danger">
            Delete
        </button>
    </form>
</div>

                </div>
            </div>
        @endforeach
    @else
        <p class="text-center w-100">You haven't created any courses yet.</p>
    @endif
</div>
                        

                    </div>
                </div>
           



            </div>
        </div>
        <!-- Courses area End -->
        <!--? top subjects Area Start -->
        <div class="topic-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        
                    </div>
                </div>
               
                    </div>
                </div>
            </div>
        </div>
        <!-- top subjects End -->  
        <!-- ? services-area -->
       
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
    <script src="{{asset('./assets/js/jquery.barfiller.js')}}"></script>
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