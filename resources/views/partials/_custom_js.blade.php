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

	// $('.img-parallax').each(function(){
	//   var img = $(this);
	//   var imgParent = $(this).parent();
	//   function parallaxImg () {

	//     var speed = img.data('speed');
	//     var imgY = imgParent.offset().top;
	//     var winY = $(this).scrollTop();
	//     var winH = $(this).height();
	//     var parentH = imgParent.innerHeight();


	//     // The next pixel to show on screen      
	//     var winBottom = winY + winH - winH;

	//     // If block is shown on screen
	//     if (winBottom > imgY && winY < imgY + parentH) {
	//       // Number of pixels shown after block appear
	//       var imgBottom = ((winBottom - imgY) * speed);
	//       // Max number of pixels until block disappear
	//       var imgTop = winH + parentH;
	//       // Porcentage between start showing until disappearing
	//       var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
	//     }
	//     img.css({
	//       top: imgPercent + '%',
	//       transform: 'translate(-50%, -' + imgPercent + '%)'
	//     });
	//   }
	//   $(document).on({
	//     scroll: function () {
	//       parallaxImg();
	//     }, ready: function () {
	//       parallaxImg();
	//     }
	//   });
	// });

</script>