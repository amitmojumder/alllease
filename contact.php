<?php include 'header.php'; ?>

<div class="banner_rcontainer"> <!--holding the whole bannner container width bottom border-->
  <div class="in_banner_content"> <!--holding the banner image-->
    <div class="row">
      <div class="twelve columns">
        <h1>contact</h1>
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
             <img src="images/map.jpg" class="map" alt="gmap"/>
             <h4>Start benefitting now...</h4>
             <p>Now is the time to upgrade that outdated equipment and improve the effciency of your operation.</p>
             <h4>Allied Leasing  is ready to help you</h4>
             <p>You'll find the allied team at their offices at hte corner of alfred & Wellington Streets, Mackay. Postal address: PO Box 2059, MACKAY Q 4740</p>
             <p>You can e-mail any of the team by clicking on their name below:<br> Neil McEvoy<br> Jhon Chick<br> Steve Burchill<br> Callum Joynson<br> Carol McEvoy<br>Jacquil Patterson<br> Julie Osborne<br> Rozanne Henning</p>
             <p>Fax on (07) 4951 4969</p>
             <p>Phone on (07) 4951 1722.</p>
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


