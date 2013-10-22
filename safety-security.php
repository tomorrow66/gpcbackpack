<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Safety & Security";
	$sectionHeader = "Being aware and knowing your surroundings.";
	$sectionSubHeader = "";
  $sectionDesc = "Be aware and know your surroundings.  Prepare for success by reviewing topics such as GPC’s Public Safety, Jcard Office, JagAlert, Title IX, and Family Education Rights and Privacy Act (FERPA).";
  $vimeoID = "71264457";
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
						<h3 class="panel-title">Campus Maps and Locations</h3>
					</div>
					<div class="panel-body">
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item">
								Campus Maps and Locations - <a href="http://www.gpc.edu/Facilities_and_Services/campuses.php3 
">http://www.gpc.edu/Facilities_and_Services/campuses.php3</a>
							</li>
						</ul>
					</div>
        </section>
      
      	<section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">JCard Office</h3>
					</div>
					<div class="panel-body">
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item">
								JCard Home Page - <a href="http://www.gpc.edu/jcard/#.UiY1J5jD_IU">http://www.gpc.edu/jcard/#.UiY1J5jD_IU</a>
							</li>
							<li class="list-group-item">
								Frequently Asked Questions - <a href="http://www.gpc.edu/jcard/frequently-asked-questions-0#.UiY2B5jD_IU"> http://www.gpc.edu/jcard/frequently-asked-questions-0#.UiY2B5jD_IU</a>
							</li>
              <li class="list-group-item">
                JCard Policies - <a href="http://www.gpc.edu/jcard/jcard-policies-0#.UiY1upjD_IU">http://www.gpc.edu/jcard/jcard-policies-0#.UiY1upjD_IU</a>
              </li>
              <li class="list-group-item">
                How to Accept JCard within SIS - <a href="">PDF Link Needed!</a>
              </li>
						</ul>
					</div>
				</section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Public Safety</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Home page - <a href="http://depts.gpc.edu/~gpcpd/">http://depts.gpc.edu/~gpcpd/</a>
              </li>
              <li class="list-group-item">
                Emergency Information (JagAlert) - <a href="http://depts.gpc.edu/jagalert/#.UiX_hZjD_IU">http://depts.gpc.edu/jagalert/#.UiX_hZjD_IU</a>
              </li>
              <li class="list-group-item">
                Sexual Misconduct (Title IX) Information - <a href="http://depts.gpc.edu/gpcmisconduct">http://depts.gpc.edu/gpcmisconduct</a>
              </li>
              <li class="list-group-item">
                Sexual Misconduct (Title IX) brochure - <a href="#">PDF Link Needed!</a>
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