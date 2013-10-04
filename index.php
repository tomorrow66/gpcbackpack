<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Home";
	$sectionHeader = "GPC Backpack Site";
	$sectionSubHeader = "Preparing for success";
	# Include header
	include("includes/header.php"); 
?>
  
  <!-- Carousel
  ================================================== -->
  <div id="homeCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/img/slider/header_image2b.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h3>Welcome!</h3>
            <p><span>Use the backpack site below to guide you to online and on campus resources.</span></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div><!-- /.carousel -->

  <div class="icon-section-full">
    <div class="container">
      <!-- Example row of columns -->
      <div class="icons row">
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
            	<img src="assets/img/icons/academic_success2.svg" class="Absolute-Center is-Image" alt="">
            	<div class="caption">Academic Success</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/campus_life2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Campus Life</div>
            </div>
          </div>
         </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/gpc_college_online2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">GPC Online - Campus</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/military_outreach2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Military Outreach</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="icons row">
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/paying_for_college2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Paying for College</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/safety_security2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Safety & Security</div>
            </div>
          </div>
         </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/student_success2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Student Success</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/tech_help2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Technology Tips</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <section class="main">
    <div class="section-header">
      <div class="container">
        <strong class="title"><?php echo "$sectionHeader";?></strong>
        <div class="subtitle">Preparing for success</div>
      </div>
    </div>
    <!-- Example row of columns -->
    <div class="container">
      <div class="content">
        <p class="lead">Welcome to the Georgia Perimeter College backpack site! </p>
        <p>Here you will find helpful GPC information organized into eight (8) main sections. Each section provides online and on campus resources such as direct web links, downloads, and videos to support your academic and personal success.
      </p>
        <ol>
          <li>Academic Success</li>
          <li>Campus Life</li>
          <li>GPC Online/iCollege</li>
          <li>Military Outreach</li>
          <li>Safety & Security</li>
          <li>Personal Success</li>
          <li>Technology</li>
          <li>Paying for College</li>
        </ol>
        <p>Popular resources such as GPC Calendars, Frequently Asked Questions (FAQs), Login/Password Help, and Student Information System (SIS) links are provided below.</p>
        <p>Best wishes on a great semester.  Go Jaguars!</p>
      
      </div>
    </div>

  </section>

<?php
	# Include Footer
	include("includes/footer.php");
?>
