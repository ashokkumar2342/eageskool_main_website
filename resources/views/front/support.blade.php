@include('front.include.header')

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
	label {
		margin-top:10px;
	    color: #000;
	    cursor: pointer;
	    font-size: 14px;
	    font-weight: bold;
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
						<h1>Support</h1>
					</div>
					<div class="breadcumb-content-menu">
						<ul>
							<li><a href="{{ url('index') }}">Home <i class="fas fa-angle-right"></i></a></li>
							<li><span>Support</span></li>
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
				<img src="{{ asset('front_asset/assets/images/resource/blog5.jpg')}}" alt="" style="width: 430px;height: 350px;">				
			</div>
			<div class="col-md-6">
				<div class="our-portfolio-box">
					<div class="our-portfolio-content">
						{{-- <h4>Support</h4> --}}
					</div>
					<div class="our-portfolio-info">
						<div class="row">
							<div class="col-lg-12"><h3><strong>Support</strong></h3></div>						
						</div>
						<form action="{{ route('front.support.post') }}" method="post">
						{{csrf_field()}}
							<div class="row">
								<div class="col-lg-12 form-group">
									<input type="text" name="Institute_Name" class="form-control" placeholder="Institute Name">
								</div>
								<div class="col-lg-12 form-group">
									<input type="text" name="Mobile_no" class="form-control" placeholder="Mobile No.">
								</div>
								<div class="col-lg-12 form-group">
									<input type="text" name="Email" class="form-control" placeholder="Email">
								</div>
								<div class="col-lg-12 form-group">
									<textarea class="form-control" name="message" placeholder="Message"></textarea>
								</div>
								<div class="col-lg-12 form-group">
									<label>Screen Shot</label>
									<input type="file" name="file" class="form-control" placeholder="screen Shoot">
								</div>
								<div class="col-lg-12" style="margin-top:10px">
								     <div class="captcha">
								      <span id="refresh">{!! captcha_img('flat') !!}</span>
								      {{-- <i class="fas fa-1x fa-sync-alt" ></i> --}}
								    </div>
								</div>
								<div class="col-lg-12" style="margin-top:10px">
								    <input type="text" id="captcha" name="captcha" class="form-control" placeholder="Enter Captcha" aria-label="Password" aria-describedby="password-addon">
								</div>
								<p class="text-danger">{{ $errors->first('captcha') }}</p>	
								<div class="col-lg-12 form-group" style="margin-top:10px">
									<button type="submit" class="btn btn-primary form-control" style="border-radius:2rem;">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('front.include.footer')