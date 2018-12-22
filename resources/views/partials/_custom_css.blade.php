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

	body { font-family: roboto-light; }

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

	  .menu1{
			display : block !important;
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

	  .menu1{
			display : none !important;
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
			border-radius: 0;
	    transition: all 0.2s;
	    opacity: 0.8;
	}

	.menu a:before {
		content: "";
		position: absolute;
		width: 100%;
		height: 2px;
		bottom: 0;
		left: 0;
		background-color: #3598db;
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
		padding-right: 20PX;
		padding-left: 20PX;
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

	.menu2{
		-webkit-transition: width 2s; /* Safari */
  	transition: width 2s;
  	opacity: 1;
  	background-color: #f5f8fa;
  	border-bottom: 2px solid #cbd6e2; 
	}

	.news-head{
		border-bottom: 1px solid #3598db;
		margin-top: 40px;
		margin-bottom: 20px;
	}

	.judul{
		background-color: #3598db;height: 40px;
		padding:10px 20px 0px 20px;
		text-transform: uppercase;
	/*	border-top-left-radius: 10px;
		border-top-right-radius: 10px;*/
		display: inline-block;
		letter-spacing: 1px
	}

	.nopad{
		padding: 0px;
	}

	.thumb{
		display: inline-block;
		max-width: 40%;
		background-size: cover;
		float: left; 
	}

	.news-body{
		margin-top:50px ;
		margin-bottom: 50px ;
	}

	.thumb-text{
		display: inline-block;
		max-width: 60%;
		padding-top: 20px; 
		padding-left: 20px; 
	}

	.thumb-text h5 a{
		text-decoration: none;
		color: grey;
	}

	.thumb-text h5 a:hover{
		text-decoration: none;
		color: hotpink;
	}

	.post::-webkit-scrollbar {
    display: none;
  }

  .after-post{
  	position: fixed;
  	width: 27.5%; 
  	top:44px;
  }

  .news-side{}

  .perangkat-carousell img {
	  display: block;
	  height: 200px;
	}

	.cell-perangkat{
		height: 200px;
	}

	.cell-perangkat img{
		height: 100%;
		width: 100%;
	}

	.fixed-side{
		position: fixed;
		top: -1105px;
		width: 27%;
	}

	.arrow-left{
    position: absolute;
    top: 45%;
    left: 4% ;
    opacity: 0;
    background-color: grey;
    padding: 10px;
    z-index: 1;
    -webkit-transition: opacity 0.5s; /* Safari */
    transition: opacity 0.5s;
  }

  .arrow-right{
    position: absolute;
    top: 45%;
    right: 4% ;
    opacity: 0;
    background-color: grey;
    padding: 10px;
    z-index: 1;
    -webkit-transition: opacity 0.5s; /* Safari */
    transition: opacity 0.5s;
  }

  .left-side{
    width: 50%;
    position: absolute;
    height: 100%;
    top: 0px;
    left: 0px;
    opacity: 0;
    background-color: grey;
    cursor: pointer;
    z-index: 2
  }

  .right-side{
    width: 50%;
    position: absolute;
    height: 100%;
    top: 0px;
    right: 0px;
    opacity: 0;
    background-color: grey;
    cursor: pointer;
    z-index: 2
  }

</style>
