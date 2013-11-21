<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Academic Success";
	$sectionHeader = "Discovering how to start, study, and succeed in class.";
  $sectionDesc = "Discover how to start, study, and succeed in class. Prepare for success by reviewing topics such as GPC’s Academic Calendar and Expectations, Department websites, Course Catalog, Programs of Study, Program Advisement Forms, English as a Second Language (ESL), and Honors Program.";
  #Vimeo ID
  $vimeoID = "70726792";
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
                <a href="http://www.gpc.edu/calendar/academic/">Academic Calendar</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/Academics/departments/">Academic Department Websites</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/catalog/#.UidX7ZjD_IU">Course Catalog</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~acadaff/publications/DegreeWorks.htm">DegreeWorks Online Tool for Degree Completion</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/esl/#.UidZy5jD_IU">English as a Second Language (ESL) Program</a>
              </li>
              <li class="list-group-item">
                <a href="https://vimeo.com/70834491">ESL VIDEO</a>
              </li>
              <li class="list-group-item">
                <a href="https://vimeo.com/70508170">GPC Educational Achievement Program (GEAP) VIDEO</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/geap/#.UidjlZjD_IU">GPC Educational Achievement Program Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpchonp/">Honors Program</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/programs/#.UidYC5jD_IU">Programs of Study</a>
              </li>
              <li class="list-group-item">
                 <a href="http://www.gpc.edu/programs/Program-Advisement-Forms#.UidYM5jD_IU">Program Advisement Forms</a>
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