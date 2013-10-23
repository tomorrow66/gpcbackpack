<nav class="topUtil-nav navbar-fixed-top">
  <div class="container">
    <a href="">FAQ</a>
    <a href="">COntact Us</a>
    <a href="">SIS</a>
    <a href="">Login/Password Help</a>
  </div>
</nav>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img class="img-responsive" src="assets/img/logos/gpc_logo_white2a.svg" alt="logo" title="<?php echo "$siteTitle";?> - HOME">
      </a>
    </div>
    <nav class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/index.php' ? ' active' : '');?>"><a href="/">Home</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/academic-success.php' ? ' active' : '');?>"><a href="/academic-success.php">Academic Success</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/campus-life.php' ? ' active' : '');?>"><a href="/campus-life.php">Campus-Life</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/gpc-online-college.php' ? ' active' : '');?>"><a href="/gpc-online-college.php">GPC Online College</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/military-outreach.php' ? ' active' : '');?>"><a href="/military-outreach.php">Military Outreach</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/safety-security.php' ? ' active' : '');?>"><a href="/safety-security.php">Safety & Security</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/student-success.php' ? ' active' : '');?>"><a href="/student-success.php">Personal Success</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/tech-tips.php' ? ' active' : '');?>"><a href="/tech-tips.php">Technology Tips</a></li>
        <li class="<?php echo ($_SERVER['PHP_SELF'] == '/paying-for-college.php' ? ' active' : '');?>"><a href="/paying-for-college.php">Paying for College</a></li>
      </ul>
    </nav><!--/.nav-collapse -->
  </div>
</div>
