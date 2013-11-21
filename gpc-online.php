<?php
	# Website description (SEO)
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "GPC Online";
	$sectionHeader = "Earning your degree or taking classes online.";
  $sectionDesc = "Earn your degree or take classes online. Prepare for online success by reviewing topics such as GPC’s Online College, Departmental Contacts, Online Degrees, iCollege orientation, and How to Request Assistance.";
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
                <a href="http://eapps.gpc.edu/askgpc/index.php?category_search=25&search_text">Ask GPC Online</a>
              </li>
              <li class="list-group-item">
                <a href="https://gpc.view.usg.edu/">iCollege Orientation</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/online/content/currentstudents/online-student-success-team#.UidcVJjD_IU">Current Online Students</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/online/content/currentstudents/welcome-gpc-online#.UidcB5jD_IU">First-time Student taking Online Classes</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/online/#.Uida3JjD_IU">GPC Online Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/online/content/gpc-online-programs#.Uida-5jD_IU">Online Degrees Listing</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/online/content/request-assistance#.UidbS5jD_IU">Request Assistance</a>
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