<!DOCTYPE html>
<html dir="ltr" lang="en-ES">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Tribunal" />
	<link rel="shortcut icon" type="image/png" href="images/mini.png"/>


	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>AGENDA</title>

</head>

<body class="stretched no-transition">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php $page = 'three'; include('header.php'); ?>	

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix center">
				<h1>EVENTO</h1>				
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

				    <div class="col_full">					

						<div class="fslider" data-pagi="false" data-animation="fade">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><a href="#"><img src="images/transparencia/acuerdo-no-disponible.png" alt="About Image"></a></div>									
								</div>
							</div>
						</div>

						<!--<div class="entry-title uppercase">
							<h1 class="nobottommargin">Contenido no disponible</h1>							
						</div>-->


						<ul class="entry-meta clearfix notopmargin">
							<li><i class="icon-calendar3"></i> Fecha:</li>				
						</ul>

					</div>
					<!--<div class="col_full">

					    <div class="entry-title">
							<h3>Encabezado</h3>
						</div>

						<div class="entry-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>			
						</div>
						
					</div>-->
					<div class="clearfix line"></div>				

				</div>

				<div class="container clearfix">

					<div class="row clearfix">

						<!--<div class="col-md-6">

							<h3 class="uppercase">Encabezado</h3>

							<ul class="iconlist iconlist-color nobottommargin">
								<li><i class="icon-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
								<li><i class="icon-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
								<li><i class="icon-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
								<li><i class="icon-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
							</ul>

						</div>-->

						<!--<div class="col-md-6">

							<h3 class="uppercase">¿Qué se resolvio?</h3>

							<ul class="iconlist iconlist-color nobottommargin">
								<li><i class="icon-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
								<li><i class="icon-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
								<li><i class="icon-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
								<li><i class="icon-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </li>
							</ul>

						</div>-->

					</div>


					<a href="#" onclick="goBack()" class="topmargin button fright button-rounded button-reveal button-large button-teal"><i class="icon-line-arrow-left"></i><span>Regresar</span></a>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

		    <?php include('footer.php'); ?>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<script type="text/javascript">

		jQuery(window).load(function(){

			var $container = $('#posts');

			$container.isotope({
				itemSelector: '.entry',
				masonry: {
					columnWidth: '.entry:not(.entry-date-section)'
				}
			});

			$container.infinitescroll({
				loading: {
					finishedMsg: '<i class="icon-line-check"></i>',
					msgText: '<i class="icon-line-loader icon-spin"></i>',
					img: "images/preloader-dark.gif",
					speed: 'normal'
				},
				state: {
					isDone: false
				},
				nextSelector: "#load-next-posts a",
				navSelector: "#load-next-posts",
				itemSelector: "div.entry",
				behavior: 'portfolioinfiniteitemsloader'
			},
			function( newElements ) {
				$container.isotope( 'appended', $( newElements ) );
				var t = setTimeout( function(){ $container.isotope('layout'); }, 2000 );
				SEMICOLON.initialize.resizeVideos();
				SEMICOLON.widget.loadFlexSlider();
				SEMICOLON.widget.masonryThumbs();
				var t = setTimeout( function(){
					SEMICOLON.initialize.blogTimelineEntries();
				}, 2500 );
			});

			var t = setTimeout( function(){
				SEMICOLON.initialize.blogTimelineEntries();
			}, 2500 );

			$(window).resize(function() {
				$container.isotope('layout');
				var t = setTimeout( function(){
					SEMICOLON.initialize.blogTimelineEntries();
				}, 2500 );
			});

		});

		function goBack() {
		    window.history.back();
		}

	</script>

</body>
</html>