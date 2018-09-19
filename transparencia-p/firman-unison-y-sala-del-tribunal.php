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
									<div class="slide"><a href="#"><img src="images/noticias/portadas/25865-p.jpg" alt="Acuerdos con Unison"></a></div>									
								</div>
							</div>
						</div>

						<div class="entry-title uppercase">
							<h1 class="nobottommargin hidden-xs">Firman Unison y sala del Tribunal de Justicia Administrativa carta compromiso</h1>
							<h2 class="nobottommargin center visible-xs nobottommargin">Firman Unison y sala del Tribunal de Justicia Administrativa carta compromiso</h2>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> 12 de Marzo de 2018</li>
								<!--<li><a href="##comments"><i class="icon-comments"></i> Comentarios</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>-->
							</ul>						
						</div>						

					</div>
					<div class="col_full">				    

						<div class="entry-content">
							<p style="text-align: justify;">La Universidad de Sonora y la Sala Especializada en Materia Anticorrupción y Responsabilidades Administrativas del Tribunal de Justicia Administrativa firmaron hoy una carta compromiso de colaboración institucional, con lo cual se formaliza el inicio de actividades de capacitación para el personal que labora en la citada área jurídica. </p>	
							<p style="text-align: justify;">Al respecto, el director de Vinculación y Difusión, Rodolfo Basurto Álvarez, destacó el interés de la Universidad de Sonora por impulsar acciones de transferencia del conocimiento y vinculación con los distintos sectores de la sociedad, y en esta ocasión, personal docente y de investigación del Departamento de Sociología y Administración Pública impartirán el Diplomado en Administración Pública a personal del Tribunal.</p>
							<p style="text-align: justify;">El funcionario universitario dijo que a través de esta firma se estrechan lazos con la Sala Especializada en Materia Anticorrupción y Responsabilidades Administrativas, que permitirán establecer un convenio general de colaboración, del cual sin duda se desprenderán convenios específicos. </p>
							<p style="text-align: justify;">En tanto, el magistrado presidente de la citada Sala Especializada, Ricardo García Sánchez, mencionó que el nuevo sistema de combate a la corrupción requiere la participación de todas las instituciones, incluidas las universidades. </p>
							<p style="text-align: justify;">Mencionó que el sistema anticorrupción no funcionará sin personal especializado y capacitado en temas de fiscalización, administración pública, transparencia y rendición de cuentas, por citar algunos, y es por ello que se da este acercamiento con la máxima casa de estudios. Asimismo, indicó que esta colaboración académica podría derivar a futuro en alguna opción de posgrado.</p>
							<p style="text-align: justify;">En el evento también estuvo presente el presidente de la Academia de Estudios Municipales, Felipe Mora Arellano, quien comentó que esta colaboración inicia con la impartición del Diplomado en Administración Pública, que tendrá duración de 120 horas y estará dividido en diez módulos. (LMA)</p>



						</div>
						
					</div>					

				</div>

				<div class="container clearfix">

					<div class="row clearfix">

						<div class="col_two_third">						

							<ul class="portfolio-meta bottommargin">
								<li><span><i class="icon-user"></i>Creado por:</span> Dirección de comunicación de la <a href="http://www.uson.mx/noticias/default.php?id=25865"> UNISON</a></li>								
							</ul>							

						</div>	

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