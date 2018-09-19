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
	<link rel="stylesheet" href="css/calendar.css" type="text/css" />

	<link href='css/fullcalendar.min.css' rel='stylesheet' />
	<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	<script src='lib/moment.min.js'></script>
	<script src='lib/jquery.min.js'></script>
	<script src='js/fullcalendar.js'></script>
	<script src='js/gcal.js'></script>
	<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({

      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,listYear'
      },

      displayEventTime: false, // 

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
      googleCalendarApiKey: 'AIzaSyCsnlJ_HJmuhGy_2zSv7QLi_wz_OF38RUk',

      // ID CALENDARIO 
      events: 'f6j582jm57qbkrd3bocv8ja4c0@group.calendar.google.com',

      eventClick: function(event) {
        // Abre evento en una ventana emergente para agendar en google calendar
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },

      loading: function(bool) {
        $('#loading').toggle(bool);
      }

    });

  });

</script>

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<style>

 

  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>

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
				<h1>AGENDA</h1>				
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix nopadding">

				    <div class="tabs clearfix" id="tab-1">

						<ul class="tab-nav clearfix">
							<li><a href="#tabs-1"><i class="icon-line-loader norightmargin"></i></a></li>
							<li><a href="#tabs-2"><i class="icon-calendar3 norightmargin"></i></a></li>
							
							
						</ul>

						<div class="tab-container">

							<div class="tab-content clearfix" id="tabs-1">

									<div class="fancy-title title-border-color title-border">
										<h2 class="uppercase" style="color: #254f5a;">Calendario visual</h2>
									</div>
								    <!-- Post Content
									============================================= -->

								        <!--<div class="section parallax nomargin notopborder" style="background: url('images/transparencia/en-espera.png') center center; padding: 150px 0;" data-stellar-background-ratio="0.3">
											<div class="center clearfix">
												    <div class="container">
												        <div class="emphasis-title nomargin dark">
															<h3 class="uppercase nomargin">ESPERA CONTENIDO PRÓXIMAMENTE</h3>								
														</div>
													</div>	
											</div>
									    </div>-->
									<div class="postcontent nobottommargin clearfix">

										<div id="posts3" class="post-timeline clearfix">
											<div class="timeline-border"></div>
											<div class="entry clearfix">
												<div class="entry-timeline">
													12<span>Sep</span>
													<div class="timeline-divider"></div>
												</div>
												<div class="entry-image">
													<img class="image_fade" src="images/noticias/portadas/n-4.jpg" alt="Standard Post with Image">
												</div>
												<div class="entry-title">
													<h2><a href="convocatoria-a-la-sesion-de-pleno-de-resolucion-6.php">Convocatoria al público en general a la Sesión de Pleno de Resolución</a> <span>12 de Septiembre</span></h2>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-calendar3"></i> 12 Septiembre 2018</li>
												</ul>
												<div class="entry-content">
													<p></p>
													
												</div>
											</div>
										</div>

										<div id="posts3" class="post-timeline clearfix">
											<div class="timeline-border"></div>
											<div class="entry clearfix">
												<div class="entry-timeline">
													22<span>Ago</span>
													<div class="timeline-divider"></div>
												</div>
												<div class="entry-image">
													<img class="image_fade" src="images/noticias/portadas/n-4.jpg" alt="Standard Post with Image">
												</div>
												<div class="entry-title">
													<h2><a href="convocatoria-a-la-sesion-de-pleno-de-resolucion-4.php">Convocatoria al público en general a la Sesión de Pleno de Resolución</a> <span>29 de Agosto</span></h2>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-calendar3"></i> 24 Agosto 2018</li>
												</ul>
												<div class="entry-content">
													<p></p>
													
												</div>
											</div>
										</div>

										<div id="posts3" class="post-timeline clearfix">
											<div class="timeline-border"></div>
											<div class="entry clearfix">
												<div class="entry-timeline">
													22<span>Ago</span>
													<div class="timeline-divider"></div>
												</div>
												<div class="entry-image">
													<img class="image_fade" src="images/noticias/portadas/n-4.jpg" alt="Standard Post with Image">
												</div>
												<div class="entry-title">
													<h2><a href="convocatoria-a-la-sesion-de-pleno-de-resolucion-3.php">Convocatoria al público en general a la Sesión de Pleno de Resolución</a> <span>22 de Agosto</span></h2>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-calendar3"></i> 17 Agosto 2018</li>
												</ul>
												<div class="entry-content">
													<p></p>
													
												</div>
											</div>
										</div>

										<div id="posts2" class="post-timeline clearfix">
											<div class="timeline-border"></div>
											<div class="entry clearfix">
												<div class="entry-timeline">
													15<span>Ago</span>
													<div class="timeline-divider"></div>
												</div>
												<div class="entry-image">
													<img class="image_fade" src="images/noticias/portadas/n-4.jpg" alt="Standard Post with Image">
												</div>
												<div class="entry-title">
													<h2><a href="convocatoria-a-la-sesion-de-pleno-de-resolucion-2.php">Convocatoria al público en general a la Sesión de Pleno de Resolución</a> <span>15 de Agosto</span></h2>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-calendar3"></i> 15 Agosto 2018</li>
												</ul>
												<div class="entry-content">
													<p></p>
													
												</div>
											</div>
										</div>
											
										<div id="posts" class="post-timeline clearfix">

											<div class="timeline-border"></div>

											<div class="entry clearfix">
												<div class="entry-timeline">
													07<span>Ago</span>
													<div class="timeline-divider"></div>
												</div>
												<div class="entry-image">
													<img class="image_fade" src="images/noticias/portadas/n-4.jpg" alt="Standard Post with Image">
												</div>
												<div class="entry-title">
													<h2><a href="convocatoria-a-la-sesion-de-pleno-de-resolucion.php">Convocatoria al público en general a la Sesión de Pleno de Resolución</a></h2>
												</div>
												<ul class="entry-meta clearfix">
													<li><i class="icon-calendar3"></i> 07 Agosto 2018</li>
												</ul>
												<div class="entry-content">
													<p></p>
													
												</div>
											</div>																	   							

										</div>

									</div>
									
							</div>
							<div class="tab-content clearfix" id="tabs-2">

							    <div class="fancy-title title-border-color title-border">
									<h2 class="uppercase" style="color: #254f5a;">Agenda de Magistrado</h2>
								</div>

                                <div id='loading'>loading...</div>

  								<div id='calendar'></div>

							</div>				

						</div>

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
	
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.calendario.js"></script>
	<script type="text/javascript" src="js/events-data.js"></script>

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

		var cal = $( '#calendar' ).calendario( {
				onDayClick : function( $el, $contentEl, dateProperties ) {

					for( var key in dateProperties ) {
						console.log( key + ' = ' + dateProperties[ key ] );
					}

				},
				caldata : canvasEvents
			} ),
			$month = $( '#calendar-month' ).html( cal.getMonthName() ),
			$year = $( '#calendar-year' ).html( cal.getYear() );

		$( '#calendar-next' ).on( 'click', function() {
			cal.gotoNextMonth( updateMonthYear );
		} );
		$( '#calendar-prev' ).on( 'click', function() {
			cal.gotoPreviousMonth( updateMonthYear );
		} );
		$( '#calendar-current' ).on( 'click', function() {
			cal.gotoNow( updateMonthYear );
		} );

		function updateMonthYear() {
			$month.html( cal.getMonthName() );
			$year.html( cal.getYear() );
		};


	</script>

</body>
</html>