<style type="text/css">
.lising li{ background:url(images/Untitled-2.jpg) no-repeat left; padding-left:20px; list-style:none; font-weight: bold;}
.leasing { margin-bottom: 15px;} 
</style>
<?php include 'header.php'; ?>


<div class="banner_rcontainer"> <!--holding the whole bannner container width bottom border-->
  <div class="in_banner_content"> <!--holding the banner image-->
    <div class="row">
      <div class="twelve columns">
        <h1>about allied</h1>
      </div>
    </div>
  </div> <!--banner content end here-->
</div> <!--banner div end here-->
<div class="main_container"> <!--main container start here-->
  <div class="row">
    <div class="twelve column"> <!--holding the background color-->
      <div class="welcome_content clearfix">
        <div class="welcome_col column"> <!--welcome_col start here-->
           <div class="main-content">
             <img src="images/alllease.jpg" alt="lising" class="leasing" />
             <p>Have a look at the equipment shown in the pictures above.<br>The items featured will give you an idea of the broad scope of what equipment can be financed.</p>
             <p>In every trade and profession, whether it's tools, heavy machinery or vehicles, there's a program<br>that will allow you to make use of it without tying up resources.</p>
             <p>Lathes, milling machines, hoists, welders. for enginering shops<br>Trucks and trailers for transport companies</p>
             <ul class="lising">
               <li>Computer systems including software for all types of business</li>
               <li>Hoists, tuning equipment, compressors, tools for auto repair shops</li>
               <li>Kitchen equipment for the catering industry</li>
               <li>Specialist equipment for medical or scientific operations</li>
               <li>Tractors, harvestors, implements for agriculture</li>
               <li>Motor vehicles for every type of business</li>
             </ul>
             <p>The list is far more extensive than we are able to indicate here but, if you're not sure please call (07) 4951 1722.</p>
             <p>The Allied Leasing team has experience in financing a diverse range of equipment</p>
             
           </div>   
        </div> <!--welcome_col end here-->
        <div class="aside column"> <!--aside start here-->
        <?php include 'sidebar.php'; ?>
      </div><!-- aside end here-->
      </div>
    </div><!--welcome contnet end here-->    
  </div>
</div> <!--main container end here-->


<script type="text/javascript">
$('#featured').orbit({
  animation: 'horizontal-push',                  // fade, horizontal-slide, vertical-slide, horizontal-push
  animationSpeed: 800,                // how fast animtions are
  timer: true,                        // true or false to have the timer
  resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
  advanceSpeed: 4000,                 // if timer is enabled, time between transitions
  pauseOnHover: true,                // if you hover pauses the slider
  startClockOnMouseOut: true,        // if clock should start on MouseOut
  startClockOnMouseOutAfter: 0,    // how long after MouseOut should the timer start again
  directionalNav: true,               // manual advancing directional navs 
  bullets: true,                     // true or false to activate the bullet navigation
});
</script>
<!--[if lt IE 8]>
	<script type="text/javascript">
$('#featured').orbit()
</script>
<![endif]-->
 
<?php include 'footer.php'; ?>


