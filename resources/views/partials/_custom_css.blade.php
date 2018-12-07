<style>

	@font-face {
	    font-family: roboto-light;
	    src: url({{ asset('assets/font/Roboto-Light.ttf') }});
	}
	.no-js #loader { display: none;  }
	.js #loader { display: block; position: absolute; left: 100px; top: 0; }
	.se-pre-con {
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: url({{ asset('assets/image/loader-64x/Preloader_2.gif') }}) center no-repeat #fff;
	}

		/* external css: flickity.css */

	* { box-sizing: border-box; }

	body { font-family: sans-serif; }

	.carousel {
	  background: #EEE;
	}

	.carousel-cell {
	  margin-right: 20px;
	  overflow: hidden;
	  width: 100%;
	}

	.carousel-cell img {
	  display: block;
	  height: 200px;
	}
	.flickity-page-dots {
	    position: absolute;
	    width: 100%;
	    bottom: 25px;
	    padding: 0;
	    margin: 0;
	    list-style: none;
	    text-align: center;
	    line-height: 1;
	}

	@media screen and ( min-width: 768px ) {
	  .carousel-cell img {
	    height: 500px;
	    width: 100%;
	  }
	  .menu2 .navbar-brand{
	  	display: none;
	  }

	}

	@media screen and ( max-width: 400px ) {
	  .carousel-cell img {
	    height: 200px;
	    width: 100%;
	  }

	  .menu2 .navbar-brand{
	  	display: block;
	  }

	}

	.menu li{
		list-style-type: none;
		display:inline;
		color: orange

	}
	nav ul {
		margin: 0px;
	}

	.menu a{
		position: relative;
		color: #000;
		text-decoration: none;
		font-family: "roboto-light", "Helvetica", sans-serif;
    font-weight: normal;
	}
	.menu a:hover{
	  	background-color: #8888;
			border-radius: 0;
	    transition: all 0.2s;
	    opacity: 0.8;
	    color: white !important;
	}

	.menu a:before {
		content: "";
		position: absolute;
		width: 100%;
		height: 2px;
		bottom: 0;
		left: 0;
		background-color: orange;
		visibility: hidden;
		-webkit-transform: scaleX(0);
		transform: scaleX(0);
		-webkit-transition: all 0.3s ease-in-out 0s;
		transition: all 0.3s ease-in-out 0s;
	}

	.menu a:hover:before {
	  visibility: visible;
	  -webkit-transform: scaleX(1);
	  transform: scaleX(1);
	}
	.flickity-prev-next-button{
		border-radius: 0%;
	}

	.flickity-prev-next-button.previous {
    	left: 0px !important;
	}

	.flickity-prev-next-button.next {
    	right: 0px !important;
	}

	.menu li{
		padding-right: 100px;
	}
	.menu1{
		background-color: #3598db !important;
	}

	.block{
	  width: 100%;
	  height: 100%;
	  position: relative;
	  overflow: hidden;
	  font-size: 16px;
	}
	.block h2{
	  position: relative;
	  display: block;
	  text-align: center;
	  margin: 0;
	  top: 50%;
	  transform: translateY(-50%);
	  font-size: 10vw;
	  color: white;
	  font-weight: 400;
	}
	.img-parallax {
	  z-index: -1;
	  /*position: absolute;*/
	  top: 0;
	  left: 50%;
	  transform: translate(-50%,0);
	  pointer-events: none
	}
</style>
