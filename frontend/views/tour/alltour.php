<?php
  
  use yii\widgets\LinkPager;
  use yii\helpers\Url;
//print_r($tours);

?>
  <!--content body start-->
  <div id="content_wrapper">
  <!--page title Start-->
  <div class="page_title" data-stellar-background-ratio="0" data-stellar-vertical-offset="0" style="background-image:url(images/bg/page_title_bg.jpg);">
      <ul>
        <li><a href="javascript:;">Tour Destination</a></li>
      </ul>
    </div>
    <!--page title end-->
    <div class="clearfix"></div>
	
	<div class="full_width destinaion_sorting_section">
	  <div class="container">
	   <div class="row space_100">
	   
	     <!-- left sidebar start -->
	     <div class="col-lg-3 col-md-3 col-sm-12">
	       <div class="travelite_left_sidebar">
		   <div class="sidebar_search_bar">
		    <form>
		     <input type="search" placeholder="Search" id="sidebar_search">
			 </form>
			 	
		   </div>
			 <aside class="widget destination_widget">
			 <h4 class="widget-title">chosse destination</h4>
			 <div class="travel_checkbox_round">
             <input type="checkbox" id="singapore">
             <label for="singapore">Singapore</label>
			 <input type="checkbox" id="africa">
             <label for="africa">africa</label>
			 <input type="checkbox" id="australia">
             <label for="australia">australia</label>
			 <input type="checkbox" id="america">
             <label for="america">america</label>
			 <input type="checkbox" id="nepal">
             <label for="nepal">nepal</label>
			 <input type="checkbox" id="europe">
             <label for="europe">europe</label>
			  <input type="checkbox" id="japan">
             <label for="japan">japan</label>
			 <input type="checkbox" id="india">
             <label for="india">india</label>
			 <input type="checkbox" id="egypt">
             <label for="egypt">egypt</label>
			 <input type="checkbox" id="malaysia">
             <label for="malaysia">malaysia</label>
		
              </div>
			  
			 </aside>
			 
			<!-- <aside class="widget widget_filter">
			 <h4 class="widget-title">filter by price</h4>
			 <div class="price_filter_slider">
			 <div id="slider"></div>
			 <p class="range_text">
			 <label for="amount">Price range:</label>
            <input type="text" id="amount" readonly>
			</p>
			 </div>
			 </aside> -->
			 
			 <aside class="widget category_widget">
			 <h4 class="widget-title">categories</h4>
			 <div class="travel_checkbox_round">
             <input type="checkbox" id="default">
             <label for="default">default</label>
			 
			 <input type="checkbox" id="island_tour">
             <label for="island_tour">island tour</label>
			 
			 <input type="checkbox" id="summer_holidays">
             <label for="summer_holidays">summer holidays</label>
			 
			 <input type="checkbox" id="boat_house">
             <label for="boat_house">boat house</label>
			 
			 <input type="checkbox" id="honeyMoon">
             <label for="honeyMoon">honeyMoon</label>
			 
			 <input type="checkbox" id="beachholidays">
             <label for="beachholidays">beach holidays</label>
			  
		
              </div>
			  
			 </aside>
			 
			 <aside class="widget hotel_widgets">
			 <h4 class="widget-title">Australia Hotels</h4>
			 <ul>
		     <li> <img src="images/tour-grid/thumb_2.jpg" alt="hotel thumb">
		       <div>
			   <h4><a href="#">Diamond Hotel</a></h4>
		       <p>$199 / Night</p>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
		       
		       </div>
		    </li>
			 <li> <img src="images/tour-grid/thumb_2.jpg" alt="hotel thumb">
		       <div>
			   <h4><a href="#">sliver Hotel</a></h4>
		       <p>$199 / Night</p>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
		       
		       </div>
		    </li>
			 <li> <img src="images/tour-grid/thumb_3.jpg" alt="hotel thumb">
		       <div>
			   <h4><a href="#">platinum Hotel</a></h4>
		       <p>$199 / Night</p>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
			   <i class="fa fa-star"></i>
		       
		       </div>
		    </li>
		     
	</ul>
			 
			 </aside>
		
		   </div>
	     </div>
	      <!-- left sidebar end -->
	     <!-- right main start -->
		<div class="col-lg-9 col-md-9 col-sm-12">
		<div class="tour_packages_right_section">
		<div class="tour_packages_description">
		<div class="tour_heading">
		<h4>Australia Tour Packages</h4>
		<span class="packs">(178 Packs Found)</span>
		</div>
		<p class="more_text">There are many variations of passages of Lorem Ipsum available, but the joy have suffered alteration in 
		some format, by injected humour.  There are many variations of passages of Lorem Ipsu available, 
		but the joy have suffered alteration in some format,by injected humour users 
		Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
		
		</div>
	     <div class="full_width sorting_panel">
		 <div class="sorting_destination">
					<select class="form-control selectpicker" id="search_popular">
						<option value="1">Sort by : Popularity</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<div class="sorting_destination">
					<select class="form-control selectpicker" id="search_places">
						<option value="1">Show: 9 places/page</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<div class="sorting_destination">
					<select class="form-control selectpicker" id="search_price">
						<option value="1">Sort by : Price</option>
						<option value="2">50</option>
						<option value="3">75</option>
						<option value="4">100</option>
					</select>
					<i class="fa fa-chevron-down"></i>
				</div>
				<!-- sorting list -->
				
		       <!-- sorting list -->
		 </div><!--  sorting panel End -->
		 
		 
		 
		 <!-- sorting places section -->
		 <div class="row">
		 <div class="full_width sorting_places_section">
                     <?php 
                       foreach($tours as $tours)
                       {
                       
                       ?>
		        <!--  place sort start -->
		   <div class="col-lg-6 col-md-6 col-sm-6">
		   <div class="sorting_places_wrap grid_sorting">
		   <div class="top_head_bar">
                       <?php $id= $tours->id; ?>
		   <h4><a href="<?=Url::toRoute(['tour/details', 'id' =>$id]);?>"><?=$tours->title ;?></a></h4>
		   <span class="time_date"><i class="fa fa-clock-o"></i><?=$tours->days ;?>days</span>
		   </div>
		   <div class="thumb_wrape">
		   <img src="http://localhost/luxeworld/backend/web/<?=$tours->image ;?>" alt="Grid pic">
		   </div>
		   <div class="bottom_desc">
		   <h5>Starting from<span><?=$tours->price ;?> /</span>per person</h5>
		    <!-- desc icons Start-->
		   <ul class="sort_place_icons">
		   <li><i class="fa fa-car"></i> transports</li>
		   <li><i class="fa fa-plane"></i> flights</li>
		   <li><i class="fa fa-binoculars"></i> sight seeing</li>
		   <li><i class="fa fa-cutlery"></i> food</li>
		   <li><i class="fa fa-building-o"></i> hotels</li>
		   </ul>
		    <!-- desc icons End-->
		   </div>
		   </div>
		   </div>
                       <?php } ?>
		   <!--  place sort End -->
		   
		   
		   
		   
		   
		  
			 
				 
	   </div>
	     <!-- sorting places section -->
	    <!-- pagination section -->
	   <div class="full_width pagination_bottom">
               <?php
                 echo LinkPager::widget([
                     'pagination' => $pagination,
                 ]);
               ?>
	   </div>
	   <!-- pagination section -->
	   </div>
	   </div>
	   </div><!-- right main start -->
	  </div>
	</div>

  </div>
  <!--content body end--> 
  
  