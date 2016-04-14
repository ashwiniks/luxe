<?php
  error_reporting(0);

  use frontend\assets\AppAsset;
  use yii\helpers\Html;
  use yii\bootstrap\Nav;
  use yii\bootstrap\NavBar;
  use yii\widgets\Breadcrumbs;
  use yii\helpers\Url;
  use common\widgets\Alert;
  use backend\models\Category;

//$sql = "SELECT * FROM Congress_Details WHERE date >= DATE_SUB(NOW(), INTERVAL 1 MONTH";
//use Yii;

  /* @var $this \yii\web\View */
  /* @var $content string */

  AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->


    <head>
        <meta charset="utf-8" />
        <title>Luxe World</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta name="description"  content="Travelite - Tours and Travels Online Booking HTML"/>
        <meta name="keywords" content="Travel, html template, Travelite template">

        <meta name="MobileOptimized" content="320">
        <?= Html::csrfMetaTags() ?>
        <!-- favicon links -->
        <link rel="shortcut icon" type="image/ico" href="favicon.ico" />
        <link rel="icon" type="image/ico" href="favicon.ico" />
        <?php $this->head(); ?>
    </head>

    <body class="travel_home">
        <?php $this->beginBody() ?>
        <!--Page loading start-->
       <!--  <div class="travel_page_loader">
            <div class="travel_loading_bar_wrapper">
                <div class="travel_loading_bar">
                    <span class="from"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewBox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve"><path fill="#86B940" d="M15.053,4.626c6.334,0,11.488,5.166,11.488,11.514c0,6.35-5.153,11.515-11.488,11.515c-6.335,0-11.489-5.166-11.489-11.515C3.564,9.792,8.718,4.626,15.053,4.626 M15.053,1.26c-8.201,0-14.849,6.661-14.849,14.881c0,8.22,14.849,32.359,14.849,32.359s14.849-24.14,14.849-32.359S23.255,1.26,15.053,1.26z M17.197,21.558v1.444h1.701V6.772h-7.69V7.7h6.876v1.186h-6.876v14.115h1.776v-1.443L17.197,21.558L17.197,21.558z M15.718,10.146h2.292v2.298h-2.292V10.146z M15.7,14.108h2.292v2.299H15.7V14.108z M15.7,18.037h2.292v2.295H15.7V18.037z M12.133,10.146h2.292v2.298h-2.292V10.146z M12.114,14.108h2.292v2.299h-2.292V14.108z M12.114,20.333v-2.295h2.292v2.295H12.114z M17.197,23.188v-0.186h-4.213v0.186H8.695v1.631h12.717v-1.631H17.197z"/></svg></span>
                    <span class="to">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="49px" viewBox="0 0 30 49" enable-background="new 0 0 30 49" xml:space="preserve"><path fill="#86B940" d="M15.001,3.636c6.369,0,11.55,5.193,11.55,11.577c0,6.383-5.181,11.58-11.55,11.58c-6.372,0-11.551-5.197-11.551-11.58C3.45,8.829,8.629,3.636,15.001,3.636 M15.001,0.25C6.753,0.25,0.07,6.952,0.07,15.213c0,8.265,14.931,32.537,14.931,32.537s14.93-24.272,14.93-32.537C29.931,6.952,23.244,0.25,15.001,0.25z M13.871,20.894l1.182-0.003V20.88h-0.005l0.005-0.038V20.62c-0.013-0.187,0-1.001,0-1.001c-0.118-1.364-0.671-3.527-2.869-4.981c-0.042-0.025-1.077-0.676-1.439-2.202c-0.355-1.505,0.07-3.29,1.265-5.305c-1.594,1.002-2.658,2.775-2.658,4.803c0,1.745,0.795,3.307,2.034,4.343c0,0,0.39,0.301,0.506,0.378C14.083,18.362,13.871,20.894,13.871,20.894z M17.594,14.451c0.013-0.002,1.19-0.681,1.269-2.161c0.086-1.549-0.23-3.436-1.508-5.498C16.72,6.497,16.02,6.32,15.283,6.283v12.016C15.612,17.022,15.927,15.552,17.594,14.451z M11.364,12.256c0.082,1.476,1.257,2.156,1.27,2.161c1.666,1.102,1.983,2.571,2.312,3.847V6.248c-0.738,0.036-1.436,0.214-2.071,0.508C11.6,8.819,11.282,10.707,11.364,12.256z M17.354,6.787v0.004l0.031,0.012L17.354,6.787z M18.113,7.107c1.295,2.104,1.836,3.727,1.465,5.288c-0.357,1.523-1.395,2.176-1.438,2.201c-2.14,1.412-2.718,3.504-2.856,4.873v1.423h1.237c0,0-0.03-2.824,1.757-4.35c1.617-1.093,2.369-2.708,2.369-4.606C20.646,9.819,19.823,8.08,18.113,7.107z M15.252,20.911h0.032v-0.02h-0.031L15.252,20.911z M13.695,24.404h3.116v-3.116h-3.116V24.404z"/></svg></span>
                    <div class="travel_loading_bar_overlay" style="width:0%;">
                        <span class="pointer"><img src="images/icon/loading_plane.svg" alt="" /></span>
                        <span class="pointer_val">0%</span>    
                    </div>
                </div>
            </div>
        </div>-->
        <!--Page loading end-->
        <!--Page main section start-->
        <div id="travel_wrapper"> 
            <!--Header start-->
            <header id="header_wrapper">
               
        </div>
    </div>
</div>
</div>
<!-- popup form  End -->
<div class="header_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="travel_logo">
                    <a href="index.php"><img src="images/logo.png" alt="logo"  /></a> 
                </div>
            </div>
            <div class="col-md-10 col-sm-10"> <a href="javascript:;" class="menu-toggle"></a>
                <div class="main_menu">
                    <ul>
                        <?php
                          $main = Category::findAll(['parent_id' => 0]);
                          foreach ($main as $main) {
                              ?>
                              <li class=""><a href="index.php?r=site/<?= $main["category_link"] ?>"><?= $main["category_name"] ?></a>
                                  <?php
                                  $sub = Category::findAll(['parent_id' => $main["category_id"]]);
                                  if ($sub) {
                                      ?>
                                      <ul class="sub-menu">
                                          <?php foreach ($sub as $sub) {
                                              ?>



                                              <li class=""><a href="#"><?= $sub["category_name"] ?></a>
                                                  <?php
                                                  $sub_second = Category::findAll(['parent_id' => $sub["category_id"]]);
                                                  if ($sub_second) {
                                                      ?>
                                                      <ul class="sub-menu">
                                                          <?php foreach ($sub_second as $sub_second) {
                                                              ?>

                                                              <li class=""><a href="#"><?= $sub_second["category_name"] ?></a></li>  
                  <?php } ?>
                                                      </ul>

                                              <?php } ?>
                                              </li>
          <?php } ?>

                                      </ul>
      <?php } ?>



                              </li>

  <?php } ?> 


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
<!--Header end--> 
<!--content body start-->
<div id="content_wrapper"> 
<?= $content ?>
</div>
<!--content body end--> 
<!--footer start-->
<footer id="footer_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="widget widget_text"> <a href="Home_01.html"><img src="images/logo-footer.png" alt="footer logo" /></a> 
                    <p>In 2015, We launched Travellers with the belief that other travellers would share our desire to experience authentic adventures in a responsible and sustainable manner. <br>
                        <br>
                        We've grown from a one-man show to a company of over 50 world wide, and from a handful of trips in all over the world.</p>
                    <a href="#">Read More <i class="fa fa-angle-right"></i></a> </aside>
                <aside class="widget widget_tag_cloud">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tagcloud"> <a href="#">Travel</a> <a href="#">Booking</a> <a href="#">Hotels</a> <a href="#">Cars</a> <a href="#">Flights</a> <a href="#">Tours</a> </div>
                </aside>
            </div>
            <div class="col-md-4">
                <aside class="widget widget_recent_entries">
                    <h4 class="widget-title">Recent Posts</h4>
                    <ul>
                        <li> <img src="images/blog/recent_blog_footer1.jpg" alt="Recent blog" />
                            <div>
                                <p>Nunc cursus libero purus ac congue arcu cursus..</p>
                                <a href="#">Read More</a> </div>
                        </li>
                        <li> <img src="images/blog/recent_blog_footer2.jpg" alt="Recent blog" />
                            <div>
                                <p>Nunc cursus libero purus ac congue arcu cursus..</p>
                                <a href="#">Read More</a> </div>
                        </li>
                    </ul>
                </aside>
                <aside class="widget widget_links">
                    <h4 class="widget-title">Useful Links</h4>
                    <ul>
                        <li><a href="#">Travellers</a></li>
                        <li><a href="#">Support Center</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Special Offers</a></li>
                        <li><a href="#">Events Ready</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-4">
                <aside class="widget widget_search_availability">
                    <div class="wsa_tab">
                        <ul>
                            <li> <a href="#widget_global_search"> <svg version="1.1" id="widget_global_search_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                       width="48.999px" height="48.999px" viewBox="0 0 48.999 48.999" style="enable-background:new 0 0 48.999 48.999;"
                                                                       xml:space="preserve">
                                   
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    <g> </g>
                                    </svg></a> </li>

                        </ul>
                    </div>
                    <div id="widget_global_search" class="wsa_tab_content">
                        <form>
                            <div class="travel_form_element">
                                <label>All Destination</label>
                                <select class="selectpicker" multiple data-live-search="true" title="Your Destination">
                                    <option data-tokens="New Delhi, India (DEL)">New Delhi, India (DEL)</option>
                                    <option data-tokens="Mumbai, India (BOM)">Mumbai, India (BOM)</option>
                                    <option data-tokens="Bangalore, India (BLR)">Bangalore, India (BLR)</option>
                                    <option data-tokens="Goa, India (GOI)">Goa, India (GOI)</option>
                                    <option data-tokens="Kolkata, India (CCU)">Kolkata, India (CCU)</option>
                                    <option data-tokens="Hyderabad, India (HYD)">Hyderabad, India (HYD)</option>
                                    <option data-tokens="Dubai, UAE (DXB)">Dubai, UAE (DXB)</option>
                                    <option data-tokens="Bangkok, Thailand (BKK)">Bangkok, Thailand (BKK)</option>
                                    <option data-tokens="Singapore, Singapore (SIN)">Singapore, Singapore (SIN)</option>
                                    <option data-tokens="New York, US - All Airports (NYC)">New York, US - All Airports (NYC)</option>
                                </select>
                            </div>
                            <div class="travel_form_element">
                                <label>Typology</label>
                                <select class="selectpicker" multiple data-live-search="true" title="Typology">
                                    <option data-tokens="travel less">travel less</option>
                                    <option data-tokens="stay shorter periods">stay shorter periods</option>
                                    <option data-tokens="spend less">spend less</option>
                                    <option data-tokens="prefer family road trips">prefer family road trips</option>
                                    <option data-tokens="mobile homes & lower costs">mobile homes & lower costs</option>
                                    <option data-tokens="friends & family">friends & family</option>
                                    <option data-tokens="visit familiar tourist spots">visit familiar tourist spots</option>
                                    <option data-tokens="travel more by air">travel more by air</option>
                                </select>
                            </div>
                            <div class="travel_form_element">
                                <label>Check in date</label>
                                <input type="text" id="Check_in_date_global_search" placeholder="dd/mm/yyyy">
                                <i class="fa fa-calendar"></i> </div>
                            <div class="travel_form_element">
                                <label>Check out date</label>
                                <input type="text" id="Check_out_date_global_search" placeholder="dd/mm/yyyy">
                                <i class="fa fa-calendar"></i> </div>
                            <div class="travel_form_element">
                                <label>Max-Budget</label>
                                <select class="selectpicker" data-live-search="true" title="your Max-Budget">
                                    <option data-tokens="Rs. 2000 and Below">Rs. 2000 and Below"</option>
                                    <option data-tokens="Rs. 2001 - Rs. 5000">Rs. 2001 - Rs. 5000</option>
                                    <option data-tokens="Rs. 2001 - Rs. 5000">Rs. 2001 - Rs. 5000</option>
                                    <option data-tokens="Rs. 5001 - Rs. 10000">Rs. 5001 - Rs. 10000</option>
                                    <option data-tokens="Rs. 10001 - Rs. 18000">Rs. 10001 - Rs. 18000</option>
                                    <option data-tokens="Rs. 18001 - Rs. 25000">Rs. 18001 - Rs. 25000</option>
                                    <option data-tokens="Rs. 25001 - Rs. 35000">Rs. 25001 - Rs. 35000</option>
                                    <option data-tokens="Rs. 35001 and Above">Rs. 35001 and Above</option>
                                </select>
                            </div>
                            <div class="travel_form_element">
                                <button type="submit" class="btn-travel btn-yellow">Search</button>
                            </div>
                        </form>
                    </div>

                </aside>
                <aside class="widget payment_method">
                    <h4 class="widget-title">Supported Payment Method</h4>
                    <a href="#"><img src="images/Payment-Images.png" alt="Payment Method" /></a> </aside>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6"> <span>Stay Connected with Us - </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
            <div class="col-md-6 col-sm-6 text-right"> <span>Luxe World Vactions@2016. All Right Reserved</span> </div>
        </div>
    </div>
</div>
</div>
<!--Page main section end--> 
<!--main js file start--> 

<!--main js file end-->
<?php $this->endBody() ?>
</body>

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
</html>

<?php $this->endPage() ?>

