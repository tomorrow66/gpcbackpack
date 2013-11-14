<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Campus Life";
	$sectionHeader = "Engaging you inside and outside the classroom.";
	$sectionSubHeader = "";
  $sectionDesc = "An engaged student is a more successful student.  Get involved and prepare for success by reviewing topics such as GPC Athletics, Campus Maps, Fine Arts, Health and Wellness, Student Clubs and Organizations, and the Collegian Newspaper.";
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
        
        <div class="videoWrapper">
          <iframe src="//player.vimeo.com/video/<?php echo "$vimeoID";?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        
        <section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Athletics</h3>
					</div>
					<div class="panel-body">
						<a href="http://depts.gpc.edu/~athletic/#.UiY4cJjD_IU">Home Page</a>
					</div>
				</section>
      
      	<section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Campus Maps and Locations</h3>
					</div>
					<div class="panel-body">
						<a href="http://www.gpc.edu/Facilities_and_Services/campuses.php3">Campus Maps and Locations</a>
					</div>
				</section>
      
      	<section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Fine Arts</h3>
					</div>
					<div class="panel-body">
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item">
								<a href="http://depts.gpc.edu/~clafa/ 
">Home Page</a>
							</li>
							<li class="list-group-item">
								<a href=" http://www.gpc.edu/calendar/index.htm?type=11117-fine_arts">Event Calendar</a>
							</li>
						</ul>
					</div>
				</section>
      
      	<section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Health and Wellness</h3>
					</div>
					<div class="panel-body">
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item">
								<a href="http://depts.gpc.edu/~gpchwr/#.UiY6wZjD_IU">Home Page</a>
							</li>
							<li class="list-group-item">
								<a href="http://www.gpc.edu/calendar/index.htm?type=11117-fine_arts">Event Calendar</a>
							</li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpchwr/events.html#.UiY7OZjD_IV">Wellness Events by Campus</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpchwr/campusfacilitieshome.html#.UiY6-ZjD_IU">Facilities by Campus</a>
              </li>
						</ul>
					</div>
				</section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Student Affairs</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcdeans/#.UiY4GZjD_IV">Deans of Student Services</a>
              </li>
              <li class="list-group-item">
                <a href="http://globaldatebooksonline.com/flipbooks/georgiapc2012/">GPC Student Handbook</a>
              </li>
              <li class="list-group-item">
                GPC Student Handbook - <a href="/files/StudentAffairs_studenthandbook.pdf" download="StudentAffairs_studenthandbook.pdf">Download PDF</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Student Life</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcslife/index.html#.UiYy4JjD_IU">Student Life Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcslife/campusevents.htm#.UiYzBpjD_IU">Campus Events Calendar</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcslife/studentclubs.html#.UiYyuJjD_IV">Student Club and Organization Listing</a>
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