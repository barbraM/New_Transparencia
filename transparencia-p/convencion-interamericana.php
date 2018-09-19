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
		
		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix nopadding">

				    <div class="col_full">					

						<div class="fslider" data-pagi="false" data-animation="fade">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide"><a href="#"><img src="images/transparencia/oea.png" alt="UNCAC"></a></div>									
								</div>
							</div>
						</div>

						<div class="entry-title uppercase">
							<h1 class="nobottommargin hidden-xs">Convención Interamericana contra la Corrupción (OEA)</h1>
							<h2 class="nobottommargin visible-xs center nobottommargin">Convención Interamericana contra la Corrupción (OEA)</h2>							
						</div>
					</div>
					<div class="col_full">				    

						<div class="entry-content">
							<p style="text-align: justify;">El 29 de marzo de 1996, en Caracas, Venezuela, los estados miembros de la Organización de Estados Americanos (OEA) adoptaron la Convención Interamericana contra la Corrupción, la cual entró en vigor el 6 de marzo de 1997.</p>
							<p style="text-align: justify;">Esta Convención, es el primer instrumento jurídico internacional en su tipo. Reconoce expresamente la trascendencia internacional de la corrupción y la necesidad de contar con un instrumento que promueva y facilite la cooperación entre los países para combatirla. Los propósitos de esta Convención son:</p>
							<ul class="iconlist iconlist-color nobottommargin">
								<li style="text-align: justify;"><i class="icon-caret-right"></i> Promover y fortalecer el desarrollo de los mecanismos necesarios para prevenir, detectar, sancionar y erradicar la corrupción. </li>
								<li style="text-align: justify;"><i class="icon-caret-right"></i> Promover, facilitar y regular la cooperación entre los Estados a fin de asegurar la eficacia de las medidas y acciones para prevenir, detectar, sancionar y erradicar los actos de corrupción en el ejercicio de las funciones públicas y los actos de corrupción específicamente vinculados con tal ejercicio.</li>								
							</ul>			
						</div>
						
					</div>

					<div class="toggle toggle-bg">
						<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Documentos</div>
						<div class="togglec"><a href="docs/tratados/convencion-interamericana-contra-la-corrupcion.pdf" target="_blank">Convención Interamericana Contra la Corrupción</a></div>
					</div>				

				</div>

				<div class="container clearfix">
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