	  </div><!--end #wrap-->
	  <div id="footer">
      <div class="container">
        <p class="text-muted credit">&copy; <?php echo date("Y"); ?> Copyright. Example courtesy <a href="#">DeAndre Johnson</a> of <a href="http://tomorrowpictures.com">Tomorrow Pictures Inc.</a></p>
      </div>
    </div>
	  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	  <script src="http://code.jquery.com/jquery-latest.js"></script>
	  <script src="assets/js/owl.carousel.min.js"></script>
	  <script src="assets/js/jquery.slides.min.js"></script>
	  <script src="assets/js/bootstrap.min.js"></script>
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
  </body>

</html>