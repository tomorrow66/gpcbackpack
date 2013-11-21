<?php
	# Website description (SEO)
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Military Outreach";
	$sectionHeader = "Helping and honoring those who have served.";
  $sectionDesc = "GPC helps and honors those who have served.  Prepare for success by reviewing topics such as GPC’s Military Outreach Center (MOC), MOC scholarships, and Veteran’s Affairs.";
  #Vimeo ID
  $vimeoID = "70487586";
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
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/militaryoutreach/#.UidcjZjD_IU">Military Outreach Center (MOC) Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/militaryoutreach/MOC%20Scholarships%20rvsd%20july2013.pdf">MOC Scholarships</a>
              </li>
              <li class="list-group-item">
                <a href="https://vimeo.com/70487586">MOC VIDEO</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~finaid/veterans.html#.Uidc3ZjD_IU">GPC Veterans Affairs Office</a>
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