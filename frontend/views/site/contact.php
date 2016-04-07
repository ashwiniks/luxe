 <!--page title start-->
    <div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url(images/bg/page_title_bg.jpg);">
      <ul>
        <li><a href="javascript:;">contact us</a></li>
      </ul>
    </div>
    <!--page title end-->
    <div class="clearfix"></div>
    
	<!-- contact map section start -->
      <div class="full_width tr_contact_map_section">
		
				<div class="map_main">
				<div id="bigth_googleMap"></div>
					
		</div>
		
	  </div>
	<!-- contact map section End -->
	
	  <!-- contact details section start -->
      <div class="full_width tr_contact_detais_section">
		  <div class="container">
		    <div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="conatact_form_ds">
						<form>
							<input type="text" name="name" placeholder="Name" class="input_c" required="required">
							<input type="email" name="email" placeholder="Email" class="input_c" required="required">
							<input type="text" name="phone" placeholder="Phone" class="input_c" required="required">
							<textarea class="text_area_c" placeholder="Message" name="msgs"></textarea>
							<input type="submit" value="Send" class="btn_green" id="form_submit">
						</form>
						
					</div>
					
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-lg-6 col-md-7 col-sm-8 col-lg-offset-2">
					  <div class="address_contact_details">
					  <div class="address_detais_city">
						Houston:
					  </div>
						<ul>
							<li><i class="fa fa-map-marker"></i> 1234, Street Name, City Name.</li>
							<li><i class="fa fa-envelope"></i> Info@travellers.com</li>
							<li><i class="fa fa-phone"></i> +1 235 654 4569</li>
						</ul>
					  </div>
					  
						<div class="address_contact_details">
							<div class="address_detais_city">
								Melbourne:
							</div>
							<ul>
								<li><i class="fa fa-map-marker"></i> 1234, Street Name, City Name.</li>
								<li><i class="fa fa-envelope"></i> Info@travellers.com</li>
								<li><i class="fa fa-phone"></i> +1 235 654 4569</li>
							</ul>
						</div>
						
						<div class="address_contact_details">
							<div class="address_detais_city">
								Delhi:
							</div>
							<ul>
								<li><i class="fa fa-map-marker"></i> 1234, Street Name, City Name.</li>
								<li><i class="fa fa-envelope"></i> Info@travellers.com</li>
								<li><i class="fa fa-phone"></i> +1 235 654 4569</li>
							</ul>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-5 col-sm-4 t_align_c">
					 <!-- facebook squre start -->
					<div class="social_box facebook_b_wrap">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<div class="social_likes">30000</div>
						<div class="shares_and_likes">shares & Likes</div>
					</div>
					<!-- facebook squre End -->
					
						<!-- twitter squre start -->
						<div class="social_box twitter_b_wrap">
							<a href="#"><i class="fa fa-twitter-square"></i></a>
							<div class="social_likes">9000</div>
							<div class="shares_and_likes">followers</div>
						</div>
						<!-- twitter squre End -->
						
						<!-- RSS squre start -->
						<div class="social_box rss_b_wrap">
							<a href="#"><i class="fa fa-rss-square"></i></a>
							<div class="social_likes">15000</div>
							<div class="shares_and_likes">subscribers</div>
						</div>
						<!-- RSS squre End -->
					
						<!-- Linkedin squre start -->
						<div class="social_box linkedin_b_wrap">
							<a href="#"><i class="fa fa-linkedin-square"></i></a>
							<div class="social_likes">3200</div>
							<div class="shares_and_likes">connections</div>
						</div>
						<!-- Linkedin squre End -->
					</div>
				</div>
				</div>
			</div>
		  </div>
		 
		  
	  </div>
	  <!-- contact details section End -->
	<!--main js file start--> 
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script> 
	<script type="text/javascript" src="js/bootstrap.js"></script> 
	<script type="text/javascript" src="js/bootstrap-select.js"></script> 
	<script type="text/javascript" src="js/plugin/datetimepicker/jquery.datetimepicker.js"></script> 
	<script type="text/javascript" src="js/plugin/parallax/jquery.parallax-1.1.3.js"></script> 
	<script type="text/javascript" src="js/plugin/owl/owl.carousel.js"></script> 
	<script type="text/javascript" src="js/plugin/isotope/jquery.isotope.js"></script> 
	<script type="text/javascript" src="js/plugin/bxslider/jquery-bxslider.js"></script> 
	<!-- pie chart js -->
	<script type="text/javascript" src="js/plugin/pie-circle/circles.js"></script> 
	<!-- pie chart js -->
	<!--counter js-->
	<script type="text/javascript" src="js/plugin/counter/jquery.countTo.js">
	</script>
	<!--counter js-->
	<script type="text/javascript" src="js/plugin/counter/jquery.countdown.js">
	
	</script>
	<script src="http://maps.googleapis.com/maps/api/js?key=&amp;sensor=false"></script>
	<script>
	$(document).ready(function() {
    var myCenter=new google.maps.LatLng(1.3079669,103.8452518);
	function initialize()
	{
	var mapProp = {
	center:myCenter,
	zoom:7,
	scrollwheel: false,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map=new google.maps.Map(document.getElementById("bigth_googleMap"),mapProp);
	var icon = { 
    url: 'images/map_marke_icon.png'
	};
	var marker=new google.maps.Marker({
	position:myCenter,
	map: map,
	title: 'Himanshu Softtech',
	icon: icon
	});
	marker.setMap(map);
	var infowindow = new google.maps.InfoWindow({
	content:"map"
	});
	google.maps.event.addListener(marker, 'click', function() {
	infowindow.open(map,marker);
	});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	});
</script>
	<!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="js/plugin/revolution/js/jquery.themepunch.tools.min.js">
    </script>
    <script type="text/javascript" src="js/plugin/revolution/js/jquery.themepunch.revolution.min.js">
    </script>
    <script type="text/javascript" src="js/plugin/revolution/js/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="js/plugin/revolution/js/revolution.extension.navigation.min.js">
    </script>
    <script type="text/javascript" src="js/plugin/revolution/js/revolution.extension.slideanims.min.js">
    </script>
    <script type="text/javascript" src="js/plugin/revolution/js/revolution.extension.actions.min.js">
    </script>
    <script type="text/javascript" src="js/plugin/revolution/js/revolution.extension.parallax.min.js">
    </script>
    <!-- REVOLUTION JS FiLES -->
	<!-- video_popup -->
	<script type="text/javascript" src="js/plugin/video-popup/jquery.magnific-popup.js">
    </script>
	<!-- video_popup -->
	<!-- slick slider -->
	<script type="text/javascript" src="js/plugin/slick/jquery-migrate-1.2.1.min.js">
    </script>
	<script type="text/javascript" src="js/plugin/slick/slick.min.js"></script>
	<!-- slick slider -->
	<!-- video player js -->
	<script src="js/plugin/video_player/mediaelement-and-player.min.js"></script>
	<!-- video player js -->
	<!-- pricefilter -->
	<script src="js/plugin/jquery-ui/jquery-ui.js"></script>
	<!-- pricefilter-->
	<script type="text/javascript" src="js/custom.js"></script> 