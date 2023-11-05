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
						<ul>
							<li><strong>Token No.</strong>10000</li>
							<li><a type="button" href="" class="btn btn-success"><i class="fa fa-download"></i> Download</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('front.include.footer')