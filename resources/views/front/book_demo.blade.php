@include('front.include.header')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style type="text/css">
	.form-group select {
	        height: 35px;
	        padding: 1px 10px;
	        background-color: #fff;
	        border: 1px solid #2d73d5;
	        margin-top:10px;
	        border-radius: 5px;
	}
	.form-group input {
	        height: 35px;
	        padding: 1px 10px;
	        background-color: #fff;
	        border: 1px solid #2d73d5;
	        margin-top:10px;
	        border-radius: 5px;
	}
	.form-group textarea {
	        height: 55px;
	        padding: 1px 10px;
	        background-color: #fff;
	        border: 1px solid #2d73d5;
	        margin-top:10px;
	        border-radius: 5px;
	}
	.breadcumb-area {
	    background-image: url('{{ asset('front_asset/images/product_1.jpeg') }}');
	    background-position: center center;
	    background-repeat: no-repeat;
	    background-size: cover;
	    position: relative;
	    padding: 230px 0px 220px;
	}
</style>	 

<!--==================================================-->
<!-- Start digital Breadcumb Area -->
<!--==================================================-->
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
							<li><a href="{{ url('index') }}">Home <i class="fas fa-angle-right"></i></a></li>
							<li><span>Book A Demo</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="our-portfolio-section">
	<div class="container">
		<div class="row bg-up">
			<div class="col-md-6">
				<div class="our-portfolio-thumb">
					<img src="{{ asset('front_asset/assets/images/resource/about-3.png') }}" alt="">
				</div>			
			</div>
			<div class="col-md-6">
				<div class="our-portfolio-box">
					<div class="our-portfolio-content">
						{{-- <h4>Book A Demo</h4> --}}
					</div>
					<div class="our-portfolio-info">
						<div class="row">
							<div class="col-lg-12"><h3><strong>Book a Demo</strong></h3></div>						
						</div>
						<form action="{{ route('front.bookAdemo.store') }}" method="post" class="add_form">
						{{csrf_field()}}
							<div class="row">
								<div class="col-lg-12 form-group">
									<select name="service" class="form-control" required="">
										<option value="">Select Service</option>
										<option value="School ">School</option>
										<option value="Coaching_Institute">Coaching Institute</option>
									</select>
								</div>
								<p class="text-danger">{{ $errors->first('service') }}</p>
								<div class="col-lg-12 form-group">
									<select name="role" class="form-control" required="">
										<option value="">Select Role</option>
										<option value="Teacher ">Teacher</option>
										<option value="Principal">Principal</option>
										<option value="Admin_and_Management">Admin and Management</option>
										<option value="IT_Consultant">IT Consultant</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<p class="text-danger">{{ $errors->first('role') }}</p>
								<div class="col-lg-12 form-group">
									<input type="text" name="name" class="form-control" placeholder="Name" required="" maxlength="100">
								</div>
								<p class="text-danger">{{ $errors->first('name') }}</p>
								<div class="col-lg-12 form-group">
									<input type="text" name="institute_name" class="form-control" placeholder="Institute Name" required="" maxlength="100">
								</div>
								<p class="text-danger">{{ $errors->first('institute_name') }}</p>
								<div class="col-lg-12 form-group">
									<input type="text" name="mobile_no" class="form-control" placeholder="Mobile No." required="" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
								</div>
								<p class="text-danger">{{ $errors->first('mobile_no') }}</p>
								<div class="col-lg-12 form-group">
									<input type="text" name="email" class="form-control" placeholder="Email" required="" maxlength="100">
								</div>
								<p class="text-danger">{{ $errors->first('email') }}</p>
								<div class="col-lg-12 form-group">
									<textarea class="form-control" name="message" placeholder="Message" maxlength="250"></textarea>
								</div>
								<div class="col-lg-12" style="margin-top:10px">
								     <div class="captcha">
								      <span id="refresh">{!! captcha_img('flat') !!}</span>
								      {{-- <i class="fas fa-1x fa-sync-alt" ></i> --}}
								    </div>
								</div>
								<div class="col-lg-12" style="margin-top:10px">
								    <input type="text" id="captcha" name="captcha" required="" class="form-control" placeholder="Enter Captcha" maxlength="4">
								</div>
								<p class="text-danger">{{ $errors->first('captcha') }}</p>	
								<div class="col-lg-12 form-group" style="margin-top:10px">
									<input type="submit" class="btn btn-primary form-control" style="border-radius:2rem;" value="Submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="{{ asset('admin_asset/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin_asset/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('admin_asset/dist/js/toastr.min.js') }}"></script>
@include('admin.include.message')
@include('front.include.footer')
