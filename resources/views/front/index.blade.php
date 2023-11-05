 @include('front.include.header')
    
<style type="text/css">
    .elementor-widget-container2 {
        
        background-color: transparent;
        background-image: linear-gradient(130deg, #E5F9F7 0%, #B7DFD7 100%);
        border-style: solid;
        border-width: 1px 1px 1px 1px;
        border-color: #D1E3D6;
        border-radius: 6px 6px 6px 6px;
    }
</style>
<!--==================================================-->
    <!-- start digital home-section  -->
<!--==================================================-->

<div class="home-section">
    <div class="container">
        <div class="row align-items-center d-flex">
            <div class="col-lg-6">
                <div class="home-thumb wow fadeInUp animated">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('front_asset/images/banner4.png')}}" alt="Los Angeles">
                    </div>
                    {{-- <div class="carousel-item">
                    <img src="{{ asset('front_asset/images/Asset_2.png')}}" alt="Chicago">
                    </div> --}}
                    <div class="carousel-item">
                    <img src="{{ asset('front_asset/assets/images/resource/Markating.png')}}" alt="New York">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                
                <div class="home-content wow fadeInRight animated">
                    <h2 style="font-size: 50px;">Simpify your School Management System With Eageskool</h2>
                    <p>Join the future of Smart Education Management Systems. Much More than ERP</p>
                </div>
                <div class="home-button wow fadeInLeft animated">
                    <a class="main-button" href="{{ route('front.bookAdemo')}}">Book A Demo</a>
                    {{-- <a class="home-ply-btn" href="#"> <i class="fas fa-play"></i> </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>


<!--==================================================-->
    <!-- end digital home-section  -->
<!--==================================================-->



<!--==================================================-->
    <!-- start digital about-section  -->
<!--==================================================-->

<div class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content wow fadeInLeft animated">
                    <h5>About Us</h5>
                    <h3>Professional who works to </h3>
                    <h2>help with your business.</h2>
                    <p style="text-align:justify;">Eage skool is a segment of Shivam Software Solution and haves a experience of more then 20 years in it sector. Our Vision is to be a leading Web Solution company in IT sector and progress in our current position in market. We know that Customer’s growth is our growth, so we commit our customers to help in achieving their business goals. We believe in work with the accuracy and best quality. We want to be known as the reliable, innovative and user friendly software service provider in IT industry.</p>
                </div>
                <div class="about-button">
                    <a href="{{ url('about') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-thumb wow fadeInRight animated">
                    <img src="{{ asset('front_asset/assets/images/resource/Markating1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-two-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-title wow fadeInUp animated">
                    <h3>Eageskool the Ideal School Manager</h3>
                    <h2>Grow Your Business</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img">
                                    <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Admission.png') }}" class="attachment-full size-full wp-image-868" alt="" loading="lazy">
                                </figure>
                                <div class="elementor-image-box-content">
                                    <h4 class="elementor-image-box-title">Admission Management</h4>
                                    <p class="elementor-image-box-description">Eageskool brings a robust system enabling you to manage your entire student admission effortlessly in a unified platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img">
                                    <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Admission _Form.png') }}" alt="" loading="lazy">
                                </figure>
                                <div class="elementor-image-box-content">
                                    <h4 class="elementor-image-box-title">Student Management</h4>
                                    <p class="elementor-image-box-description">The all-inclusive dynamic system with a bird view of student information and reports.</p>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img">
                                    <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/HR_Management.png') }}" class="attachment-full size-full wp-image-874" alt="" loading="lazy">
                                </figure>
                                <div class="elementor-image-box-content">
                                    <h4 class="elementor-image-box-title">HR Management</h4>
                                    <p class="elementor-image-box-description">Eageskool admin module allows teachers, admins, and school staff to have all specifics of daily school operations and management.</p>
                                </div>
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-box-wrapper">
                                <img decoding="async" class="swiper-slide-image" src="{{ asset('front_asset/images/Asset_1.png') }}" alt="mobile-ss">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img">
                                    <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Attendence.png') }}" class="attachment-full size-full wp-image-872" alt="" loading="lazy">
                                </figure>
                                <div class="elementor-image-box-content">
                                    <h4 class="elementor-image-box-title">Smarter Attendance</h4>
                                    <p class="elementor-image-box-description">Mark real-time attendance of students, teachers and administrators from one place with our smart attendance management system.</p>
                                </div>
                            </div>     
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img">
                                    <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Cash_Counter.png') }}" class="attachment-full size-full wp-image-870" alt="" loading="lazy">
                                </figure>
                                <div class="elementor-image-box-content">
                                    <h4 class="elementor-image-box-title">Fee Management</h4>
                                    <p class="elementor-image-box-description">With the Eageskool fee management system, send admission fee and due-date alerts to students and parents.</p>
                                </div>
                            </div>     
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="elementor-widget-container">
                            <div class="elementor-image-box-wrapper">
                                <figure class="elementor-image-box-img">
                                    <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Library.png') }}" class="attachment-full size-full wp-image-871" alt="" loading="lazy">
                                </figure>
                                <div class="elementor-image-box-content">
                                    <h4 class="elementor-image-box-title">Library Management</h4>
                                    <p class="elementor-image-box-description">No repetitive tasks or manual labour for maintaining library records. Book records management is made easy and hassle-free with Eageskool.</p>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="service-button">
                    <a href="{{ url('service')}}">View All Module<span><i class="fas fa-angle-right"></i></span></a>
                </div>                
            </div>
            
        </div>
    </div>
</div>
<div class="service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-title wow fadeInUp animated">
                    <h3>School Management <span style="color: #ff6900;">Mobile App</span></h3>
                    <h2>Not Only <span style="color: #ff6900;">ERP</span> much more than it.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInLeft animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Live_Dashboard.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Live Dashboard <br>&nbsp;</h2>
                        {{-- <p>&nbsp;</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInUp animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/User_Access.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Role Based Assess <br>&nbsp;</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/userid_parents.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Login Id For Parents </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/online_fee_payment.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Online Payment Gateway</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Exam.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Online Exam / Result</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Sms_emailalerts.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>SMS/Email Alerts <br>&nbsp;</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Web_Management.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Dynamic Website Manager</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/User_Access.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Secure Database <br>&nbsp;</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Time_Table.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>No need of Server <br>&nbsp;</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/user_friendly.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>User Friendly Easy to use</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/anytime_anywhere.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Anytime Anywhere <br>&nbsp;</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/pc_computer_tab.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>PC / Mobile / Tab <br>&nbsp;</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="service-button">
                    <a href="{{ url('service')}}">View All Module<span><i class="fas fa-angle-right"></i></span></a>
                </div>                
            </div>
        </div>
    </div>
</div>
<div class="pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pricing-title wow fadeInRight animated">
                    <h5>Pricing Plan</h5>
                    <h3>Reasonable Pricing Plan</h3>
                    <h2>For our all Customers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-single-box wow fadeInLeft animated">
                    <div class="pricing-head">
                        <h3>Basic</h3>
                        <div class="pricing"> 
                            <span class="currency">₹</span>
                            <span class="tk">3000</span>
                            <span class="price-mon"> / Month</span>
                        </div>
                    </div>
                    <div class="pricing-boody">
                        <ul>
                            <li> <i class="fas fa-check"></i> Student Info</li>
                            <li> <i class="fas fa-check"></i> Admission</li>
                            <li> <i class="fas fa-check"></i> Fee</li>
                            <li> <i class="fas fa-check"></i> Exam</li>
                            <li> <i class="fas fa-check"></i> Library</li>
                            <li> <i class="fas fa-check"></i> Time Table</li>
                            <li> <i class="fas fa-check"></i> Transport</li>
                            <li> <i class="fas fa-check"></i> HRMS</li>
                            <li> <i class="fas fa-check"></i> Inventory</li>
                            <li> <i class="fas fa-check"></i> Web Admin</li>
                        </ul>
                    </div>
                    <div class="price-btn">
                        <a href="{{ url('pricing') }}">View More Detail</a>
                    </div>
                    <div class="price-btn">
                        <a href="{{ url('pricing') }}">Pay Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-single-box wow fadeInUp animated">
                    <div class="pricing-head">
                        <h3>Standard</h3>
                        <div class="pricing"> 
                            <span class="currency">₹</span>
                            <span class="tk">8000</span>
                            <span class="price-mon"> / Month</span>
                        </div>
                    </div>
                    <div class="pricing-boody">
                        <ul>
                            <li> <i class="fas fa-check"></i> Student Info</li>
                            <li> <i class="fas fa-check"></i> Admission</li>
                            <li> <i class="fas fa-check"></i> Fee</li>
                            <li> <i class="fas fa-check"></i> Exam</li>
                            <li> <i class="fas fa-check"></i> Library</li>
                            <li> <i class="fas fa-check"></i> Time Table</li>
                            <li> <i class="fas fa-check"></i> Transport</li>
                            <li> <i class="fas fa-check"></i> HRMS</li>
                            <li> <i class="fas fa-check"></i> Inventory</li>
                            <li> <i class="fas fa-check"></i> Web Admin</li>
                        </ul>
                    </div>
                    <div class="price-btn">
                        <a href="{{ url('pricing') }}">View More Detail</a>
                    </div>
                    <div class="price-btn">
                        <a href="{{ url('pricing') }}">Pay Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-single-box wow fadeInRight animated">
                    <div class="pricing-head">
                        <h3>Premium</h3>
                        <div class="pricing"> 
                            <span class="currency">₹</span>
                            <span class="tk">25000</span>
                            <span class="price-mon"> / Month</span>
                        </div>
                    </div>
                    <div class="pricing-boody">
                        <ul>
                            <li> <i class="fas fa-check"></i> Student Info</li>
                            <li> <i class="fas fa-check"></i> Admission</li>
                            <li> <i class="fas fa-check"></i> Fee</li>
                            <li> <i class="fas fa-check"></i> Exam</li>
                            <li> <i class="fas fa-check"></i> Library</li>
                            <li> <i class="fas fa-check"></i> Time Table</li>
                            <li> <i class="fas fa-check"></i> Transport</li>
                            <li> <i class="fas fa-check"></i> HRMS</li>
                            <li> <i class="fas fa-check"></i> Inventory</li>
                            <li> <i class="fas fa-check"></i> Web Admin</li>
                        </ul>
                    </div>
                    <div class="price-btn">
                        <a href="{{ url('pricing') }}">View More Detail</a>
                    </div>
                    <div class="price-btn">
                        <a href="{{ url('pricing') }}">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="subscribe-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscribe-title wow fadeInUp animated">
                    <h3>Questions You Might Ask Related to Our Eageskool ERP</h3>
                </div>
            </div>
        </div>
        <div class="row align-items-center upper1">
            <div class="col-md-12">
                <div class="tab_container wow fadeInRight animated">
                    <div id="tab1" class="tab_content">
                         <ul class="accordion">
                            <li>
                                <a><span> How long does a consulting project last? </span><i class="fas fa-angle-right"></i></a>
                                <p>Preventative maintenance is regular maintenance of your vehicle that <br> helps keep your automobile running efficiently eliminating potential <br> problems that may leave you stranded.</p>
                            </li>
                            <li>
                                <a><span> Do I get to choose from multiple spots? </span><i class="fas fa-angle-right"></i></a>
                                <p>Conveniently customize revolutionary strategic theme areas covalent human capital. Quickly myocardinate cross-platform action items rath than innovative infrastructures perfect</p>
                            </li>
                            <li>
                                <a><span> What payment methods are accepted? </span><i class="fas fa-angle-right"></i></a>
                                <p>Conveniently customize revolutionary strategic theme areas covalent human capital. Quickly myocardinate cross-platform action items rath than innovative infrastructures perfect</p>
                            </li>
                            <li>
                                <a><span> What is Digital Marketing?</span> <i class="fas fa-angle-right"></i></a>
                                <p>Conveniently customize revolutionary strategic theme areas covalent human capital. Quickly myocardinate cross-platform action items rath than innovative infrastructures perfect</p>
                            </li>
                            <li>
                                <a><span> Is there a way to make a complaint? </span><i class="fas fa-angle-right"></i></a>
                                <p>Conveniently customize revolutionary strategic theme areas covalent human capital. Quickly myocardinate cross-platform action items rath than innovative infrastructures perfect</p>
                            </li>
                            <li>
                                <a><span> Which is the Best SEO Tools 2023? </span><i class="fas fa-angle-right"></i></a>
                                <p>Conveniently customize revolutionary strategic theme areas covalent human capital. Quickly myocardinate cross-platform action items rath than innovative infrastructures perfect</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
    <!-- end digital subscribe-section  -->
<!--==================================================-->



<!--==================================================-->
    <!-- start digital testimonial-section  -->
<!--==================================================-->

<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-title wow fadeInRight animated">
                    <h5>Testimonials</h5>
                    <h3>Our Happy Customers</h3>
                </div>
            </div>
        </div>
            <div class="testimonial owl-carousel">
                <div class="testimonial-area">
                    <div class="col-lg-12">
                        <div class="testimonial-single-box">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('front_asset/assets/images/resource/test1.png')}}" alt="">
                                <div class="testimonial-sub-title">
                                    <h3>Harvey Specter</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                            <div class="testimonial-disc">
                                <p> This is a truly spectacular <br>
                                    theme! custom page builder <br>
                                    is definitely one of the most <br>
                                    page builders I’ve ever used.</p>
                            </div>
                            <div class="testimonial-rating">
                                <ul>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-area">
                    <div class="col-lg-12">
                        <div class="testimonial-single-box upper2">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('front_asset/assets/images/resource/test2.png')}}" alt="">
                                <div class="testimonial-sub-title">
                                    <h3>Richard Madsen</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                            <div class="testimonial-disc">
                                <p> This is a truly spectacular <br>
                                    theme! custom page builder <br>
                                    is definitely one of the most <br>
                                    page builders I’ve ever used.</p>
                            </div>
                            <div class="testimonial-rating">
                                <ul>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-area">
                    <div class="col-lg-12">
                        <div class="testimonial-single-box">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('front_asset/assets/images/resource/test3.png')}}" alt="">
                                <div class="testimonial-sub-title">
                                    <h3>Jenny James</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                            <div class="testimonial-disc">
                                <p> This is a truly spectacular <br>
                                    theme! custom page builder <br>
                                    is definitely one of the most <br>
                                    page builders I’ve ever used.</p>
                            </div>
                            <div class="testimonial-rating">
                                <ul>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-area">
                    <div class="col-lg-12">
                        <div class="testimonial-single-box upper2">
                            <div class="testimonial-thumb">
                                <img src="{{ asset('front_asset/assets/images/resource/test4.png')}}" alt="">
                                <div class="testimonial-sub-title">
                                    <h3>Bruce Wayne</h3>
                                    <h4>Developer</h4>
                                </div>
                            </div>
                            <div class="testimonial-disc">
                                <p> This is a truly spectacular <br>
                                    theme! custom page builder <br>
                                    is definitely one of the most <br>
                                    page builders I’ve ever used.</p>
                            </div>
                            <div class="testimonial-rating">
                                <ul>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                    <li><span><i class="fas fa-star"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


<!--==================================================-->
<!-- Start  News Letter Area -->
<!--==================================================-->
{{-- <div class="newsletter-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-title wow fadeInUp animated">
                    <h3>Sign Up To get latest Update</h3>
                    <p>Sign Up our monthly newsletter news & articles</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
                    <div class="newsletter-form">
                        <input type="text" name="email" placeholder="Enter Your Email">
                        <button>Subscribe</button>
                    </div>              
                </form>
            </div>
        </div>
        <hr>
    </div>
</div> --}}
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
<!--==================================================-->
<!-- END  News Letter Area -->
<!--==================================================-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 @include('front.include.footer')



