<?php
  # The name of your company, website etc.
  $siteTitle = "Georgia Perimeter College Backpack";

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
    <title><?php echo "$siteTitle";?> &#8212; <?php echo "$pageTitle";?></title>
    <meta name="description" content="<?php echo "$pageDesc";?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
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
    
    <!-- All the icons, you need -->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="img/apple-touch/favicon-144.png">
  
    <link rel="icon" href="favicon.ico" type="image/x-icon">
  
    <!-- If this is a blog or something, use your Google+ profile -->
    <link rel="author" href=""/>
  
    <!-- Google Font, does have fallbacks though -->
    <!-- Google Font Example -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700|Arvo:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Minified CSS -->
    <link href="css/min/styles.min.css" rel="stylesheet" />
    <!-- Optionally use the non-minified CSS for development -->
    <!--<link href="css/libs/z.styles.concat.css" rel="stylesheet" /> -->
    
    <!-- Font Awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- Optionally use Modernizr without Respond.js -->
    <!-- <script src="js/vendor/modernizr-2.6.2.js"></script> -->
    
    <!-- Unicode CSS Loader : updated to add pathname within IIFE -->
    <script>/* grunticon Stylesheet Loader | https://github.io/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
    (function() {
      var pathname = window.location.pathname,
          path =  pathname.substring(0, pathname.lastIndexOf("/"));
      window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!!t.document.createElementNS&&!!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect,A=function(A){var o=t.document.createElement("link"),r=t.document.getElementsByTagName("script")[0];o.rel="stylesheet",o.href=e[A&&n?0:A?1:2],r.parentNode.insertBefore(o,r)},o=new t.Image;o.onerror=function(){A(!1)},o.onload=function(){A(1===o.width&&1===o.height)},o.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
      grunticon( [ path +"/css/min/svg/icons.data.svg.css", path +"/css/min/svg/icons.data.png.css", path +"/css/min/svg/icons.fallback.css" ] );
    })();
    </script>
    <noscript><link href="/css/min/svg/icons.fallback.css" rel="stylesheet"></noscript>
  
    <!--[if lte IE 7]><script src="/css/fonts/icomoon/lte-ie7.js"></script><![endif]-->

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