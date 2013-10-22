<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Home";
	$sectionHeader = "Welcome to the Georgia Perimeter College backpack site!";
	$sectionSubHeader = "";
	# Include header
	include("includes/header.php"); 
?>

  <!-- <div id="owl-slider" class="owl-carousel owl-theme">
   
    <div class="item">
      <img src="/assets/img/slider/header_image2b.jpg" alt="Welcome to your Digital Backpack">
      <div class="container">
        <div class="carousel-caption">
          <h3>Welcome to your Digital Backpack</h3>
          <p><span>Use the backpack site below to guide you to online and on campus resources.</span></p>
        </div>
      </div>
    </div>
   
  </div> -->

  <figure class="fluidratio">
    <figcaption class="container">
      <strong class="headline">Prepare for Success.</strong>
      <p>
        <span>Use the backpack site below to guide you to online and on campus resources.</span>
      </p>
    </figcaption>
  </figure>
  
  <!-- Carousel
  ================================================== -->
  <!-- <div id="homeCarousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <img src="/assets/img/slider/bannerimage.png" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h3>Welcome to your Digital Backpack</h3>
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
        <div class="col-xs-4 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
            	<a href="/academic-success.php">
                <img src="assets/img/new_icons_3/academic_success.png" class="Absolute-Center is-Image" alt="">
                <h3 class="icon-title">Academic Success</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/campus-life.php">
                <img src="assets/img/new_icons_3/" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Campus Life</h3>
              </a>
            </div>
          </div>
         </div>
        <div class="col-xs-4 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/gpc-online-college.php">
                <img src="assets/img/new_icons_3/icollege.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">GPC Online Campus</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/military-outreach.php">
                <img src="assets/img/new_icons_3/military_outreach.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Military Outreach</h3>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Example row of columns -->
      <div class="icons row">
        <div class="col-xs-4 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/paying-for-college.php">
                <img src="assets/img/new_icons_3/paying_for_college.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Paying for College</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/safety-security.php">
                <img src="assets/img/new_icons_3/safety_security.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Safety & Security</h3>
              </a>
            </div>
          </div>
         </div>
        <div class="col-xs-4 bkpk-icons">
          <div class="icon-bg">
            <div class="Center-Container">
              <a href="/student-success.php">
                <img src="assets/img/new_icons_3/personal_success.png" class="Absolute-Center is-Image" alt="">
                 <h3 class="icon-title">Personal Success</h3>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xs-4 bkpk-icons">
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
        <p class="lead">Here you will find helpful GPC information organized into eight (8) main sections. Each section provides online and on campus resources such as direct web links, downloads, and videos to support your academic and personal success.</p>

        <p>Popular resources such as GPC Calendars, Frequently Asked Questions (FAQs), Login/Password Help, and Student Information System (SIS) links are provided below.</p>
        <p>Best wishes on a great semester.  Go Jaguars!</p>

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
                Discover how to start, study, and succeed in class.  Prepare for success by reviewing topics such as GPC’s Academic Calendar and Expectations, Department websites, Course Catalog, Programs of Study, Program Advisement Forms, English as a Second Language (ESL), and Honors Program.
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
                An engaged student is a more successful student.  Get involved and prepare for success by reviewing topics such as GPC Athletics, Campus Maps, Fine Arts, Health and Wellness, Student Clubs and Organizations, and the Collegian Newspaper.
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
                Earn your degree or take classes online.  Prepare for online success by reviewing topics such as GPC’s Online College, Departmental Contacts, Online Degrees, iCollege orientation, and How to Request Assistance.
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
                GPC helps and honors those who have served.  Prepare for success by reviewing topics such as GPC’s Military Outreach Center (MOC), MOC scholarships, and Veteran’s Affairs.
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
                Be aware and know your surroundings.  Prepare for success by reviewing topics such as GPC’s Public Safety, Jcard Office, JagAlert, Title IX, and Family Education Rights and Privacy Act (FERPA).
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
                Utilize the services and support available to you.  Prepare for success by reviewing topics such as Advising, Counseling and Retention Offices, Bookstores, Career Services, Disability Services, Enrollment and Registration Services, International Admissions and Advising, Learning Support, Learning and Tutoring Centers, Libraries, Personal Counseling, and Student Health Center.
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
                Tech help is as close as a call, e-mail, website, or JagSPOT.  Prepare for success by reviewing topics such as GPC’s Service Desk, JagSPOTS, GPC Login/Password assistance, Student Information System (SIS), Webmail, SkillSoft Online Learning, DegreeWorks and technical assistance.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                  Paying for College
                </a>
              </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
              <div class="panel-body">
                Know your financial aid and payment options.  Prepare for success by reviewing topics such as How to Apply for Financial Aid, Financial Aid Forms, Student Accounts, Tuition and Fees, Refund Information, and Student Scholarships.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

<?php
	# Include Footer
	include("includes/footer.php");
?>
