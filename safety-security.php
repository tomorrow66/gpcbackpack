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

  <div class="icon-section-full">
    <div class="container">
      <!-- Example row of columns -->
      <div class="icons row">
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
            	<img src="assets/img/icons/academic_success2.svg" class="Absolute-Center is-Image" alt="">
            	<div class="caption">Academic Success</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/campus_life2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Campus Life</div>
            </div>
          </div>
         </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/gpc_college_online2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">GPC Online - Campus</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/military_outreach2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Military Outreach</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/paying_for_college2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Paying for College</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/safety_security2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Safety & Security</div>
            </div>
          </div>
         </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/student_success2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Student Success</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
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