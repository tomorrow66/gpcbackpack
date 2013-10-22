<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Academic Success";
	$sectionHeader = "Discovering how to start, study, and succeed in class.";
	$sectionSubHeader = "";
  $sectionDesc = "Discover how to start, study, and succeed in class. Prepare for success by reviewing topics such as GPC’s Academic Calendar and Expectations, Department websites, Course Catalog, Programs of Study, Program Advisement Forms, English as a Second Language (ESL), and Honors Program.";
  $vimeoID = "70726792";
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

        <div class="sectionDesc">
          <p class="lead"><?php echo "$sectionDesc";?></p>
        </div>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Academic Calendar - <a href="http://www.gpc.edu/calendar/academic/">http://www.gpc.edu/calendar/academic/</a>
              </li>
              <li class="list-group-item">
                Academic Department Websites - <a href="http://www.gpc.edu/Academics/departments/">http://www.gpc.edu/Academics/departments/</a>
              </li>
              <li class="list-group-item">
                Course Catalog - <a href="http://www.gpc.edu/catalog/#.UidX7ZjD_IU">http://www.gpc.edu/catalog/#.UidX7ZjD_IU</a>
              </li>
              <li class="list-group-item">
                DegreeWorks Online Tool for Degree Completion - <a href="http://depts.gpc.edu/~acadaff/publications/DegreeWorks.htm">http://depts.gpc.edu/~acadaff/publications/DegreeWorks.htm</a>
              </li>
              <li class="list-group-item">
                English as a Second Language (ESL) Program - <a href="http://www.gpc.edu/esl/#.UidZy5jD_IU">http://www.gpc.edu/esl/#.UidZy5jD_IU</a>
              </li>
              <li class="list-group-item">
                ESL VIDEO: <a href="https://vimeo.com/70834491">https://vimeo.com/70834491</a>
              </li>
              <li class="list-group-item">
                GPC Educational Achievement Program (GEAP) VIDEO: <a href="https://vimeo.com/70508170">https://vimeo.com/70508170</a>
              </li>
              <li class="list-group-item">
                GPC Educational Achievement Program Home Page - <a href="http://depts2.gpc.edu/geap/#.UidjlZjD_IU">http://depts2.gpc.edu/geap/#.UidjlZjD_IU</a>
              </li>
              <li class="list-group-item">
                Honors Program - <a href="http://depts.gpc.edu/~gpchonp/">http://depts.gpc.edu/~gpchonp/</a>
              </li>
              <li class="list-group-item">
                Programs of Study - <a href="http://www.gpc.edu/programs/#.UidYC5jD_IU">http://www.gpc.edu/programs/#.UidYC5jD_IU</a>
              </li>
              <li class="list-group-item">
                Honors ProgramProgram Advisement Forms - <a href="http://www.gpc.edu/programs/Program-Advisement-Forms#.UidYM5jD_IU">http://www.gpc.edu/programs/Program-Advisement-Forms#.UidYM5jD_IU</a>
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