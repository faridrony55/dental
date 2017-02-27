

<!--************************-->
<!-- footer start -->
<footer>
	<div class="container">
		<div class="row">
			<!--********-->
			<div class="col-sm-4">
				<div class="header-title">
					<h2><span class="flaticon-medical"></span> dental plus</h2>
				</div>
				<p>Neque porro quisquam est, qui dolore and a ipisum inquia dolor consectetur, adipisci an the sed quia nonquam et modi tempora incidunt.</p>
				<div class="address">
					<ul class="list-unstyled">
						<li><i class="flaticon-signs"></i> Suite 02, Level 12, Sahera Tropical Center<br>  218 New Elephant Road, Dhaka - 1205 </li>
						<li><i class="flaticon-technology"></i> + 326 581 2547 , 021 583 <br>
						+88 019 239 702 12, </li>
						<li><i class="flaticon-envelope-rectangular-outline-variant"></i> Support@gmail.com <br> Info@gmail.com</li>
					</ul>
				</div>
			</div>
			<!--********-->
			<!--********-->
			<div class="col-sm-4">
				<div class="header-title">
					<h2>recent post</h2>
				</div>
				 <ul class="list-unstyled footer-post">
				 	<li>
				<div class="recent-post">
					<div class="featured-image"><a href="#"><img src="assets/images/recentpost1.jpg" alt="recentpost1" class="img-responsive"></a></div>
					<div class="post-content">
					<p>Neque porro quisquam and qui dolore  dolore magnam quia aliquam</p>
					<span><a href="">January 15, 2016</a>    /   <a href="">12 Comments</a></span></div>
				</div>
				</li>
				 	<li>
				<div class="recent-post">
					<div class="featured-image"><a href="#"><img src="assets/images/recentpost1.jpg" alt="recentpost1" class="img-responsive"></a></div>
					<div class="post-content">
					<p>Neque porro quisquam and qui dolore  dolore magnam quia aliquam</p>
					<span><a href="">January 15, 2016</a>  /  <a href="">12 Comments</a></span></div>
				</div>
				</li>
				 	<li>
				<div class="recent-post">
					<div class="featured-image"><a href="#"><img src="assets/images/recentpost1.jpg" alt="recentpost1" class="img-responsive"></a></div>
					<div class="post-content">
					<p>Neque porro quisquam and qui dolore  dolore magnam quia aliquam</p>
					<span><a href="">January 15, 2016</a>   /  <a href="">12 Comments</a></span></div>
				</div>
				</li>
				 </ul> 
			</div>
			<!--********-->
			<!--********-->
			<div class="col-sm-4">
				<div class="header-title">
					<h2>newsletter</h2>
				</div>
				<p>Enter your email and we'll send you a coupon with 10% off your next visit. Add any text here</p>

				<div class="subscrib">
               
<form class="form-inline">
  <div class="form-group"> 
    <div class="input-group ">
      <input type="text" class="form-control" name="email" placeholder="Your Email Address Here">
      <a href="#" class="input-group-addon hvr-effect">sign up</a>
    </div> 
  </div>
</form>
            </div>
				<div class="social">
					
					<ul class="list-inline">
						<li><h4>Follow us</h4></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li> 
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li> 
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
						<li><a href="#"><i class="fa fa-globe"></i></a></li> 
						<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> 
					</ul>
				</div>



			</div>
			<!--********-->
		</div>
	</div>
</footer>
<!-- footer end -->
<section class="copyright text-center">
	<p> Copyright © 2015 Dental Plus Theme by <a href="#">Codexcoder.com</a></p>
</section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


		<!-- Modernizr javascript -->
		<script type="text/javascript" src="assets/js/modernizr.js"></script>

		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="assets/js/jquery.browser.js"></script>
		<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
		
		<!-- Owl carousel javascript-->
		<script type="text/javascript" src="assets/js/owl.carousel.js"></script> 

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="assets/js/template.js"></script>

		 
		<!-- Swiper JS -->
		<script type="text/javascript" src="assets/js/swiper.min.js"></script>
		
		<!-- slider plugin JS -->
		<script type="text/javascript" src="assets/js/jquery.touchSwipe.js"></script> 
		<script type="text/javascript" src="assets/js/plugin.min.js"></script>
		<!-- Isotop plugin JS -->

		<!-- Parallax javascript -->
		<script src="assets/js/jquery.parallax-1.1.3.js"></script>
		<!-- Count To javascript -->
		<script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
		
		<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
		<!-- popup slider -->
		<script type="text/javascript" src="assets/js/jquery.fs.boxer.min.js"></script>  


		<script type="text/javascript" src="assets/js/jquery.hoverdir.js"></script>  
			
		<!-- Custom Scripts -->
		<script type="text/javascript" src="assets/js/custom.js"></script>
		
		<!-- http://htmlcoder.me/preview/the_project/v.1.2/ --> 

			<script src="assets/js/audioplayer.js"></script>
			<script>$( function() { $( 'audio' ).audioPlayer(); } );</script>

  <script>
					$(function() {
						$.lightbox("defaults", {
							videoFormatter: {
								"viddler": {
									pattern: /(?:viddler\.com\/)((v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?\/]*)/,
									format: function formatViddler(parts) {
										return '//www.viddler.com/embed/' + parts[6];
									}
								}
							}
						});

						$(".lightbox").not(".lightbox_format").lightbox({});
						$(".js-lightbox_format").lightbox({formatter: customFormat});
						$(".js-lightbox_object").click(launchObject);
					});

					function customFormat() {
						return '<h3>' + this.attr("title") + "</h3>";
					}
					function launchObject() {
						$.lightbox($('<div class="inline_content"><h2>More Content!</h2><p>This was created by jQuery and loaded into the new Lightbox instance.</p></div>'), {
							mobile: true,
							theme: $(".js-theme_select").val()
						});
					}
					</script>
  <script>
 
    var swiper = new Swiper('.our-blog-post', {
        pagination: '.swiper-pagination', 
        slidesPerView: 2, 
        autoplay: 2500,
        paginationClickable: true,
        spaceBetween: 1
    });
	
		var owl = $("#owl-our-happy-clients");
		owl.owlCarousel({
			 
			items : 5,
			itemsCustom : false,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [980,3],
			itemsTablet: [768,2],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
			singleItem : false,
			itemsScaleUp : false, 
			slideSpeed : 400,
			paginationSpeed :800,
			rewindSpeed : 1000, autoPlay : true,
			stopOnHover : true 
			
		});
		
		$(".next").click(function(){
			owl.trigger('owl.next');
		});
		$(".prev").click(function(){
			owl.trigger('owl.prev');
		}) ;
	 
 
    </script>
 <script type="text/javascript">
			$(function() { 
				$('.hoverdir > li > a').each( function() { $(this).hoverdir(); } ); 
			});
 
 $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        //alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        //alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });


 

</script>

<script type="text/javascript">

$(function () {$(document).bind("contextmenu",function(e){e.preventDefault();}); });
jQuery(document).ready(function($){$(document).keydown(function(event){var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();if(event.ctrlKey&&(pressedKey=="c"||pressedKey=="u"||pressedKey=="s")){return false;}});});
 
 	(function($){
		$.fn.disableSelection = function() {
			return this
			.attr('unselectable', 'on')
			.css('user-select', 'none')
			.css('-moz-user-select', 'none')
			.css('-khtml-user-select', 'none')
			.css('-webkit-user-select', 'none')
			.on('selectstart', false)
			.on('contextmenu', false)
			.on('keydown', false)
			.on('mousedown', false);
		};
	})(jQuery); 
	
	$( document ).ready( function() {
		$('body').disableSelection();
	});
	 
</script>
  </body>
</html>

