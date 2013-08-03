<?php include 'header.php'; ?>

<div class="banner_rcontainer"> <!--holding the whole bannner container width bottom border-->
  <div class="in_banner_content"> <!--holding the banner image-->
    <div class="row">
      <div class="twelve columns">
        <h1>application</h1>
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
             <h4>Ready to apply for a finance solution?</h4>
             <p>There are a range of finance options available, each having its own positive and negative attributes and affecting your tax position in different ways. Whilst one option may be good for one business, it may not suit another.</p>
             <p>We like to work with you to determine the best solution for your business needs.</p>
             <p>You can download an equipment finance application form <a href="#">here.</a></p>
             <p>Alternatively, <a href="#">send us an e-mail</a> explaining what equipment you are seeking to finance and an outline of your circumstances and we'll come back to you with some suggestions for your particular needs.</p>
             <p>If you have any queries, please call us on (07) 4951 1722.</p>
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


