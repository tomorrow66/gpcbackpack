<?php
	# The name of your company, website etc.
	#$siteTitle = "Georgia Perimeter College";
	# Website description
	$pageDesc  = "Georgia Perimeter College";
	# Page title eg. homepage, blog etc.
	$pageTitle = "Paying for College";
	$sectionHeader = "Knowing your financial aid and payment options.";
  $sectionDesc = "Know your financial aid and payment options.  Prepare for success by reviewing topics such as How to Apply for Financial Aid, Financial Aid Forms, Student Accounts, Tuition and Fees, Refund Information, and Student Scholarships.";
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
                <a href="http://depts.gpc.edu/~finaid/#.UidSspjD_IU">Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~finaid/applying.htm#.UidTCpjD_IU">How to Apply for Financial Aid</a>
              </li>
              <li class="list-group-item">
                <a href="http://www.fafsa.ed.gov/">Free Application for Federal Student Aid (FAFSA)</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~finaid/checkstatus.htm#.UidS7JjD_IU">Check Your GPC Financial Aid Status</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~finaid/printableforms.htm#.UidTcJjD_IU">GPC Financial Aid Forms</a>
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
                <a href="http://depts.gpc.edu/~gpcsacct/resources/tuition_and_fees.html">Tuition and Fees</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcsacct/resources/payment_information.html#.UidUNpjD_IU">Payment Options</a>
              </li>
              <li class="list-group-item">
                <a href="http://paymentplan.gpc.edu/">Nelnet Payment Plan (NBS)</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcsacct/resources/refund_information.html">Refund Information</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~gpcsacct/resources/sponsored_billing.html">Third Party Payments to Student Accounts</a>
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
                <a href="http://depts.gpc.edu/Foundation/scholarships.htm">Home Page</a>
              </li>
              <li class="list-group-item">
                Frequently Asked Questions - <a href="/files/StudentScholarships_FAQs_PDF.pdf" download="StudentScholarships_FAQs_PDF.pdf"> Download PDF</a>
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
                <a href="http://depts.gpc.edu/~finaid/veterans.html#.UidVMpjD_IU">Home Page</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~finaid/howtoapplyveterans.html#.UidVYZjD_IU">How to Apply</a>
              </li>
              <li class="list-group-item">
                <a href="http://depts.gpc.edu/~finaid/2013-2014%20Printable%20Forms/1314%20VA%20Forms/VA%20FAQ's_1314._rev_2.pdf">Frequently Asked Questions</a>
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