<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Home";
	$sectionHeader = "GPC Backpack Site";
	$sectionSubHeader = "Preparing for success";
	# Include header
	include("includes/header.php"); 
?>
  
  <!-- Carousel
  ================================================== -->
  <div id="homeCarousel" class="carousel slide">
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
  </div><!-- /.carousel -->

  <div class="icon-section-full">
    <div class="container">
      <!-- Example row of columns -->
      <div class="icons row">
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
            	<img src="assets/img/icons/academic_success2.svg" class="Absolute-Center is-Image" alt="">
            	<div class="caption">Academic Success</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/campus_life2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Campus Life</div>
            </div>
          </div>
         </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/gpc_college_online2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">GPC Online - Campus</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/military_outreach2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Military Outreach</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="icons row">
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/paying_for_college2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Paying for College</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/safety_security2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Safety & Security</div>
            </div>
          </div>
         </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/student_success2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Student Success</div>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="icon-bg">
            <div class="Center-Container">
              <img src="assets/img/icons/tech_help2.svg" class="Absolute-Center is-Image" alt="">
              <div class="caption">Technology Tips</div>
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
        <div class="subtitle">Preparing for success</div>
      </div>
    </div>
    <!-- Example row of columns -->
    <div id="content" class="container">
      <div class="content">
        <p class="lead">Welcome to the Georgia Perimeter College backpack site! </p>
        <p>Here you will find helpful GPC information organized into eight (8) main sections. Each section provides online and on campus resources such as direct web links, downloads, and videos to support your academic and personal success.
      </p>

        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Academic Success
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  Campus Life
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  GPC Online/iCollege
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                  Military Outreach
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                  Safety & Security
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                  Personal Success
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                  Technology
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Paying for College
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>

        <p>Popular resources such as GPC Calendars, Frequently Asked Questions (FAQs), Login/Password Help, and Student Information System (SIS) links are provided below.</p>
        <p>Best wishes on a great semester.  Go Jaguars!</p>
      
      </div>
    </div>

  </section>

<?php
	# Include Footer
	include("includes/footer.php");
?>
