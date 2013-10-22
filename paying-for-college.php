<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Paying for College";
	$sectionHeader = "Knowing your financial aid and payment options.";
	$sectionSubHeader = "";
  $sectionDesc = "Know your financial aid and payment options.  Prepare for success by reviewing topics such as How to Apply for Financial Aid, Financial Aid Forms, Student Accounts, Tuition and Fees, Refund Information, and Student Scholarships.";
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
        
        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Financial Aid Office</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Home Page - <a href="http://depts.gpc.edu/~finaid/#.UidSspjD_IU">http://depts.gpc.edu/~finaid/#.UidSspjD_IU</a>
              </li>
              <li class="list-group-item">
                How to Apply for Financial Aid - <a href="http://depts.gpc.edu/~finaid/applying.htm#.UidTCpjD_IU">http://depts.gpc.edu/~finaid/applying.htm#.UidTCpjD_IU</a>
              </li>
              <li class="list-group-item">
                Free Application for Federal Student Aid (FAFSA) - <a href="http://www.fafsa.ed.gov/">http://www.fafsa.ed.gov/</a>
              </li>
              <li class="list-group-item">
                Check Your GPC Financial Aid Status - <a href="http://depts.gpc.edu/~finaid/checkstatus.htm#.UidS7JjD_IU">http://depts.gpc.edu/~finaid/checkstatus.htm#.UidS7JjD_IU</a>
              </li>
              <li class="list-group-item">
                GPC Financial Aid Forms - <a href="http://depts.gpc.edu/~finaid/printableforms.htm#.UidTcJjD_IU">http://depts.gpc.edu/~finaid/printableforms.htm#.UidTcJjD_IU</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Students Accounts Office</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Tuition and Fees - <a href="http://depts.gpc.edu/~gpcsacct/resources/tuition_and_fees.html">http://depts.gpc.edu/~gpcsacct/resources/tuition_and_fees.html</a>
              </li>
              <li class="list-group-item">
                Payment Options - <a href="http://depts.gpc.edu/~gpcsacct/resources/payment_information.html#.UidUNpjD_IU">http://depts.gpc.edu/~gpcsacct/resources/payment_information.html#.UidUNpjD_IU</a>
              </li>
              <li class="list-group-item">
                Nelnet Payment Plan (NBS) - <a href="http://paymentplan.gpc.edu/">http://paymentplan.gpc.edu/</a>
              </li>
              <li class="list-group-item">
                Refund Information - <a href="http://depts.gpc.edu/~gpcsacct/resources/refund_information.html">http://depts.gpc.edu/~gpcsacct/resources/refund_information.html</a>
              </li>
              <li class="list-group-item">
                Third Party Payments to Student Accounts - <a href="http://depts.gpc.edu/~gpcsacct/resources/sponsored_billing.html">http://depts.gpc.edu/~gpcsacct/resources/sponsored_billing.html</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">GPC Student Scholarships</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Home Page - <a href="http://depts.gpc.edu/Foundation/scholarships.htm">http://depts.gpc.edu/Foundation/scholarships.htm</a>
              </li>
              <li class="list-group-item">
                Frequently Asked Questions - <a href="">PDF Link Needed!</a>
              </li>
            </ul>
          </div>
        </section>

        <section class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Veterans Affairs</h3>
          </div>
          <div class="panel-body">
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">
                Home Page - <a href="http://depts.gpc.edu/~finaid/veterans.html#.UidVMpjD_IU">http://depts.gpc.edu/~finaid/veterans.html#.UidVMpjD_IU</a>
              </li>
              <li class="list-group-item">
                How to Apply - <a href="http://depts.gpc.edu/~finaid/howtoapplyveterans.html#.UidVYZjD_IU">http://depts.gpc.edu/~finaid/howtoapplyveterans.html#.UidVYZjD_IU</a>
              </li>
              <li class="list-group-item">
                Frequently Asked Questions - <a href="http://depts.gpc.edu/~finaid/2013-2014%20Printable%20Forms/1314%20VA%20Forms/VA%20FAQ's_1314._rev_2.pdf">http://depts.gpc.edu/~finaid/2013-2014%20Printable%20Forms/1314%20VA%20Forms/VA%20FAQ's_1314._rev_2.pdf</a>
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