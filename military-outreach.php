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
  $vimeoID = "74936179";
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
                FAQs for VA Financial Aid - <a href="/files/MOC_VA_Financial_Aid_FAQ.pdf" download="MOC_VA_Financial_Aid_FAQ.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                FAQs for Military Students and Veterans - <a href="/files/MOC_FAQ_Military_Veteran_Students.pdf" download="MOC_FAQ_Military_Veteran_Students.pdf">Download PDF</a>
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