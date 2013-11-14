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
  #Banner Images with captions
	$bannerImg1       = "assets/img/slider/bannerimage.png";
	$bannerHeader1    = "Prepare for Success.";
  $bannerSubHeader1 = "Use the backpack site below to guide you to online and on campus resources.";
  
	$bannerImg2       = "assets/img/slider/bannerimage.png";
	$bannerHeader2    = "Prepare for Your Success.";
  $bannerSubHeader2 = "Use the backpack site below to guide you to online and on campus resources.";
  
	$bannerImg3       = "";
	$bannerImg3_H1    = "";
  $bannerImg3_Sub   = "";
  
	$bannerImg4       = "";
	$bannerImg1_H1    = "";
  $bannerImg1_Sub   = "";
  #Vimeo ID
  $vimeoID = "71264457";
	# Include header
	include("includes/header.php"); 
?>

  <figure class="fluidratio">
    <figcaption>
      <strong class="headline"><?php echo "$pageTitle";?></strong>
    </figcaption>
  </figure>
  
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
								<a href="http://www.gpc.edu/Facilities_and_Services/campuses.php3 
">Campus Maps and Locations</a>
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
								<a href="http://www.gpc.edu/jcard/#.UiY1J5jD_IU">JCard Home Page</a>
							</li>
							<li class="list-group-item">
								<a href="http://www.gpc.edu/jcard/frequently-asked-questions-0#.UiY2B5jD_IU">Frequently Asked Questions</a>
							</li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/jcard/jcard-policies-0#.UiY1upjD_IU">JCard Policies</a>
              </li>
              <li class="list-group-item">
                How to Accept JCard within SIS - <a href="/files/HowtoAcceptJcardinSIS.pdf" download="HowtoAcceptJcardinSIS.pdf">Download PDF</a>
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
                <a href="http://depts.gpc.edu/~gpcpd/">Home page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/jagalert/#.UiX_hZjD_IU">Emergency Information (JagAlert)</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/gpcmisconduct">Sexual Misconduct (Title IX) Information</a>
              </li>
              <li class="list-group-item">
                Sexual Misconduct (Title IX) brochure - <a href="/files/PublicSafety_SexualMisconductbrochure_PDF.pdf" download="PublicSafety_SexualMisconductbrochure_PDF.pdf">Download PDF</a>
              </li>
            </ul>
          </div>
        </section>
        
        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Enrollment and Registration Services</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcem/ferpa.htm">Family Education Rights and Privacy Act (FERPA)</a>
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