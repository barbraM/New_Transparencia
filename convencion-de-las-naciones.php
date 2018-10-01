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

		<?php $page = 'four'; include('header.php'); ?>	

		

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix nopadding">

				    <div class="col_full">					

						<div class="fslider" data-pagi="false" data-animation="fade">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><a href="#"><img src="images/transparencia/uncac.png" alt="UNCAC"></a></div>									
								</div>
							</div>
						</div>

						<div class="entry-title uppercase">
							<h1 class="nobottommargin hidden-xs">Convención de las Naciones Unidas contra la Corrupción (UNCAC)</h1>
							<h2 class="nobottommargin center visible-xs nobottommargin">Convención de las Naciones Unidas contra la Corrupción (UNCAC)</h2>							
						</div>						

					</div>
					<div class="col_full">				    

						<div class="entry-content">
							<p style="text-align: justify;">La Convención de las Naciones Unidas contra la Corrupción (UNCAC), también conocida como la Convención de Mérida, por haber sido adoptada en esa ciudad de México, en diciembre de 2003, entró en vigor el 14 de diciembre de 2005, al reunir las 30 ratificaciones requeridas. Actualmente, se integra por 126 Estados miembros y sus objetivos son:</p>			
						</div>
						
					</div>					

				</div>

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col_two_third">						

							<ul class="iconlist iconlist-color nobottommargin">
								<li><i class="icon-caret-right"></i> Adoptar medidas para prevenir y combatir más eficaz y eficientemente la corrupción, así como el fortalecimiento de las normas existentes.</li>
								<li><i class="icon-caret-right"></i> Fomentar la cooperación internacional y la asistencia técnica en la prevención y la lucha contra la corrupción. </li>
								<li><i class="icon-caret-right"></i> Promover la integridad, la obligación de rendir cuentas y la debida gestión de los asuntos y bienes públicos. </li>								
							</ul>							

						</div>	

					</div>

					<div class="toggle toggle-bg">
						<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Documentos</div>
						<div class="togglec"><a href="docs/tratados/convencion-de-las-naciones-unidas-contra-la-corrupcion.pdf" target="_blank">Convención de las Naciones Unidas Contra la Corrupción</a></div>
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