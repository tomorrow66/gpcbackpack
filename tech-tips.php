<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Tech Tips";
	$sectionHeader = "Tech help is as close as a call, e-mail, website, or JagSPOT.";
	$sectionSubHeader = "";
  $sectionDesc = "Tech help is as close as a call, e-mail, website, or JagSPOT.  Prepare for success by reviewing topics such as GPC’s Service Desk, JagSPOTS, GPC Login/Password assistance, Student Information System (SIS), Webmail, SkillSoft Online Learning, DegreeWorks and technical assistance.";
  $vimeoID = "70793546";
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
  
  <?php
    # Include Icon Nav
    include("includes/category-icon-nav.php");
  ?>

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

        <div class="videoWrapper">
          <iframe src="//player.vimeo.com/video/<?php echo "$vimeoID";?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      
        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Get Help with Technology</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Service Desk - <a href="http://www.gpc.edu/oit/servicedesk -  
">http://www.gpc.edu/oit/servicedesk</a> - assistance by phone, e-mail or chat.
              </li>
              <li class="list-group-item">
                24/7 iCollege Support from the D2L Help Center: <a href="https://d2lhelp.view.usg.edu/">https://d2lhelp.view.usg.edu/</a>
              </li>
            </ul>
          </div>
        </section>
      
        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Hands-on Access to Technology</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                JagSpots - <a href="http://www.gpc.edu/oit/jagSPOT">http://www.gpc.edu/oit/jagSPOT </a>
              </li>
              <li class="list-group-item">
                MobileSpot - bring your own laptop or mobile device
              </li>
              <li class="list-group-item">
                TechSpot – access to GPC techs offering laptop support to students</a>
              </li>
              <li class="list-group-item">
                BusinessSpot – access to printing, copying, scanning and faxing</a>
              </li>
              <li class="list-group-item">
                MediaSpot - <a href="http://mediaspot.gpc.edu/">http://mediaspot.gpc.edu/</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Required Technology</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Forget a Username or Password - <a href="http://getmylogin.gpc.edu/">http://getmylogin.gpc.edu/</a>
              </li>
              <li class="list-group-item">
                GPC Webmail - <a href="http://webmail.gpc.edu/">http://webmail.gpc.edu/</a>
              </li>
              <li class="list-group-item">
                iCollege - <a href="http://icollege.gpc.edu/">http://icollege.gpc.edu/</a>
              </li>
              <li class="list-group-item">
                GPC’s Student Information System (SIS) - <a href="http://sis.gpc.edu/">http://sis.gpc.edu/</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Software/Hardware/Downloading</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Skill Soft  Online Learning - <a href="https://eapps.gpc.edu/training/">https://eapps.gpc.edu/training/</a>
              </li>
              <li class="list-group-item">
                Student Software - <a href="http://www.gpc.edu/oit/servicedesk">http://www.gpc.edu/oit/servicedesk</a>
              </li>
            </ul>
          </div>
        </section>
      
      </div>
    </div>
   
  </section>

<?php
	# Include Footer
	include("includes/footer.php");
?>