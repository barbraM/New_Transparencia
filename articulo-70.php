<!DOCTYPE html>
<html dir="ltr" lang="en-ES">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="TRANSPARENCIA" />
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
	<!--hola-->

</head>

<body class="stretched no-transition">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	   
		<?php $page = 'six'; include('header.php'); ?>

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix center">
				<h1>PORTAL DE TRANSPARENCIA</h1>				
			</div>

		</section><!-- #page-title end -->
		

		<!-- Content
		============================================= -->
		<section id="index">

			<div class="content-wrap">				

				

				<div class="section nomargin">

					<div class="container clearfix">

						<div class="section parallax dark notopmargin noborder" style="padding: 80px 0; background-image: url('images/transparencia/obligaciones.png');" data-stellar-background-ratio="0.4">
							<div class="container center clearfix">

								<div class="emphasis-title nomargin">
									<h2 class="nomargin"> Artículo LXX Ley General de Transparencia y Acceso a la Información Pública. Capítulo II</h2>								
								</div>

							</div>
						</div>

						<p>Artículo 70 . En la Ley Federal y de las Entidades Federativas se contemplará que los sujetos obligados pongan a disposición del público y mantengan actualizada, en los respectivos medios electrónicos, de acuerdo con sus facultades, atribuciones, funciones u objeto social, según corresponda, la información, por lo menos, de los temas, documentos y políticas que a continuación se señalan:</p>

						<p>I.- El marco normativo aplicable al sujeto obligado, en el que deberá incluirse leyes, códigos, reglamentos, decretos de creación, manuales administrativos, reglas de operación, criterios, políticas, entre otros;</p>

						<p>II.-  Su estructura orgánica completa, en un formato que permita vincular cada parte de la estructura, las atribuciones y responsabilidades que le corresponden a cada servidor público, prestador de servicios profesionales o miembro de los sujetos obligados, de conformidad con las disposiciones aplicables;</p>

						<p>III.-  Las facultades de cada Área;</p>

						<p>IV.- Las metas y objetivos de las Áreas de conformidad con sus programas operativos;</p>

						<p>V.- Los indicadores relacionados con temas de interés público o trascendencia social que conforme a sus funciones, deban establecer;</p>

						<p>VI.- Los indicadores que permitan rendir cuenta de sus objetivos y resultados;</p>

						<p>VII.- El directorio de todos los Servidores Públicos, a partir del nivel de jefe de departamento o su equivalente, o de menor nivel, cuando se brinde atención al público; manejen o recursos públicos; realicen actos de autoridad o presten servicios profesionales bajo el régimen de confianza u honorarios y personal de base. El directorio deberá incluir, al menos el nombre, cargo o nombramiento asignado, nivel del puesto en la estructura orgánica, fecha de alta en el cargo, número telefónico, domicilio para recibir correspondencia y dirección de correo electrónico oficiales;</p>

						<p>VIII.- La remuneración bruta y neta de todos los Servidores Públicos de base o de confianza, de todas las percepciones, incluyendo sueldos, prestaciones, gratificaciones, primas, comisiones, dietas, bonos, estímulos, ingresos y sistemas de compensación, señalando la periodicidad de dicha remuneración;</p>

						<p></p>


						


					</div>

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

	</script>

</body>
</html>