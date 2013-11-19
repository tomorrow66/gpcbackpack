<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc         = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle        = "Home";
	$sectionHeader    = "Welcome to the Georgia Perimeter College backpack site!";
	$sectionSubHeader = "";
	#Banner Images with captions
	$bannerImg1       = "img/banners/home_banner.jpg";
	$bannerHeader1    = "Prepare for Success.";
  $bannerSubHeader1 = "Use the backpack site below to guide you to online and on campus resources.";
  
	$bannerImg2       = "img/banners/home_banner2.jpg";
	$bannerHeader2    = "Prepare for Your Success.";
  $bannerSubHeader2 = "Use the backpack site below to guide you to online and on campus resources.";

	$bannerImg3       = "img/banners/home_banner3.jpg";
	$bannerHeader3    = "Preparing for Success.";
  $bannerSubHeader3   = "Use the backpack site below to guide you to online and on campus resources.";
  
	$bannerImg4       = "";
	$bannerHeader4    = "";
  $bannerSubHeader4   = "";
	# Include header
	include("includes/header.php"); 
?>

  <?php
    # Include Banner Slider
    include("includes/banner-slider.php");
  ?>

  <?php
    # Include Icon Nav
    include("includes/home-icon-nav.php");
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
        <p>Here you will find helpful GPC information organized into eight (8) main sections.  Each section provides online and on campus resources such as direct web links, downloads, and videos to support your academic and personal success.  Social Media and popular links such as FAQs, Login/Password Help, and Student Information System (SIS) are provided at the top of the page.</p> 
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
