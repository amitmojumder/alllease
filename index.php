<?php include 'header.php'; ?>

<div class="banner_rcontainer"> <!--holding the whole bannner container width bottom border-->
  <div class="banner_content"> <!--holding the banner image-->
    <div class="row">
      <div class="banner_title_col column">
        <h1>your local connection to</h1>
        <h1> the world of finance!</h1>
        <span class="provide">
          <span class="yellow">Finance Solutions</span> for <span class="yellow">Trucks,</span><span class="yellow">Cars,</span>and <span class="yellow">Machinery,</span> <span class="yellow">Office Fit-Out</span> and all <span class="yellow">Business Equipment</span>
        </span>
      </div>
      <div class="slider_col column end"> <!--slideer start here-->
        <div class="slider">
         <div id="featured">
           <img src="images/slide-image/slide-1.png" alt="slide image">
           <img src="images/slide-image/slide-1.png" alt="slide image">
           <img src="images/slide-image/slide-1.png" alt="slide image">
         </div>
        </div>
        
      </div> <!--slider end here-->
    </div>
  </div> <!--banner content end here-->
</div> <!--banner div end here-->
<div class="main_container"> <!--main container start here-->
  <div class="row">
    <div class="twelve column"> <!--holding the background color-->
      <div class="welcome_content clearfix">
        <div class="welcome_col column"> <!--welcome_col start here-->
        
       <!-- <div class="welcome_details column">--><!--welcome details start here-->
          <h4>Welcome</h4>
          <p>Financing your business equipment, such as machinery, computers, trucks, cars or office fit-out...is the tried and tested way and...it preserves your necessary working capital.</p>
          <p>We can match your needs and your individual situation with the right kind of finance options.... the type of options that will work best for you, whether you are an established business or a new start-up.
</p>
		  <p>There are ways to upgrade your technology without committing your capital. There's no longer any need to put up with outdated equipment.</p>
          <h4>Financing Equipment – Why?</h4>
          <p>Buying any equipment outright can have a large effect on your business and deplete your cash flow. With equipment finance, it's often possible to finance 100% of the cost thereby allowing you to pay for the equipment throughout its working life rather than in one huge up-front payment.</p>
          <p>Also, your payments can be structured in such a way that tales things like projected growth of the business into account.</p>
          <p>Large purchases can be significant, especially for smaller businesses. Keep a hold on your capital to reduce your risk whilst keeping your equipment up to date too!</p>
          <p>Financing your equipment leaves your working capital and any lines of credit available for use in other aspects of your business. Plus, your finance can be structured to ensure that equipment updates are easy to manage and you don't end up owning out-dated equipment.</p>
        </div><!--welcome details end here-->        
      <!--</div>--> <!--welcome_col end here-->
        <div class="aside column"> <!--aside start here-->
        <div class="welcome_img"> <!--holding image-->
          <img src="images/welcome_image.png" alt="image" />
        </div> <!--welcome_img end here-->
        <?php include 'sidebar.php'; ?>
      </div><!-- aside end here-->
      </div>
    </div><!--welcome contnet end here-->    
  </div>
  <div class="row">
    <div class="twelve column">
      <div class="subheader">
        Allied Leasing... Specialized financial services for local industries located in Mackay,<br> Bowen, Airlie Beach, Proserpine, Moranbah, Dysart, Clermont and Emerald
      </div>
    </div>
  </div>
  <div class="row"> <!--home content start here-->
    <div class="home_content column">      
      <div onclick="location.href='finance.php';" class="caption_holder">
        <img src="images/financial_image.png" alt="functional image"/>
        <div class="caption">
          Financial option
        </div>        
      </div>      
    </div>
    <div class="home_content column">
      <div onclick="location.href='lising.php';" class="caption_holder" >
        <img src="images/leasing.png" alt="lesing image"/>
        <div class="caption">
          Leasing
        </div>       
      </div>
    </div>
    <div class="home_content column">
      <div onclick="location.href='application.php';" class="caption_holder">
        <img src="images/application_image.png" alt="application image" />
        <div class="caption">
          Application
        </div>        
      </div> 
    </div>
  </div> <!--home content end here-->
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


