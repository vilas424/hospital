<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- DC Nivo Slider CSS -->
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
 
<!-- DC Javascript Library -->
<script type="text/javascript" src="jquery.min.js"></script> <!-- jQuery Library (do not call twice on same page) -->
 
<!-- DC Nivo Slider JS -->
<script type="text/javascript" src="jquery.nivo.slider.pack.js"></script>
 
<!-- DC Nivo Slider Settings -->
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'random', // Effects available: 'random,fold,fade,boxRandom,sliceDown,sliceDownLeft,sliceUp,sliceUpLeft,sliceUpDown,sliceUpDownLeft,slideInRight,slideInLeft,boxRain,boxRainReverse,boxRainGrow,boxRainGrowReverse'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 2400, // How long each slide will show before next slide (2400 = 2 seconds)
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: false, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
            controlNavThumbsFromRel:true, // Generates the thumbnail url from the "rel" attribute in your image tags
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: '<', // Prev directionNav text
        nextText: '>', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>
 
<!-- DC Nivo Slider Start -->
<title>log in</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main_wrap">
  <div class="main">
    <div class="main_wrap">
      <div class="top_area">
        <div class="top_area_main">
          <div class="logo_area">
            <div class="main_wrap">
             <div class="logo_pasition"><a href="index.html"><img src="images/logo.jpg" alt="" /></a></div>
            </div>
          </div>
          <div class="nav_area">
            <div class="main_wrap">
              <div class="nav_pasition">
                <div class="nav_wrap">
                  <ul>
                    <li><a href="about us.html" class="home">About Us</a></li>
                    <li><a href="Appointment.html" class="home">Appointment</a></li>
                    <li><a href="Cunsoltuncy.html" class="home">Consultancy</a></li>
                    <li><a href="Sign Up.html" class="home">Sign Up</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header_area">
        <div class="main_wrap">
         <div class="header_bg">
             <div style="width:894px;   "> <!-- define slider container width (strict enforce) --> 
  <div id="slider-wrapper">
    <div id="slider" class="nivoSlider">
         
        <!-- local sample image: 
        <img src="dreamcodes/sliders/images/nivo-slider/980x400-image.jpg" width="894" height="356" title="#htmlcaption" /> -->
         
        <!-- Slide 1 -->
        <img src="images/003.PNG" width="894" height="356" title="#htmlcaption1" />
         
        <!-- Slide 2 -->
        <img src="images/002.jpg" width="894" height="356" title="#htmlcaption2" />
         
		<!-- Slide 3 -->
        <img src="images/004.jpg" width="894" height="356" title="#htmlcaption2" />
       
         
    </div> <!-- /slider -->
     
 
     
  </div> <!-- /slider-wrapper -->
</div>  
<!-- DC Nivo Slider End -->
<div class="tsc_clear"></div> <!-- line break/clear line -->
          </div>
        </div>
      </div>
      <div class="welcome_area">
        <div class="main_wrap">
          <div class="welcome_main">
            <div class="main_wrap" style="margin-left:80px; margin-top:50px;">
             
              <p class="log">* <a href="registration.html">Registration</a></p>
              <p class="log">* <a href="staff_details.html">Staff Details</a></p>
              <p class="log">* <a href="doctor_details.html">Doctor Details</a></p>
              <p class="log">* <a href="">Facilities</a></p>
              <p class="log">* <a href="">Rate Board</a></p>
            </div>
          </div>
		  <div class="form" style="width:300px;  float:right; margin-top:30px; margin-right:30px;">
		 <img src="images/hospital.jpg"/>
		  </div>
        </div>
      </div>
      <br class="blank" />
      
     
   
      <div class="main">
        <div class="footer_area">
          <div class="main_wrap">
            <div class="footer_left_area"><img src="images/footer_left_image.jpg" alt="" /></div>
            <div class="footer_meddile_area">
              <div class="footer_repeat">
                <div style="padding-top:45px;">
                  <div class="footer_text_area">
                   <p class="text_col"><a href="index.html" class="footeractive">Home</a>  | <a href="about us.html" class="footer">About Us</a> | <a href="Appointment.html" class="footer">Appointment</a> | <a href="Cunsoltuncy.html" class="footer">Consultancy</a> | <a href="Sign Up.html" class="footer">Sign Up</a></p>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="footer_left_area"><img src="images/footer_right_image.jpg" alt=""/></div>
            <div class="black"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</html>
