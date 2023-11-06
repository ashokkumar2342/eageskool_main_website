  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('front_asset/images/url_main-logo.png') }}">
   <!-- bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/bootstrap.min.css')}}" type="text/css" media="all">
   <!-- carousel CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/owl.carousel.min.css')}}" type="text/css" media="all">
   <!-- animate CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/animate.css')}}" type="text/css" media="all">
   <!-- animated-text CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/animated-text.css')}}" type="text/css" media="all">
   <!-- font-awesome CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/all.min.css')}}" type="text/css" media="all">
   <!-- font-flaticon CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/flaticon.css')}}" type="text/css" media="all">
   <!-- theme-default CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/theme-default.css')}}" type="text/css" media="all">
   <!-- meanmenu CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/meanmenu.min.css')}}" type="text/css" media="all">
   <!-- transitions CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/owl.transitions.css')}}" type="text/css" media="all">
   <!-- venobox CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/venobox/venobox.css')}}" type="text/css" media="all">
   <!-- bootstrap icons -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/bootstrap-icons.css')}}" type="text/css" media="all">
   <!-- Main Style CSS -->
   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/style.css')}}" type="text/css" media="all">  
   <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('front_asset/assets/css/responsive.css')}}" type="text/css" media="all">
  

   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/progresscircle.css')}}">

   <link rel="stylesheet" href="{{ asset('front_asset/assets/css/CalendarPicker.css')}}">
   
  
  
  <script src="{{ asset('front_asset/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('front_asset/assets/css/clash-display.css')}}">
  <!--========== loder========= -->

        <div class="loader-wrapper">
          <div class="loader"></div>
          <div class="loder-section left-section"></div>
          <div class="loder-section right-section"></div>
        </div>
      
         <!-- ==========loder-end ===============-->

       <div class="xs-sidebar-group info-group">
      <div class="xs-overlay xs-bg-black"></div>
      <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
          <div class="widget-heading">
            <a href="{{ url('#')}}" class="close-side-widget">
              <i class="far fa-times-circle"></i>
            </a>
          </div>
          <div class="sidebar-textwidget">
            <!-- Sidebar Info Content -->
            <div class="sidebar-info-contents">
              <div class="content-inner">
                <div class="nav-logo">
                  <a href="{{ url('index')}}"><img src="{{ asset('front_asset/images/F-LOGO.png')}}" alt="logo"></a>
                </div>
                <div class="content-box" style="max-height:300px;overflow-y:auto">
                  <h2>About Us</h2>
                  <p style="text-align:justify;">Eage skool is a segment of Shivam Software Solution and haves a experience of more then 20 years in it sector. Our Vision is to be a leading Web Solution company in IT sector and progress in our current position in market. We know that Customer’s growth is our growth, so we commit our customers to help in achieving their business goals. We believe in work with the accuracy and best quality. We want to be known as the reliable, innovative and user friendly software service provider in IT industry.</p>
                </div>
                <div class="contact-info">
                  <h2>Contact Us</h2>
                  <ul class="list-style-one">
                    <li><span class="bi bi-telephone-inbound"></span>Mobile No. : +91 - 9017071001</li>
                    <li><span class="icon flaticon-email"></span>Email : info@eageskool.com</li>
                    <li><span><i class="bi bi-geo-alt"></i></span>Address : India Haryan Jhajjar Gurugram Road</li>
                  </ul>
                </div>
                <!-- Social Box -->
                <ul class="social-box">
                  <li class="facebook"><a href="{{ url('#')}}" class="fab fa-facebook-f"></a></li>
                  <li class="twitter"><a href="{{ url('#')}}" class="fab fa-instagram"></a></li>
                  <li class="linkedin"><a href="{{ url('#')}}" class="fab fa-twitter"></a></li>
                  <li class="instagram"><a href="{{ url('#')}}" class="fab fa-pinterest-p"></a></li>
                  <li class="youtube"><a href="{{ url('#')}}" class="fab fa-linkedin-in"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>


    <!--==================================================-->
    <!-- Start dreamhub Main Menu  -->
    <!--==================================================-->
    <div id="sticky-header" class="digital-marketing_nav_manu">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2">
            <div class="logo">
              <a class="logo_img" href="{{ url('index')}}" title="digital-marketing">
                <img src="{{ asset('front_asset/images/main-logo.png')}}" alt="logo">
              </a>
              <a class="main_sticky" href="{{ url('index')}}" title="digital-marketing">
                <img src="{{ asset('front_asset/images/F-LOGO.png')}}" alt="logo">
              </a>
            </div>
          </div>
          <div class="col-lg-10">
            <nav class="digital-marketing_menu">
              <ul class="nav_scroll"> 
                <li><a href="{{ url('index')}}"><strong>Home</strong></a></li>
                <li><a href="{{ url('about')}}"><strong>About Us</strong></a></li>
                <li><a href="{{ url('service')}}"><strong>Product</strong></a></li>
                <li><a href="{{ url('pricing')}}"><strong>Pricing</strong></a></li>
                <li><a href="{{ url('contact')}}"><strong>Contact</strong></a></li>
                <li><a href="{{ url('faq')}}"><strong>FAQS</strong></a></li>
                <li><a href="{{ url('support')}}"><strong>Support</strong></a></li>
              </ul>
              <!-- header button -->
              
              <div class="header-main-button upper">
                <a href="{{ route('front.bookAdemo')}}">Demo</a>
              </div>
              <div class="header-main-button upper">
                <a href="{{ route('admin.login') }}">Login</a>
              </div>
              <div class="search-box-btn search-box-outer">
                <div class="nav-btn navSidebar-btn">
                  <a><i class="fas fa-bars"></i></a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- dreamhub Mobile Menu  -->

    <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
      <div class="mobile-menu">
        <nav class="digital-marketing_menu">
          <ul class="nav_scroll"  style="font-size:20px;">
             {{-- <li><a href="{{ url('#')}}">Pages <span><i class="fas fa-chevron-down"></i></span></a>
              <ul class="sub-menu">
                <li><a href="{{ url('about')}}">About Us</a></li>
                <li><a href="{{ url('service')}}">Our Service</a></li>
                <li><a href="{{ url('service-detail')}}">Service Details</a></li>
                <li><a href="{{ url('pricing')}}">Pricing</a></li>
                <li><a href="{{ url('faq')}}">Faq</a></li>
                <li><a href="{{ url('contact')}}">Contact</a></li>
              </ul>
            </li> --}}
            {{-- <li><a href="{{ url('#')}}">Blog <span><i class="fas fa-chevron-down"></i></span></a>
              <ul class="sub-menu">
                <li><a href="{{ url('blog')}}">Blog</a></li>
                <li><a href="{{ url('blog-grid')}}">Blog Grid</a></li>
                <li><a href="{{ url('blog-list')}}">Blog List</a></li>
              </ul>
            </li> --}}
             {{-- <li><a href="{{ url('#')}}">Portfolio <span><i class="fas fa-chevron-down"></i></span></a>
              <ul class="sub-menu">
                <li><a href="{{ url('portfolio')}}">Portfolio</a></li>
                <li><a href="{{ url('our-portfolio')}}">Portfolio Details</a></li>
              </ul>
            </li> --}} 
            <li><a href="{{ url('index')}}"><strong>Home</strong></a></li>
            <li><a href="{{ url('about')}}"><strong>About Us</strong></a></li>
            <li><a href="{{ url('service')}}"><strong>Product</strong></a></li>
            <li><a href="{{ url('pricing')}}"><strong>Pricing</strong></a></li>
            <li><a href="{{ url('contact')}}"><strong>Contact</strong></a></li>
            <li><a href="{{ url('faq')}}"><strong>FAQS</strong></a></li>
            <li><a href="{{ url('support')}}"><strong>Support</strong></a></li>
          </ul>
          <div class="header-main-button upper">
            <a href="{{ route('front.bookAdemo')}}">Demo</a>
          </div>
          <div class="header-main-button upper">
            <a href="{{ route('admin.login') }}">Login</a>
          </div>
          
        </nav>
      </div>
    </div>

  <!--==================================================-->
    <!-- End dreamhub Main Menu  -->
  <!--==================================================-->