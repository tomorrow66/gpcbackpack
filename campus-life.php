<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Campus Life";
	$sectionHeader = "Engaging you inside and outside the classroom.";
	$sectionSubHeader = "";
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
  
  <div class="icon-section-full">
    <div class="container">
      <!-- Example row of columns -->
      <div class="icons row">
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/academic-success.php">
                <img src="assets/img/new_icons_3/academic_success.png" class="Absolute-Center is-Image" alt="">
                <h3 class="icon-title">Academic Success</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/campus-life.php">
                <img src="assets/img/new_icons_3/" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Campus Life</h3>
              </a>
            </div>
          </div>
         </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/gpc-online-college.php">
                <img src="assets/img/new_icons_3/icollege.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">GPC Online Campus</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/military-outreach.php">
                <img src="assets/img/new_icons_3/military_outreach.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Military Outreach</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/paying-for-college.php">
                <img src="assets/img/new_icons_3/paying_for_college.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Paying for College</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/safety-security.php">
                <img src="assets/img/new_icons_3/safety_security.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Safety & Security</h3>
              </a>
            </div>
          </div>
         </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/student-success.php">
                <img src="assets/img/new_icons_3/personal_success.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Personal Success</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 col-md-2 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/tech-tips.php">
                <img src="assets/img/new_icons_3/technology_tips.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Technology Tips</h3>
               </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

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
          <iframe src="//player.vimeo.com/video/<?php echo "$vimeoID";?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/70726792">GPC Infomercial draft 2.1 for team review</a> from <a href="http://vimeo.com/user1162080">Rick Lockridge</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
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