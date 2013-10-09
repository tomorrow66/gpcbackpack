<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Safety & Security";
	$sectionHeader = "Being aware and knowing your surroundings.";
	$sectionSubHeader = "";
	# Include header
	include("includes/header.php"); 
?>

  <figure class="fluidratio">
    <figcaption>
      <strong class="headline"><?php echo "$pageTitle";?></strong>
    </figcaption>
  </figure>

  <!-- Carousel
  ================================================== -->
  <!-- <div id="homeCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <img src="assets/img/slider/bannerimage.png" alt="First slide">
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
  </div> --><!-- /.carousel -->
  
  <div class="icon-section-full">
    <div class="container">
      <!-- Example row of columns -->
      <div class="icons row">
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/academic-success.php"><img src="assets/img/new_icons/academic_success.png" class="Absolute-Center is-Image" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/campus-life.php"><img src="assets/img/new_icons/campus_life.png" class="Absolute-Center is-Image" alt=""></a>
            </div>
          </div>
         </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/gpc-online-college.php"><img src="assets/img/new_icons/icollege.png" class="Absolute-Center is-Image" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/military-outreach.php"><img src="assets/img/new_icons/military_outreach.png" class="Absolute-Center is-Image" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/paying-for-college.php"><img src="assets/img/new_icons/paying_for_college.png" class="Absolute-Center is-Image" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/safety-security.php"><img src="assets/img/new_icons/safety_security.png" class="Absolute-Center is-Image" alt=""></a>
            </div>
          </div>
         </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/student-success.php"><img src="assets/img/new_icons/personal_success.png" class="Absolute-Center is-Image" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/tech-tips.php"><img src="assets/img/new_icons/tech_tips.png" class="Absolute-Center is-Image" alt=""></a>
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
        <?php if (!empty($sectionSubHeader)) :?>
        <div class="subtitle"><?php echo "$sectionSubHeader";?></div>
        <?php endif; ?>
      </div>
    </div>
    <!-- Example row of columns -->
    <div id="content" class="container">
      <div class="content">
        <p class="lead">Welcome to the Georgia Perimeter College backpack site! </p>
        <p>Et whatever pariatur bespoke est. Truffaut pickled fanny pack placeat mlkshk. Wolf elit roof party shabby chic literally, disrupt art party chia enim. Wes Anderson direct trade dolor pug aliqua meh. Commodo pug seitan nulla, authentic XOXO fap vinyl. Delectus wolf bespoke aute, reprehenderit culpa hashtag et four loko bicycle rights veniam shabby chic hoodie sustainable mustache. Quinoa est Brooklyn fingerstache Banksy.</p>
        <p>Duis seitan cardigan, meh nisi aesthetic ad mumblecore wayfarers umami put a bird on it Shoreditch occaecat. Narwhal next level Intelligentsia, quis before they sold out Marfa sartorial polaroid. Nulla messenger bag XOXO skateboard, irure paleo Vice velit polaroid ea ut. 90's Bushwick letterpress, in Truffaut chia Williamsburg. Cray sriracha distillery occaecat, Wes Anderson flexitarian sartorial shabby chic Austin. PBR&B paleo eiusmod seitan sunt. Godard deserunt fashion axe synth sartorial do.</p>
        <p>Godard deserunt fashion axe synth sartorial do.</p>
      
      </div>
    </div>

  </section>

<?php
	# Include Footer
	include("includes/footer.php");
?>