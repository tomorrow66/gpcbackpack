# GPC

This project utilizes grunt.js and Sass as a workflow solution for creating a optimized websites. To get up and running, follow these instructions:

**Node.js needs to be installed on local dev machine to utlize Grunt workflow**

1. Download or Clone the repo `git@github.com:*user*/*project-name*.git`
2. Open up a terminal window and cd into the project directory
3. Enter the following to install: `npm install` *(If there is an error, try `sudo npm install`)*
4. Then run: `grunt watch`
5. To end the `grunt watch` process, press *CTRL-C* in the terminal window. To manually publish with grunt, in the terminal simply run: `grunt`
6. Update the file paths of the last two lines in the `<head>` for icons.fallback.css and lte-ie7.js

Now you are ready for developming and making updates. Do not edit the .css files (/css/processed/), instead update the .scss files (/css/sass/). For Javascript, edit the files in the **js/custom** directory.

This workflow will use grunt to watch the scss and js files for changes then lint/compile them. If there are errors in the code, publishing will fail. Refer to the console for the line number.


## Grunt Task Reference

* <code>grunt</code> or <code>grunt default</code> to manually publish the project
* <code>grunt watch</code> to automate optimization while building
* <code>grunt cleanup</code> to remove all processed Sass CSS files, run after adding or changing .scss files. Run occasionally and before deploying
* <code>grunt icons</code> to build SVG images with PNG fallbacks
* <code>grunt minify</code> to use Yahoo!'s [SmushIt](http://www.smushit.com/ysmush.it/) service to minify images
* 

## PHP Variables

PHP variables are used for quick editible content and a couple areas. 

If you open up a .php file in your text editor you will see a list of variables that's used to control content on that page.

### List of Variables and Associated Pages/Files

* siteTitle       - Set Site Title in "includes/header.php
* pageDesc        - "All pages"
* pageTitle       - "All pages"
* sectionHeader   - "All pages"
* sectionDesc     - "All pages"
* vimeoID         - "All pages"
* bannerImg       - "Index page" (Home page Slider)
* bannerHeader    - "Index page" (Home page Slider)
* bannerSubHeader - "Index page" (Home page Slider)
