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
                How to Study Help - <a href="http://www.howtostudy.org/">http://www.howtostudy.org/</a>
              </li>
              <li class="list-group-item">
                How to read a GPC Program Advisement Form - <a href="http://www.youtube.com/watch?v=xsAZ0Uw8rGg&list=UUCC6T8dqGp-VsC07FkaMcFw&index=3">Video</a>
              </li>
              <li class="list-group-item">
                Next Steps flyer for students taking ONLINE ONLY classes - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                Transfer Admission Guarantee (TAG) Information
                <ul>
                  <li>
                    Home page - <a href="http://depts.gpc.edu/tag/ 
">http://depts.gpc.edu/tag/</a>
                  </li>
                  <li>
                    Schools to Choose from - <a href="http://depts.gpc.edu/tag/schoolstochoosefrom.html#.UiX_-5jD_IU">http://depts.gpc.edu/tag/schoolstochoosefrom.html#.UiX_-5jD_IU</a>
                  </li>
                  <li>
                    FAQ’s: - <a href="http://depts.gpc.edu/tag/frequentlyaskedquestions.htm">http://depts.gpc.edu/tag/frequentlyaskedquestions.htm</a>
                  </li>
                </ul>
              </li>
              <li class="list-group-item">
                How to register for classes in the Student Information System (SIS) - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                How to Build a Class Schedule Worksheet - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                Student Course Withdrawal Request - <a href="https://eapps.gpc.edu/swf/main_s.php">https://eapps.gpc.edu/swf/main_s.php</a>
              </li>
              <li class="list-group-item">
                GPC Class Schedule Listing - <a href="https://sis.gpc.edu/PROD/bwckschd.p_disp_dyn_sched">https://sis.gpc.edu/PROD/bwckschd.p_disp_dyn_sched</a>
              </li>
              <li class="list-group-item">
                Transfer College Admissions Checklist - <a href="">PDF Link Needed!</a>
              </li>
              <li class="list-group-item">
                Transfer Course Listing by Institution - <a href="https://sis.gpc.edu/PROD/wwtraneq.P_TranEq_Ltr">https://sis.gpc.edu/PROD/wwtraneq.P_TranEq_Ltr</a>
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
								GPC Bookstore Home Page - <a href="http://www.gpc.edu/collegeservices/bookstore#.UiYONpjD_IU">http://www.gpc.edu/collegeservices/bookstore#.UiYONpjD_IU</a>
							</li>
							<li class="list-group-item">
								Bookstore Frequently Asked Questions (FAQs) - <a href="http://www.gpc.edu/collegeservices/faq#.UiYOnJjD_IU"> http://www.gpc.edu/collegeservices/faq#.UiYOnJjD_IU</a>
							</li>
              <li class="list-group-item">
                Student Guide to Disability Services - <a href="http://depts.gpc.edu/cds/transition.htm"> http://depts.gpc.edu/cds/transition.htm</a>
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
								US Department of Labor, Job Outlook Handbook - <a href="http://www.bls.gov/ooh/">http://www.bls.gov/ooh/ </a>
							</li>
							<li class="list-group-item">
								Georgia Career Information System (GCIS) - <a href="http://www.gcic.peachnet.edu/"> http://www.gcic.peachnet.edu/</a>
							</li>
              <li class="list-group-item">
                ONET Career Exploration Tool - <a href="http://www.onetonline.org/">http://www.onetonline.org/</a>
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
                Disability Services Home Page - <a href="http://depts.gpc.edu/cds/">http://depts.gpc.edu/cds/</a>
              </li>
              <li class="list-group-item">
                Frequently Asked Questions - <a href="http://depts.gpc.edu/cds/faq.htm">http://depts.gpc.edu/cds/faq.htm</a>
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
                ERS Home Page - <a href="http://depts.gpc.edu/~gpcslife/index.html#.UiYy4JjD_IU">http://depts.gpc.edu/~gpcslife/index.html#.UiYy4JjD_IU</a>
              </li>
              <li class="list-group-item">
                GPC Catalog - <a href="http://www.gpc.edu/catalog/#.UiYdyZjD_IU">http://www.gpc.edu/catalog/#.UiYdyZjD_IU</a>
              </li>
              <li class="list-group-item">
                Family Education Rights and Privacy Act (FERPA) - <a href="http://depts2.gpc.edu/~gpcem/ferpa.htm">http://depts2.gpc.edu/~gpcem/ferpa.htm</a>
              </li>
              <li class="list-group-item">
                GPC Acceptance of Transfer Credit Policy - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                Advanced Placement (AP) Transfer Credit - <a href="http://depts2.gpc.edu/~gpcem/registrar/ap_scores.html#.UiYYqJjD_IU">http://depts2.gpc.edu/~gpcem/registrar/ap_scores.html#.UiYYqJjD_IU</a>
              </li>
              <li class="list-group-item">
                International Baccalaureate (IB) Transfer Credit - <a href="http://depts2.gpc.edu/~gpcem/registrar/ib_scores.html#.UiYYw5jD_IU">http://depts2.gpc.edu/~gpcem/registrar/ib_scores.html#.UiYYw5jD_IU</a>
              </li>
              <li class="list-group-item">
                College Level Examination Program (CLEP) Transfer Credit - <a href="http://depts2.gpc.edu/~gpcem/registrar/clep_scores.html#.UiYYtpjD_IU">http://depts2.gpc.edu/~gpcem/registrar/clep_scores.html#.UiYYtpjD_IU</a>
              </li>
              <li class="list-group-item">
                Enrollment and Registration Forms - <a href="http://www.gpc.edu/Request/">http://www.gpc.edu/Request/</a>
              </li>
              <li class="list-group-item">
                How to Submit a Course Withdrawal Request - <a href="http://depts2.gpc.edu/~gpcem/registrar/howtowithdraw.html#.UiYZqpjD_IU">http://depts2.gpc.edu/~gpcem/registrar/howtowithdraw.html#.UiYZqpjD_IU</a>
              </li>
              <li class="list-group-item">
                GPC Grade Change Policy - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                GPC Tuition Classification Policy - <a href="http://www.gpc.edu/catalog/tuition-classification">http://www.gpc.edu/catalog/tuition-classification</a>
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
                ISAA Home Page - <a href="http://depts2.gpc.edu/~gpcisaa/#.UiYT5JjD_IU">http://depts2.gpc.edu/~gpcisaa/#.UiYT5JjD_IU </a>
              </li>
              <li class="list-group-item">
                Information for F-1 Students - <a href="http://depts2.gpc.edu/~gpcisaa/F1students.htm"> http://depts2.gpc.edu/~gpcisaa/F1students.htm</a>
              </li>
              <li class="list-group-item">
                Information for New Arrivals to the US - <a href="http://depts2.gpc.edu/~gpcisaa/newarrival.htm">http://depts2.gpc.edu/~gpcisaa/newarrival.htm</a>
              </li>
              <li class="list-group-item">
                International Student Manual - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                English as a Second Language (ESL) Program - <a href="http://www.gpc.edu/esl/#.UidZy5jD_IU">http://www.gpc.edu/esl/#.UidZy5jD_IU</a>
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
                Learning Support Home Page - <a href="http://lsupport.gpc.edu/">http://lsupport.gpc.edu/ </a>
              </li>
              <li class="list-group-item">
                Learning Support Brochure - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                Learning Support Policy Guide - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                Learning Support VIDEO: <a href="https://vimeo.com/70566687"> https://vimeo.com/70566687</a>
              </li>
              <li class="list-group-item">
                Strategies for Success in Learning Support - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                Allowable College-Level Courses LS Students May Take - <a href="">PDF</a>
              </li>
              <li class="list-group-item">
                Educational Option(s) for Students On or Near LS Suspension - <a href="">PDF</a>
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
                LTC Home Page - <a href="http://depts.gpc.edu/~gpcltc/#.UiYeHJjD_IU">http://depts.gpc.edu/~gpcltc/#.UiYeHJjD_IU</a>
              </li>
              <li class="list-group-item">
                LTC Tutoring Schedule by Campus - <a href="http://depts.gpc.edu/~gpcltc/schedules.htm#.UiYem5jD_IU">http://depts.gpc.edu/~gpcltc/schedules.htm#.UiYem5jD_IU</a>
              </li>
              <li class="list-group-item">
                LTC Frequently Asked Questions - <a href="http://depts.gpc.edu/~gpcltc/faq.htm#.UiYee5jD_IU">http://depts.gpc.edu/~gpcltc/faq.htm#.UiYee5jD_IU</a>
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
                Home Page - <a href="http://depts.gpc.edu/library/#.UidYlZjD_IU">http://depts.gpc.edu/library/#.UidYlZjD_IU</a>
              </li>
              <li class="list-group-item">
                How to Use the Library - <a href="http://depts.gpc.edu/library/howto.htm#.UidYv5jD_IU">http://depts.gpc.edu/library/howto.htm#.UidYv5jD_IU</a>
              </li>
              <li class="list-group-item">
                Ask a Librarian - <a href="http://depts.gpc.edu/library/ask.htm#.UidZMpjD_IV">http://depts.gpc.edu/library/ask.htm#.UidZMpjD_IV</a>
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
                Personal Counseling Home Page - <a href="http://advising.gpc.edu/personalcounseling.htm">http://advising.gpc.edu/personalcounseling.htm</a>
              </li>
              <li class="list-group-item">
                Online Resources for Students - <a href="http://personalcounseling.gpc.edu/virtualresources.htm#.UiYoTJjD_IU">http://personalcounseling.gpc.edu/virtualresources.htm#.UiYoTJjD_IU</a>
              </li>
              <li class="list-group-item">
                Frequently Asked Questions - <a href="http://personalcounseling.gpc.edu/frequentlyaskedquestions.htm#.UiYocZjD_IU">http://personalcounseling.gpc.edu/frequentlyaskedquestions.htm#.UiYocZjD_IU</a>
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
                SHC Home Page - <a href="http://depts.gpc.edu/~gpcshc/#.UiYpDZjD_IU">http://depts.gpc.edu/~gpcshc/#.UiYpDZjD_IU</a>
              </li>
              <li class="list-group-item">
                SHC Clinic Fees - <a href="http://depts.gpc.edu/~gpcshc/Student%20Health%20Center%20Clinic%20Fees%20rvsd%20Aug2013i.html">http://depts.gpc.edu/~gpcshc/Student%20Health%20Center%20Clinic%20Fees%20rvsd%20Aug2013i.html</a>
              </li>
              <li class="list-group-item">
                SHC Forms - <a href="http://depts.gpc.edu/~gpcshc/shcforms.htm#.UiYpxJjD_IU">http://depts.gpc.edu/~gpcshc/shcforms.htm#.UiYpxJjD_IU</a>
              </li>
              <li class="list-group-item">
                Student Brochure of United Health Care - <a href="http://depts.gpc.edu/~gpcshc/2013-2328-1%20UHC%20Brochure-v%201.pdf">http://depts.gpc.edu/~gpcshc/2013-2328-1%20UHC%20Brochure-v%201.pdf</a>
              </li>
              <li class="list-group-item">
                Frequently Asked Questions - <a href="http://www.usg.edu/student_affairs/students/frequently_asked_questions">http://www.usg.edu/student_affairs/students/frequently_asked_questions</a>
              </li>
              <li class="list-group-item">
                VIDEO – Student Quest - <a href="https://vimeo.com/72978117">https://vimeo.com/72978117</a>
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