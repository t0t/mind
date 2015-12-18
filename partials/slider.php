<aside class="slider">

  <input type='radio' name='slider' id='slide1'/>
  <input type='radio' name='slider' id='slide2' checked />
  <input type='radio' name='slider' id='slide3'/>
  <input type='radio' name='slider' id='slide4'/>
  <input type='radio' name='slider' id='slide5'/>

  <div class="slider__slides">
		<div class="inner">
			<article>
			  <img src="http://placehold.it/942X400" />
			</article>
			<article>
			  <div class='caption'><bar>A Bubble on Flower</bar></div>
			  <img src="http://0.s3.envato.com/files/84450220/img/Dummy1-942X400.jpg"/>
			</article>
		</div>
  </div>

  <div class="slider__nav">
  	<label for='slide1'><svg class="icon icon--arrow-left"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-left"></svg></label>
  	<label for='slide2'><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right"></svg></label>
  </div>
  <div class="slider__dots">
  	<label for='slide1'></label>
  	<label for='slide2'></label>
  </div>
</aside>
