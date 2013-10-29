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

        <div class="sectionDesc">
          <p class="lead"><?php echo "$sectionDesc";?></p>
        </div>
        
        <section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Athletics</h3>
					</div>
					<div class="panel-body">
						Home Page - <a href="http://depts.gpc.edu/~athletic/#.UiY4cJjD_IU">http://depts.gpc.edu/~athletic/#.UiY4cJjD_IU</a>
					</div>
				</section>
      
      	<section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Campus Maps and Locations</h3>
					</div>
					<div class="panel-body">
						Campus Maps and Locations - <a href="http://www.gpc.edu/Facilities_and_Services/campuses.php3">http://www.gpc.edu/Facilities_and_Services/campuses.php3</a>
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
								Home Page - <a href="http://depts.gpc.edu/~clafa/ 
">http://depts.gpc.edu/~clafa/</a>
							</li>
							<li class="list-group-item">
								Event Calendar - <a href=" http://www.gpc.edu/calendar/index.htm?type=11117-fine_arts"> http://www.gpc.edu/calendar/index.htm?type=11117-fine_arts</a>
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
								Home Page - <a href="http://depts.gpc.edu/~gpchwr/#.UiY6wZjD_IU">http://depts.gpc.edu/~gpchwr/#.UiY6wZjD_IU </a>
							</li>
							<li class="list-group-item">
								Event Calendar - <a href="http://www.gpc.edu/calendar/index.htm?type=11117-fine_arts"> http://www.gpc.edu/calendar/index.htm?type=11117-fine_arts</a>
							</li>
              <li class="list-group-item">
                Wellness Events by Campus - <a href="http://depts.gpc.edu/~gpchwr/events.html#.UiY7OZjD_IV">http://depts.gpc.edu/~gpchwr/events.html#.UiY7OZjD_IV</a>
              </li>
              <li class="list-group-item">
                Facilities by Campus - <a href="http://depts.gpc.edu/~gpchwr/campusfacilitieshome.html#.UiY6-ZjD_IU">http://depts.gpc.edu/~gpchwr/campusfacilitieshome.html#.UiY6-ZjD_IU</a>
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
                Deans of Student Services - <a href="http://depts.gpc.edu/~gpcdeans/#.UiY4GZjD_IV">http://depts.gpc.edu/~gpcdeans/#.UiY4GZjD_IV</a>
              </li>
              <li class="list-group-item">
                GPC Student Handbook - <a href="http://globaldatebooksonline.com/flipbooks/georgiapc2012/">http://globaldatebooksonline.com/flipbooks/georgiapc2012/</a>
              </li>
              <li class="list-group-item">
                GPC Student Handbook - <a href="#">Download PDF</a>
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
                Student Life Home Page - <a href="http://depts.gpc.edu/~gpcslife/index.html#.UiYy4JjD_IU">http://depts.gpc.edu/~gpcslife/index.html#.UiYy4JjD_IU</a>
              </li>
              <li class="list-group-item">
                Campus Events Calendar - <a href="http://depts.gpc.edu/~gpcslife/campusevents.htm#.UiYzBpjD_IU">http://depts.gpc.edu/~gpcslife/campusevents.htm#.UiYzBpjD_IU</a>
              </li>
              <li class="list-group-item">
                Student Club and Organization Listing - <a href="http://depts.gpc.edu/~gpcslife/studentclubs.html#.UiYyuJjD_IV">http://depts.gpc.edu/~gpcslife/studentclubs.html#.UiYyuJjD_IV</a>
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