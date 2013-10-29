	  </div><!--end #wrap-->
	  <div id="footer">
      <div class="container">
      	<!-- <ul class="nav nav-justified">
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Login Assistance</a></li>
          <li><a href="#">Calendar</a></li>
        </ul> -->
        <p class="text-muted credit">&copy; <?php echo date("Y"); ?> Copyright. All Rights Reserved.</p>
      </div>
    </div>
	  <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	  <script src="http://code.jquery.com/jquery-latest.js"></script>
	  <script src="assets/js/bootstrap.min.js"></script>
	  <script src="assets/js/unslider.min.js"></script>
	  <script src="assets/js/svgeezy.min.js"></script>
	  <script src="assets/js/holder.js"></script>
	  <script>
	  	$(document).ready(function() {
 
			  if(window.chrome) {
					$('.banner li').css('background-size', 'cover');
				}

				$('.banner').unslider({
				  speed: 500,
				  delay: 9000,
					arrows: false,
					fluid: true,
					dots: true
				});			 
			});
	  </script>
	  <script>
      svgeezy.init(false, 'png');
    </script>
  </body>

</html>