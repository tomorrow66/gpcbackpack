<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "GPC Online";
	$sectionHeader = "Earning your degree or taking classes online.";
	$sectionSubHeader = "";
  $sectionDesc = "Earn your degree or take classes online. Prepare for online success by reviewing topics such as GPC’s Online College, Departmental Contacts, Online Degrees, iCollege orientation, and How to Request Assistance.";
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
                Ask GPC Online - <a href="http://eapps.gpc.edu/askgpc/index.php?category_search=25&search_text">http://eapps.gpc.edu/askgpc/index.php?category_search=25&search_text</a>
              </li>
              <li class="list-group-item">
                Current Online Students - <a href="http://www.gpc.edu/online/content/currentstudents/online-student-success-team#.UidcVJjD_IU">http://www.gpc.edu/online/content/currentstudents/online-student-success-team#.UidcVJjD_IU</a>
              </li>
              <li class="list-group-item">
                First-time Student taking Online Classes - <a href="http://www.gpc.edu/online/content/currentstudents/welcome-gpc-online#.UidcB5jD_IU">http://www.gpc.edu/online/content/currentstudents/welcome-gpc-online#.UidcB5jD_IU</a>
              </li>
              <li class="list-group-item">
                GPC Online Home Page - <a href="http://www.gpc.edu/online/#.Uida3JjD_IU">http://www.gpc.edu/online/#.Uida3JjD_IU</a>
              </li>
              <li class="list-group-item">
                Online Degrees Listing - <a href="http://www.gpc.edu/online/content/gpc-online-programs#.Uida-5jD_IU">http://www.gpc.edu/online/content/gpc-online-programs#.Uida-5jD_IU</a>
              </li>
              <li class="list-group-item">
                Request Assistance - <a href="http://www.gpc.edu/online/content/request-assistance#.UidbS5jD_IU">http://www.gpc.edu/online/content/request-assistance#.UidbS5jD_IU</a>
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