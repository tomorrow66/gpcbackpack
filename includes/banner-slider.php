<div class="banner">
	<ul>
		<li style="background-image: url('<?php echo "$bannerImg1";?>');">
			<div class="inner">
				<h1 class="headline"><?php echo "$bannerHeader1";?></h1>
				<p><span><?php echo "$bannerSubHeader1";?></span></p>
			</div>
		</li>
		<?php if (!empty($bannerImg2) && !empty($bannerHeader2) && !empty($bannerSubHeader2)) :?>
		<li style="background-image: url('<?php echo "$bannerImg2";?>');">
			<div class="inner">
        <h1 class="headline"><?php echo "$bannerHeader2";?></h1>
				<p><span><?php echo "$bannerSubHeader2";?></span></p>
      </div>
		</li>
		<?php endif; ?>
		<?php if (!empty($bannerImg3) && !empty($bannerHeader3) && !empty($bannerSubHeader3)) :?>
		<li style="background-image: url('<?php echo "$bannerImg3";?>');">
			<div class="inner">
        <h1 class="headline"><?php echo "$bannerHeader3";?></h1>
				<p><span><?php echo "$bannerSubHeader3";?></span></p>
      </div>
		</li>
		<?php endif; ?>
		<?php if (!empty($bannerImg4) && !empty($bannerHeader4) && !empty($bannerSubHeader4)) :?>
		<li style="background-image: url('<?php echo "$bannerImg4";?>');">
			<div class="inner">
        <h1 class="headline"><?php echo "$bannerHeader4";?></h1>
				<p><span><?php echo "$bannerSubHeader4";?></span></p>
      </div>
		</li>
		<?php endif; ?>
	</ul>
</div>