	  </div><!--end #wrap-->
	  <div id="footer">
      <div class="container">
      	<ul class="nav nav-justified">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Login Assistance</a></li>
          <li><a href="#">Calendar</a></li>
        </ul>
        <p class="text-muted credit">&copy; <?php echo date("Y"); ?> Copyright. All Rights Reserved.</p>
      </div>
    </div>
	  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	  <script src="http://code.jquery.com/jquery-latest.js"></script>
	  <script src="assets/js/owl.carousel.min.js"></script>
	  <script src="assets/js/jquery.slides.min.js"></script>
	  <script src="assets/js/bootstrap.min.js"></script>
	  <script src="assets/js/svgeezy.min.js"></script>
	  <script src="assets/js/holder.js"></script>
	  <script>
	  	$(document).ready(function() {
 
			  $("#owl-demo").owlCarousel({
			 			
			      navigation : true, // Show next and prev buttons
			      slideSpeed : 300,
			      paginationSpeed : 400,
			      singleItem:true
			 
			      // "singleItem:true" is a shortcut for:
			      // items : 1, 
			      // itemsDesktop : false,
			      // itemsDesktopSmall : false,
			      // itemsTablet: false,
			      // itemsMobile : false
			 
			  });
			 
			});
	  </script>
	  <script>
      svgeezy.init(false, 'png');
    </script>
  </body>

</html>