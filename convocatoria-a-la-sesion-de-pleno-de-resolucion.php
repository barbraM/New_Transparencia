<!DOCTYPE html>
<html dir="ltr" lang="en-ES">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Tribuanl" />
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
	<title>PORTAL DE TRANSPARENCIA</title>

</head>

<body class="stretched no-transition">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php $page = 'five'; include('header.php'); ?>	

		

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix nopadding">

				    <div class="col_full">					

						<div class="fslider" data-pagi="false" data-animation="fade">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><a href="#"><img src="images/noticias/portadas/n-4.jpg" alt="Acuerdos con Unison"></a></div>									
								</div>
							</div>
						</div>

						<div class="entry-title uppercase">
							<h1 class="nobottommargin hidden-xs">Convocatoria al público en general a la Sesión de Pleno de Resolución</h1>					
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i>02 de Agosto de 2018</li>
								<!--<li><a href="##comments"><i class="icon-comments"></i> Comentarios</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->
							</ul>						
						</div>						

					</div>
					<div class="col_full">				    

						<div class="entry-content">
							<iframe src="ViewerJS/#../docs/convocatorias/ConvocatoriaPleno7agosto2018.pdf" style="width: 100%; height: 700px; border: none;"></iframe>
							<!--<img class="responsive" src="images/noticias/boletin/logo-capacitacion.png">-->
						</div>
						
					</div>					

				</div>

				<div class="container clearfix">

					<p style="text-align: justify;">
						“NOTA: SE INFORMA QUE FUE RETIRADO DEL ORDEN DEL DÍA EL PROYECTO DE SENTENCIA DEL EXPEDIENTE SEMARA-IMP-14/2018, INCLUYÉNDOSE AL ORDEN DE DÍA EL PROYECTO DE SENTENCIA RELATIVO AL EXPEDIENTE SEMARA-JN-01/2018.”
					</p>

					<!--<div class="row clearfix">

						<div class="col_two_third">						

							<ul class="portfolio-meta bottommargin">
								<li><span><a href="http://comisioncontralores.gob.mx/2017/">http://comisioncontralores.gob.mx/2017/</a></li>								
							</ul>							

						</div>	

					</div>-->

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