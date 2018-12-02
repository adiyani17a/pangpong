<script type="text/javascript">
	var $carousel = $('.carousel').flickity({
	  imagesLoaded: true,
	  percentPosition: false,
	  autoPlay: true
	});

	var $imgs = $carousel.find('.carousel-cell img');
	// get transform property
	var docStyle = document.documentElement.style;
	var transformProp = typeof docStyle.transform == 'string' ?
	  'transform' : 'WebkitTransform';
	// get Flickity instance
	var flkty = $carousel.data('flickity');

	$carousel.on( 'scroll.flickity', function() {
	  flkty.slides.forEach( function( slide, i ) {
	    var img = $imgs[i];
	    var x = ( slide.target + flkty.x ) * -1/3;
	    img.style[ transformProp ] = 'translateX(' + x  + 'px)';
	  });
	});

	$('.hamburger').click(function(){
		if ($(this).hasClass('collapsed')) {
			$(this).addClass('is-active');
		}else{
			$(this).removeClass('is-active');
		}
	});

</script>