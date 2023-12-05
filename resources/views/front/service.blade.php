@include('front.include.header')
<style type="text/css">
	.breadcumb-area {
	    background-image: url('{{ asset('front_asset/images/product_2.jpeg') }}');
	    background-position: center center;
	    background-repeat: no-repeat;
	    background-size: cover;
	    position: relative;
	    padding: 230px 0px 220px;
	}
</style>
<div class="breadcumb-area" style="height:150px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<div class="breadcumb-title">
						<h1>&nbsp;</h1>
					</div>
					<div class="breadcumb-content-menu">
						<ul>
							{{-- <li><a href="{{ url('index') }}">Home <i class="fas fa-angle-right"></i></a></li> --}}
							{{-- <li><span>Service</span></li> --}}
						</ul>
					</div>
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
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/User_Access.png') }}" class="attachment-full size-full wp-image-868" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">User Access Management</h4>
                            <p class="elementor-image-box-description">Eageskool brings a robust system enabling you to manage your entire student admission effortlessly in a unified platform.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/online_fee_payment.png') }}" class="attachment-full size-full wp-image-868" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Online Fee Payment</h4>
                            <p class="elementor-image-box-description">Eageskool brings a robust system enabling you to manage your entire student admission effortlessly in a unified platform.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Admission.png') }}" class="attachment-full size-full wp-image-868" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Certificate Management</h4>
                            <p class="elementor-image-box-description">Eageskool brings a robust system enabling you to manage your entire student admission effortlessly in a unified platform.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Admission _Form.png') }}" class="attachment-full size-full wp-image-868" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Admission Management</h4>
                            <p class="elementor-image-box-description">Eageskool brings a robust system enabling you to manage your entire student admission effortlessly in a unified platform.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Admission.png') }}" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Student Management</h4>
                            <p class="elementor-image-box-description">The all-inclusive dynamic system with a bird view of student information and reports.</p>
                        </div>
                    </div>      
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Homework.png') }}" class="attachment-full size-full wp-image-873" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Homework/Assignments</h4>
                            <p class="elementor-image-box-description">Our smart homework manager helps teachers assign homework to students via any device and, simultaneously, helps parents get real-time alerts on their children’s performance.</p>
                        </div>
                    </div>      
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
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
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Inventory.png') }}" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Inventory Management</h4>
                            <p class="elementor-image-box-description">Eageskool admin module allows teachers, admins, and school staff to have all specifics of daily school operations and management.</p>
                        </div>
                    </div>       
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Attendence.png') }}" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Smarter Attendance</h4>
                            <p class="elementor-image-box-description">Mark real-time attendance of students, teachers and administrators from one place with our smart attendance management system.</p>
                        </div>
                    </div>     
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Exam.png') }}" class="attachment-full size-full wp-image-869" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Exam Assessment</h4>
                            <p class="elementor-image-box-description">Eageskool is designed to manage the entire enrollment and examination process and speed up the result generation in a unified manner, reducing day-to-day hustle for both students and teachers.</p>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
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
            <div class="col-lg-4 text-center col-md-6">
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
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Time_Table.png') }}" class="attachment-full size-full wp-image-871" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Time Table Management</h4>
                            <p class="elementor-image-box-description">No repetitive tasks or manual labour for maintaining library records. Book records management is made easy and hassle-free with Eageskool.</p>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Transport.png') }}" class="attachment-full size-full wp-image-871" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Transport Management</h4>
                            <p class="elementor-image-box-description">No repetitive tasks or manual labour for maintaining library records. Book records management is made easy and hassle-free with Eageskool.</p>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Web_Management.png') }}" class="attachment-full size-full wp-image-871" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Website  Management</h4>
                            <p class="elementor-image-box-description">No repetitive tasks or manual labour for maintaining library records. Book records management is made easy and hassle-free with Eageskool.</p>
                        </div>
                    </div>        
                </div>
            </div>
            <div class="col-lg-4 text-center col-md-6">
                <div class="elementor-widget-container">
                    <div class="elementor-image-box-wrapper">
                        <figure class="elementor-image-box-img">
                            <img decoding="async" width="66" height="66" src="{{ asset('front_asset/icon/Canteen.png') }}" class="attachment-full size-full wp-image-871" alt="" loading="lazy">
                        </figure>
                        <div class="elementor-image-box-content">
                            <h4 class="elementor-image-box-title">Canteen  Management</h4>
                            <p class="elementor-image-box-description">No repetitive tasks or manual labour for maintaining library records. Book records management is made easy and hassle-free with Eageskool.</p>
                        </div>
                    </div>        
                </div>
            </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-12 text-center">
	            <div class="service-button">
	                <a href="{{ url('pricing')}}">View Pricing Detail<span><i class="fas fa-angle-right"></i></span></a>
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
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInLeft animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Live_Dashboard.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Live Dashboard </h2>
                        {{-- <p>&nbsp;</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInUp animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/User_Access.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Role Based Assess </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/userid_parents.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Parents Login </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/online_fee_payment.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Online Payment Gateway</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Exam.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Online Exam </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Sms_emailalerts.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>SMS/Email Alerts </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Web_Management.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Dynamic Website Manager</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/User_Access.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Secure Database </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/Time_Table.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>No need of Server </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/user_friendly.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>User Friendly Easy to use</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/anytime_anywhere.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>Anytime Anywhere </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-single-box wow fadeInRight animated">
                    <div class="service-icon">
                        <img src="{{ asset('front_asset/icon/pc_computer_tab.png')}}" alt="" style="height:75px;width: 75px;">
                    </div>
                    <div class="service-content">
                        <h2>PC / Mobile / Tab </h2>
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


@include('front.include.footer')