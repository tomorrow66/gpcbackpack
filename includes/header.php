<?php
  # The name of your company, website etc.
  $siteTitle = "GPC";

function slug($pageTitle) {
   $pageTitle = str_replace(" ", "-", $pageTitle); // Replaces all spaces with hyphens.
   $pageTitle = preg_replace('/[`~!@#$%\^&*()+={}[\]\\\\|;:\'",.><?\/]/', '-', $pageTitle);
   $pageTitle = strtolower($pageTitle);

   return preg_replace('/-+/', '-', $pageTitle); // Replaces multiple hyphens with single one.
}
  
// Gives you the current URL for the page
// Can be used for facebook & twitter graphs
function curPageURL()
{
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
?>
<!DOCTYPE HTML>
<html lang="en-US">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="<?php echo "$pageDesc";?>">
  
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="<?php echo curPageURL();?>">
    <meta name="twitter:title" content="<?php echo "$siteTitle";?> &#8212; <?php echo "$pageTitle";?>">
    <meta name="twitter:description" content="<?php echo "$pageDesc";?>">
    <meta name="twitter:image" content="http://yourdomain.com/assets/img/meta/twitter.png">
  
    <!-- Facebook Open Graph -->
    <meta property="og:title" content="<?php echo "$siteTitle";?> &#8212; <?php echo "$pageTitle";?>"/>
    <meta property="og:image" content="http://yourdomain.com/assets/img/meta/facebook.png"/>
    <meta property="og:site_name" content="<?php echo "$pageTitle";?>"/>
    <meta property="og:description" content="<?php echo "$pageDesc";?>"/>

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/base.css" />
    
    <!-- All the icons, you need -->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="img/apple-touch/favicon-144.png">
  
    <link rel="icon" href="img/apple-touch/favicon-32.png" sizes="32x32">
    <link href="img/apple-touch/favicon.ico" rel="icon" type="image/x-icon">
  
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/apple-touch/favicon-152.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch/favicon-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/apple-touch/favicon-120.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch/favicon-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"   href="img/apple-touch/favicon-72.png">
    <link rel="apple-touch-icon-precomposed"                 href="img/apple-touch/favicon-57.png">
  
    <!-- If this is a blog or something, use your Google+ profile -->
    <link rel="author" href=""/>
  
    <!-- Google Font, does have fallbacks though -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Arvo:400,700' rel='stylesheet' type='text/css'>

    <title><?php echo "$siteTitle";?> &#8212; <?php echo "$pageTitle";?></title>

    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body id="<?php echo slug($pageTitle);?>">
    <!-- Wrap all page content here -->
    <div id="wrap">
    <?php
      # Include Footer
      include("includes/nav.php");
    ?>