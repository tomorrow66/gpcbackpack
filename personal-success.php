<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Personal Success";
	$sectionHeader = "Utilizing the services and support available to you.";
	$sectionSubHeader = "";
  $sectionDesc = "Utilize the services and support available to you.  Prepare for success by reviewing topics such as Advising, Counseling and Retention Offices, Bookstores, Career Services, Disability Services, Enrollment and Registration Services, International Admissions and Advising, Learning Support, Learning and Tutoring Centers, Libraries, Personal Counseling, and Student Health Center.";
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
  $vimeoID = "72978117";
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
            <h3 class="panel-title">Advising, Counseling and Retention Services (ACRS) Office</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://www.howtostudy.org/">How to Study Help</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.youtube.com/watch?v=xsAZ0Uw8rGg&list=UUCC6T8dqGp-VsC07FkaMcFw&index=3">How to read a GPC Program Advisement Form - Video</a>
              </li>
              <li class="list-group-item">
                Next Steps flyer for students taking ONLINE ONLY classes - <a href="/files/StudentSuccess_ACRS_NextStepsFlyerforOnlineStudents_PDF.pdf" download="StudentSuccess_ACRS_NextStepsFlyerforOnlineStudents_PDF.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                Transfer Admission Guarantee (TAG) Information
                <ul>
                  <li>
                    <a href="http://depts.gpc.edu/tag/">Home page</a>
                  </li>
                  <li>
                    <a href="http://depts.gpc.edu/tag/schoolstochoosefrom.html#.UiX_-5jD_IU">Schools to Choose from</a>
                  </li>
                  <li>
                    <a href="http://depts.gpc.edu/tag/frequentlyaskedquestions.htm">FAQ’s</a>
                  </li>
                </ul>
              </li>
              <li class="list-group-item">
                How to register for classes in the Student Information System (SIS) - <a href="/files/SIS-Registration Instructions.pdf" download="SIS-Registration Instructions.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                How to Build a Class Schedule Worksheet - <a href="/files/HowtoBuildaClassScheduleWorksheet.pdf" download="HowtoBuildaClassScheduleWorksheet.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                <a href="https://eapps.gpc.edu/swf/main_s.php">Student Course Withdrawal Request</a>
              </li>
              <li class="list-group-item">
                <a href="https://sis.gpc.edu/PROD/bwckschd.p_disp_dyn_sched">GPC Class Schedule Listing</a>
              </li>
              <li class="list-group-item">
                <a href="https://sis.gpc.edu/PROD/wwtraneq.P_TranEq_Ltr">Transfer Course Listing by Institution</a>
              </li>
              <li class="list-group-item">
                DegreeWorks – web-based tool that enables students to monitor their progress toward degree completion
                <ul>
                  <li>
                    <a href="http://depts.gpc.edu/~acadaff/publications/DegreeWorksFAQv3.htm">FAQs</a>
                  </li>
                  <li>
                    <a href="http://depts.gpc.edu/~acadaff/publications/DegreeWorks.htm">Video Tutorials</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </section>
      
      	<section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Bookstores @ GPC</h3>
					</div>
					<div class="panel-body">
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item">
								<a href="http://www.gpc.edu/collegeservices/bookstore#.UiYONpjD_IU">GPC Bookstore Home Page</a>
							</li>
							<li class="list-group-item">
								<a href="http://www.gpc.edu/collegeservices/faq#.UiYOnJjD_IU">Bookstore Frequently Asked Questions (FAQs)</a>
							</li>
						</ul>
					</div>
				</section>
      
      	<section class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Career Services</h3>
					</div>
					<div class="panel-body">
						<!-- List group -->
						<ul class="list-group">
							<li class="list-group-item">
								<a href="http://www.bls.gov/ooh/">US Department of Labor, Job Outlook Handbook</a>
							</li>
							<li class="list-group-item">
								<a href="http://www.gcic.peachnet.edu/">Georgia Career Information System (GCIS)</a>
							</li>
              <li class="list-group-item">
                <a href="http://www.onetonline.org/">ONET Career Exploration Tool</a>
              </li>
						</ul>
					</div>
				</section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Disability Services</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/cds/">Disability Services Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/cds/faq.htm">Frequently Asked Questions</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/cds/transition.htm">Student Guide to Disability Services</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Enrollment and Registration Services (ERS) Offices</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcslife/index.html#.UiYy4JjD_IU">ERS Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/catalog/#.UiYdyZjD_IU">GPC Catalog</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcem/ferpa.htm">Family Education Rights and Privacy Act (FERPA)</a>
              </li>
              <li class="list-group-item">
                GPC Acceptance of Transfer Credit Policy - <a href="/files/GPCAcceptanceofTransferCreditPolicy.pdf" download="GPCAcceptanceofTransferCreditPolicy.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcem/registrar/ap_scores.html#.UiYYqJjD_IU">Advanced Placement (AP) Transfer Credit</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcem/registrar/ib_scores.html#.UiYYw5jD_IU">International Baccalaureate (IB) Transfer Credit</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcem/registrar/clep_scores.html#.UiYYtpjD_IU">College Level Examination Program (CLEP) Transfer Credit</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/Request/">Enrollment and Registration Forms</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcem/registrar/howtowithdraw.html#.UiYZqpjD_IU">How to Submit a Course Withdrawal Request</a>
              </li>
              <li class="list-group-item">
                GPC Grade Change Policy - <a href="/files/GPCGradeChangePolicy.pdf" download="GPCGradeChangePolicy.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/catalog/tuition-classification">GPC Tuition Classification Policy</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">International Admissions and Advising (ISAA)</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcisaa/#.UiYT5JjD_IU">ISAA Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcisaa/F1students.htm">Information for F-1 Students</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts2.gpc.edu/~gpcisaa/newarrival.htm">Information for New Arrivals to the US</a>
              </li>
              <li class="list-group-item">
                International Student Manual - <a href="/files/USG_International_Student_Manual.pdf" download="USG_International_Student_Manual.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.gpc.edu/esl/#.UidZy5jD_IU">English as a Second Language (ESL) Program</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Learning Support (LS) Program</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://lsupport.gpc.edu/">Learning Support Home Page</a>
              </li>
              <li class="list-group-item">
                Learning Support Brochure - <a href="/files/LS_Brochure.pdf" download="LS_Brochure.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                Learning Support Policy Guide - <a href="/files/LS_Manual.pdf" download="LS_Manual.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                <a href="https://vimeo.com/70566687">Learning Support VIDEO</a>
              </li>
              <li class="list-group-item">
                Strategies for Success in Learning Support - <a href="/files/Strategies_for_Success.pdf" download="Strategies_for_Success.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                Allowable College-Level Courses LS Students May Take - <a href="/files/LSAllowable_College_Courses.pdf" download="LSAllowable_College_Courses.pdf">Download PDF</a>
              </li>
              <li class="list-group-item">
                Educational Option(s) for Students On or Near LS Suspension - <a href="/files/LSOptionsforStudentsOnorNearLSSuspension.pdf" download="LSOptionsforStudentsOnorNearLSSuspension.pdf">Download PDF</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Learning and Tutoring Centers (LTC) @ GPC</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcltc/#.UiYeHJjD_IU">LTC Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcltc/schedules.htm#.UiYem5jD_IU">LTC Tutoring Schedule by Campus</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcltc/faq.htm#.UiYee5jD_IU">LTC Frequently Asked Questions</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Libraries @ GPC</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/library/#.UidYlZjD_IU">Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/library/howto.htm#.UidYv5jD_IU">How to Use the Library</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/library/ask.htm#.UidZMpjD_IV">Ask a Librarian</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Personal Counseling Services</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://advising.gpc.edu/personalcounseling.htm">Personal Counseling Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://personalcounseling.gpc.edu/virtualresources.htm#.UiYoTJjD_IU">Online Resources for Students</a>
              </li>
              <li class="list-group-item">
                <a href="http://personalcounseling.gpc.edu/frequentlyaskedquestions.htm#.UiYocZjD_IU">Frequently Asked Questions</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Student Health Center (SHC)</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcshc/#.UiYpDZjD_IU">SHC Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcshc/Student%20Health%20Center%20Clinic%20Fees%20rvsd%20Aug2013i.html">SHC Clinic Fees</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcshc/shcforms.htm#.UiYpxJjD_IU">SHC Forms</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcshc/2013-2328-1%20UHC%20Brochure-v%201.pdf">Student Brochure of United Health Care</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.usg.edu/student_affairs/students/frequently_asked_questions">Frequently Asked Questions</a>
              </li>
              <li class="list-group-item">
                <a href="https://vimeo.com/72978117">VIDEO – Student Quest</a>
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