 @include('front.include.header')

 <!--==================================================-->
 <!-- Start digital Breadcumb Area -->
 <!--==================================================-->
 <div class="breadcumb-area" style="height: 150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <div class="breadcumb-title">
                        <h1>About</h1>
                    </div>
                    <div class="breadcumb-content-menu">
                        <ul>
                            <li><a href="{{ url('index') }}">Home <i class="fas fa-angle-right"></i></a></li>
                            <li><span>About</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
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
                    <a href="{{ url('index') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-thumb wow fadeInRight animated">
                    <img src="{{ asset('front_asset/assets/images/resource/Markating1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
 </div>

 <div class="about-two-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-two-thumb wow fadeInUp animated">
                    <img src="{{ asset('front_asset/assets/images/resource/about-2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two-content wow fadeInLeft animated">
                    <h5>Advertising Marketing</h5>
                    <h3>Focus on all of the key features</h3>
                    <h2>for your product</h2>
                </div>
                <div class="about-two-disc">
                    <p>Exponent’s unique algorithm matches you with vetted experts that <br> are a perfect fit for what you actually need Marketing experts <br> Marketing experts in your niche.</p>
                </div>
                <div class="sec-widget-element wow fadeInRight animated">
                    <ul>
                        <li><span><i class="fas fa-check"></i></span> Stop blindly sifting through lists of reco</li>
                        <li><span><i class="fas fa-check"></i></span> Business Analysis & Requirements Engineering</li>
                        <li><span><i class="fas fa-check"></i></span> Stop losing money to lazy market</li>
                    </ul>
                </div>
                <div class="about-two-button wow fadeInUp animated">
                    <a href="{{ url('index') }}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
 </div>

 
 @include('front.include.footer')



