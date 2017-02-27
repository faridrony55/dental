<?php include "header.php"; ?>
<!--************************-->

<section class="banner">
	<div class="banner-img"><img src="assets/images/doctor.png" class="img-responsive" alt=""></div>
	<div class="container banner-content">
		<div class="row">
			<div class="banner-">
				<h1>Our Contact Us</h1>
				<ul class="list-inline">
					<li>You Are Here: </li>
					<li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active"><a href="#">Contact us</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
  


<section class="blog-section section-padding">
	<div class="container">
		<div class="row">
		 
			<!--_______-->  
						<!-- accordion start -->
							<!-- ================ -->
							<div class="col-sm-8"> 

								<div class="welcome-heading">
									<h1>Get In Contact Form</h1> 
								</div>

									<div class="contact-form">
										<form class="">
											<div class="form-inline">
  <div class="form-group">
    <input type="email" class="form-control" id="name" placeholder="Your first name*">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="name" placeholder="Your second name*">
  </div>  
</div>
  <div class="form-group">
    <input type="email" class="form-control" id="mail" placeholder="Your email address*">
  </div>  
  <div class="form-group">
    <textarea class="form-control" rows="12" placeholder="Your Message"></textarea>
  </div>
  <div class="form-group">
    <button type="button" class="btn btn-custom hvr-effect">submit comment</button>
  </div>
</form>
									</div>

			 			 		</div>

					 
					<!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
				 
					<!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->

					    
					<!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
					 
							<div class="col-sm-4">
								<div class="welcome-heading">
									<h1>Contact Info</h1> 
								</div>

						 			<div class=" contact-form">
						 				<div class="contact-address">
						 					<span class="flaticon-signs"></span>
						 					<p>Suite 02, Level 12, Sahera Tropicla Center <br>
						 						218 New elephant road, Dhaka - 1205
						 					</p>
						 				</div> 
						 				<div class="contact-address">
						 					<span class="flaticon-technology"></span>
						 					<p>+ 326 581 2547 ,<br> 021 583 
+88 019 239 702 12
						 					</p>
						 				</div> 
						 				<div class="contact-address">
						 					<span class="flaticon-envelope-rectangular-outline-variant"></span>
						 					<p>Support@gmail.com <br>
Info@gmail.com
						 					</p>
						 				</div> 
						 			</div>
								 
							</div>
							<!-- accordion end -->
			<!--_______-->  
			<!--_______-->  

		</div>


	</div>
	


</section>

 <section class="map">
 	<div class="container-fluid">

		<div class="row">
				<!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.8302552586147!2d90.4111451145626!3d23.789058184570347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a0f4a53a4d%3A0x58f006101697463a!2sBanani+Bridge%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1474796371214" allowfullscreen  height="300"></iframe> 
</div>

		</div>

	</div>
</section>




<!--************************-->
<?php include "footer.php"; ?>


<script>
	$(function(){
  $('#audio-player').mediaelementplayer({
    alwaysShowControls: true,
    features: ['playpause','progress','volume'],
    audioVolume: 'horizontal',
    audioWidth: 450,
    audioHeight: 70,
    iPadUseNativeControls: true,
    iPhoneUseNativeControls: true,
    AndroidUseNativeControls: true
  });
});
</script>