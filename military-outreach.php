<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Military Outreach";
	$sectionHeader = "Helping and honoring those who have served.";
	$sectionSubHeader = "";
  $sectionDesc = "GPC helps and honors those who have served.  Prepare for success by reviewing topics such as GPC’s Military Outreach Center (MOC), MOC scholarships, and Veteran’s Affairs.";
  $vimeoID = "74936179";
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
        
        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Military Outreach Center (MOC) Home Page - <a href="http://depts.gpc.edu/militaryoutreach/#.UidcjZjD_IU">http://depts.gpc.edu/militaryoutreach/#.UidcjZjD_IU</a>
              </li>
              <li class="list-group-item">
                MOC Scholarships - <a href="http://depts.gpc.edu/militaryoutreach/MOC%20Scholarships%20rvsd%20july2013.pdf">http://depts.gpc.edu/militaryoutreach/MOC%20Scholarships%20rvsd%20july2013.pdf</a>
              </li>
              <li class="list-group-item">
                MOC VIDEO: <a href="https://vimeo.com/70487586">https://vimeo.com/70487586</a>
              </li>
              <li class="list-group-item">
                GPC Veterans Affairs Office - <a href="http://depts.gpc.edu/~finaid/veterans.html#.Uidc3ZjD_IU">http://depts.gpc.edu/~finaid/veterans.html#.Uidc3ZjD_IU</a>
              </li>
              <li class="list-group-item">
                FAQs for Military Students and Veterans - <a href="">PDF Link Needed!</a>
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