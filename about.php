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
             <h4>Understanding your needs like only a local can...</h4>
             <p>You would have to agree there's nothing more frustrating than trying to do business with someone in a capital city.</p>
             <p>Automated answering machines, people who don't appreciate the local picture - you know the scenario.</p>
             <p>Allied Leasing - and its associated business, Betterrent - are right here in central Queensland.</p>
             <p>You can expect timely advice and assistance to look after the financing of equipment for your business most effectively. With an understanding of the special needs of local industries, , Allied will work with you as a partner to establish the very best solution for you and your operation.</p>
             <p>You can call Allied on (07) 4951 1722.</p>
             <div class="pictured">
               <p>Pictured are <span class="y-color">Niel McEvoy</span> (left) and <span class="y-color">Jhon<br> Click</span> who are on the spot to assist with your<br> financial needs.</p>
               <p>They've found solutions for most financial<br> needs on the local scene over their 20 years<br> plus in the business.</p>
             </div>
           </div>   
        </div> <!--welcome_col end here-->
        <div class="aside column"> <!--aside start here-->
        <?php include 'sidebar.php'; ?>
        <div class="fin-pro">
          <img src="images/about_allied.png" alt="finance" />
          <div class="caption">
           Need finance to set up a new office? <a href="#"><span class="y-color">Call now!</span></a>
          </div>
        </div>
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


