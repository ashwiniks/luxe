 <?php use yii\helpers\Html; ?>

<!--content body start-->
  <div id="content_wrapper">
  <!--page title Start-->
  <div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url(images/bg/page_title_bg.jpg);">
      <ul>
        <li><a href="javascript:;"><?=$tour['title'];?></a></li>
      </ul>
    </div>
    <!--page title end-->
    <div class="clearfix"></div>
	
	<div class="full_width destinaion_sorting_section">
	  <div class="container">
	   <div class="row space_100">
	   
	     <!-- left sidebar start -->
	     <div class="col-lg-3 col-md-3 col-sm-12">
	       <div class="travelite_left_sidebar_second">
		   
			 
			 
			 <aside class="widget about_us_widget">
			 <h4 class="widget-title">about us</h4>
			 <div class="widgett text_widget">
			 <p>There are many variations of passages of Lorem Ipsum available, but the joy have suffered alteration in some format, by injected humour.  There are many variations of passages by injected humour.  There are many variations</p>
	       </div>
			 
			 </aside>
			 <aside class="widget hotel_widgets_deals">
			 <h4 class="widget-title">hotel deals today</h4>
			 <div class="widgett">
			 <ul>
		       <li> <img src="images/package-details/thumb_1.jpg" alt="hotel thumb">
		         <div class="hotel_deals_details">
			     <h4 class="more_text_widget">There are many variations of passanger
				 There are many variations of passanger
				 There are many variations of passanger</h4>
		       </div>
		      </li> 
              <li> <img src="images/package-details/thumb_2.jpg" alt="hotel thumb">
		         <div class="hotel_deals_details">
			     <h4 class="more_text_widget">There are many variations of passanger</h4>
		       </div>
		      </li> 
			  <li> <img src="images/package-details/thumb_3.jpg" alt="hotel thumb">
		         <div class="hotel_deals_details">
			     <h4 class="more_text_widget">There are many variations of passanger</h4>
		       </div>
		      </li> 
                  <li> <img src="images/package-details/thumb_4.jpg" alt="hotel thumb">
		         <div class="hotel_deals_details">
			     <h4 class="more_text_widget">There are many variations of passanger</h4>
		       </div>
		      </li> 			  
	        </ul>
	       </div>
			 
			 </aside>
			 
			 <aside class="widget hotel_booking_widget">
			 <h4 class="widget-title">Need Help For Booking?</h4>
			 <div class="widgett text_widget">
			 <p>There are many variations of passages of Lorem Ipsum available, but the joy have </p>
			 <h3><i class="fa fa-phone"></i>1-669-559-4378</h3>
			 <h5>or</h5>
				 <button type="submit" value="submit query" class="submit_query btn-yellow btns">
					 submit query
				 </button>
			
	       </div>
			 
			 </aside>
			 
			 <aside class="widget similar_pacakges">
			 <h4 class="widget-title">similar packages</h4>
			  <div class="widgett text_widget">
			   <div class="image_holder">
			   <img src="images/package-details/img1.jpg" alt="package thumb">
			   <h5><a href="#">Discover Australia</a></h5>
			   <h4>$1200/<span>per person</span></h4>
			   </div>
			   
			   <div class="image_holder">
			   <img src="images/package-details/img2.jpg" alt="package thumb">
			   <h5><a href="#">Victoria Scenic Tour</a></h5>
			   <h4>$1500/<span>per person</span></h4>
			   </div>
			 <a href="#" class="submit_query btn-yellow btns">view more</a>
			
	       </div>
			 
			 </aside>
		
		   </div>
	     </div>
	      <!-- left sidebar end -->
	     <!-- right main start -->
		<div class="col-lg-9 col-md-9 col-sm-12">
		<div class="tour_packages_right_section left_space_40">
		<div class="tour_packages_details_top">
		
		<div class="top_head_bar">
		   <h4><?=$tour['title'];?></h4>
		   </div>
		   <div class="bottom_desc">
		   <h5 class="starting_text">Starting from<span><?=$tour['price'];?> /</span>per person</h5>
		    <span class="time_date"><i class="fa fa-clock-o"></i><?=$tour['days'];?>days</span>
		   <h5 class="includes_text">includes:</h5>
		    <!-- desc icons Start-->
			<div class="row">
			<div class ="col-lg-6 top_icons_part">
			
		   <ul class="sort_place_icons">
		   <li><i class="fa fa-car"></i> transports</li>
		   <li><i class="fa fa-plane"></i> flights</li>
		   <li><i class="fa fa-binoculars"></i> sight seeing</li>
		   <li><i class="fa fa-cutlery"></i> food</li>
		   <li><i class="fa fa-building-o"></i> hotels</li>
		   </ul>
		    <!-- desc icons End-->
			</div>
			
			<div class="col-lg-6">
			
			<div class="top_links">
			
			</div>
			</div>
		
		   </div>
		   		
		</div>
		</div>
		     <!-- slider start -->
		   <div class="package_details_slider">
			<div id="package_details_slider" class="owl-carousel owl-theme">
                          <?php foreach($galleries as $galleries) { 
                             
                              ?>
			  <div class="item">
                              
                           <?php echo Html::img(Yii::$app->urlManagerBackend->baseUrl."/".$galleries['image']); ?>  
                             </div>
			  <?php } ?>
			</div>
		   </div>
		     <!-- slider end -->
			 
			 <!-- Booking area Start-->
          <div class="booking_area_section">
              <p><?=$tour['excerpt'];?></p>
			 <div class=" full_width booking_form_bg">
			 <div class="main_content_form">
			 <!-- tab_search form start -->
			 <form>
				<div class="pullleft check_in_field">
				<label>available on</label>
				<input type="text" id="Check_out_date_tab" placeholder="dd/mm/yyyy">
					<i class="fa fa-calendar"></i>
				</div>
				
				<div class="pullleft room_select_field">
					<label>adults</label>
					<select class="form-control selectpicker" data-live-search="true" id="search_adults">
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-caret-down"></i>
				</div>
				<div class="pullleft room_select_field">
					<label>kids</label>
					<select class="form-control selectpicker" data-live-search="true" id="search_kids">
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-caret-down"></i> 
				</div>
				<div class="pullleft submit_field">
				<label>----<span class="total_doller">----</span></label>
					<input type="submit" value="BOOK NOW" class="search_tabs">
					<button class="btn tab_search" type="submit"> <i class="glyphicon glyphicon-search"></i></button>
				</div>
				</form>
				<!-- tab_search form End -->
            </div>
			 
			 </div>

          </div>
		  <!-- Booking area End -->

		 <!-- package tabs start -->
		  <div class="full_width travelite_middle_tabs" id="travelite_middle_tabs">
		    <div class="pcg_tabs_panel">
				<ul>
					<li> <a href="#tab_search_1">itinerary</a></li>
					<li> <a href="#tab_search_2" class="">Includes</a></li>
					<li> <a href="#tab_search_3" class="">Excludes</a></li>
					
				</ul>
            </div>
		                <!--  tab content start -->
			<div id="tab_search_1" class="tab_details_part">
			
			<?php foreach ($itneries as $itneries) { ?>
			 
			 <div class="inner_content">
			 <div class="day_title"><?=$itneries['day']?></div>
                         <p><?=$itneries['details'] ?></p>
			 </div>
                            <?php } ?>
			 
			
			
			</div>
			 <!--  tab content End -->
			 
			      <!--  tab content start -->
			<div id="tab_search_2" class="tab_details_part">
			
			<div class="cost_include_exclude">
			 <h5>cost includes</h5>
			 <ul>
                           <?php foreach ($includes as $includes) { ?>
			 <li><?=$includes['details']?></li>
			  <?php } ?>
			 </ul>
			 </div>
			</div>
			 <!--  tab content End -->
			  <!--  tab content start -->
			<div id="tab_search_3" class="tab_details_part">
			<div class="cost_include_exclude">
			 <h5>cost Excludes</h5>
			 <ul>
			 <?php foreach ($excludes as $excludes) { ?>
			 <li><?=$excludes['details']?></li>
			  <?php } ?>
			 </ul>
			 </div>
			
			</div>
			 <!--  tab content End -->
			  <!--  tab content start -->
			
			 <!--  tab content End -->
		
	  </div>
	  	 <!-- package tabs End -->
	
      
		
		
	   </div><!-- right main start -->	  
	</div> <!-- col-lg-9-end -->
	</div><!--  row main -->
  </div> <!-- container -->
  </div> <!-- main wrapper -->
  <!--content body end--> 