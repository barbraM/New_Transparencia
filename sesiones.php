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
	<title>SESIONES Y RESOLUCIONES</title>

</head>

<body class="stretched no-transition">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php $page = 'seven'; include('header.php'); ?>		

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix center">
				<h1>SESIONES Y RESOLUCIONES</h1>				
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix nopadding">

					<div class="tabs tabs-alt clearfix" id="tab-7">

						<ul class="tab-nav clearfix">
							<li><a href="#tabs-25">Sesiones</a></li>
							<li><a href="#tabs-26">Resoluciones</a></li>							
						</ul>

						<div class="tab-container">
							<!--SESIONES-->
							<div class="tab-content clearfix" id="tabs-25">
								<div id="posts" class="post-grid grid-container post-masonry post-timeline grid-2 clearfix">

									<div class="timeline-border"></div>

									<div class="entry entry-date-section notopmargin"><span>26 Septiembre 2018</span></div>





                                                                       <div class="entry clearfix">
										<div class="entry-timeline">
											<div class="timeline-divider"></div>
										</div>
										<div class="entry-image">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/XcBNAhTL53Q" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>
										<div class="entry-title">
											<h2><a href="sentencia.php">Sesión de Resolución 26 septiembre 2018</a></h2>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 26 septiembre 2018</li>					
										</ul>
										<!--<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
											<a href="sentencia.php" class="more-link">Ver más</a>
										</div>-->
									</div>

									<div class="entry clearfix">
										<div class="entry-timeline">
											<div class="timeline-divider"></div>
										</div>
										<div class="entry-image">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/55g0BFnoFDY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>
										<div class="entry-title">
											<h2><a href="sentencia.php">Sesión de Resolución 12 septiembre 2018</a></h2>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 12 septiembre 2018</li>					
										</ul>
										<!--<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
											<a href="sentencia.php" class="more-link">Ver más</a>
										</div>-->
									</div>

									<div class="entry clearfix">
										<div class="entry-timeline">
											<div class="timeline-divider"></div>
										</div>
										<div class="entry-image">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/Vs1ZXsisO80" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>
										<div class="entry-title">
											<h2><a href="sentencia.php">Sesión de Resolución 29 agosto 2018</a></h2>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 29 Agosto 2018</li>					
										</ul>
										<!--<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
											<a href="sentencia.php" class="more-link">Ver más</a>
										</div>-->
									</div>


									<div class="entry clearfix">
										<div class="entry-timeline">
											<div class="timeline-divider"></div>
										</div>
										<div class="entry-image">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/viJyQqbscFc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>
										<div class="entry-title">
											<h2><a href="sentencia.php">Sesión de Resolución 22 agosto 2018</a></h2>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 22 Agosto 2018</li>					
										</ul>
										<!--<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
											<a href="sentencia.php" class="more-link">Ver más</a>
										</div>-->
									</div>

									<div class="entry clearfix">
										<div class="entry-timeline">
											<div class="timeline-divider"></div>
										</div>
										<div class="entry-image">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/D1AFpbb0wm0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>
										<div class="entry-title">
											<h2><a href="sentencia.php">Sesión de Resolución 15 agosto 2018</a></h2>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 15 Agosto 2018</li>					
										</ul>
										<!--<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
											<a href="sentencia.php" class="more-link">Ver más</a>
										</div>-->
									</div>

									<div class="entry clearfix">
										<div class="entry-timeline">
											<div class="timeline-divider"></div>
										</div>
										<div class="entry-image">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/iTrokHHGdA8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>
										<div class="entry-title">
											<h2><a href="sentencia.php">SESIÓN DE RESOLUCIÓN 07 AGOSTO</a></h2>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 07 Agosto 2018</li>					
										</ul>
										<!--<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
											<a href="sentencia.php" class="more-link">Ver más</a>
										</div>-->
									</div>

								   <!--<div class="entry clearfix">
										<div class="entry-timeline">
											<div class="timeline-divider"></div>
										</div>
										<div class="entry-image">
											<img class="image_fade" src="images/transparencia/tribunal-video-3.png" alt="Standard Post with Image">
										</div>
										<div class="entry-title">
											<h2><a href="sentencia.php">TÍTULO PUBLICACIÓN</a></h2>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 10th Feb 2018</li>						
										</ul>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
											<a href="sentencia.php" class="more-link">Ver más</a>
										</div>
									</div>-->

									<!--<div class="entry clearfix">
										<div class="entry-timeline">
											<div class="timeline-divider"></div>
										</div>
										<div class="entry-image">
											<img class="image_fade" src="images/transparencia/tribunal-video-6.png" alt="Standard Post with Image">
										</div>
										<div class="entry-title">
											<h2><a href="sentencia.php">TÍTULO PUBLICACIÓN</a></h2>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 10th Feb 2018</li>					
										</ul>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
											<a href="sentencia.php" class="more-link">Ver más</a>
										</div>
									</div>-->
								</div><!-- #posts end -->
							</div>
							<!--/SESIONES-->
							<!--RESOLUCIONES-->
							
								<!--7 de Agosto-->
								<div class="toggle">
									<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Resoluciones 7 de Agosto del 2018.</div>
									<div class="togglec">
										<a class="nomargin" href="docs/resoluciones/impugnacion-21-2018-resolucion-definitiva.pdf" target="_blank">IMPUGNACION-21-2018
										</a> <br> <h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/semara-imp-1-2018-resolucion-definitiva.pdf" target="_blank">SEMARA-IMP-1-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/semara-imp-08-2018-resolucion-definitiva.pdf" target="_blank">SEMARA-IMP-08-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/impugnacion-21-2018-resolucion-definitiva.pdf" target="_blank">SEMARA-JN-1-2018
										</a> <br><h6></h6><br>
										
									</div>
								</div>
								<div class="line line-sm"></div>

								<!--15 de Agosto-->
								<div class="toggle">
									<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Resoluciones 15 de Agosto del 2018.</div>
									<div class="togglec">
										<a class="nomargin" href="docs/resoluciones/15agosto/IMPUGNACION-6-2018.pdf" target="_blank">IMPUGNACION-6-2018
										</a> <br> <h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/15agosto/SEMARA-IMP-02-2018.pdf" target="_blank">SEMARA-IMP-02-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/15agosto/SEMARA-IMP-05-2018.pdf" target="_blank">SEMARA-IMP-05-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/15agosto/SEMARA-IMP-13-2018.pdf" target="_blank">SEMARA-IMP-13-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/15agosto/SEMARA-IMP-23-2018.pdf" target="_blank">SEMARA-IMP-23-2018
										</a> <br>
									</div>
								</div>
								<div class="line line-sm"></div>
								<!--22 de Agosto-->
								<div class="toggle">
									<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Resoluciones 22 de Agosto del 2018.</div>
									<div class="togglec">
										<a class="nomargin" href="docs/resoluciones/22agosto/IMPUGNACION-03-2018.pdf" target="_blank">IMPUGNACION-03-2018
										</a> <br> <h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/22agosto/SEMARA-IMP-04-2018.pdf" target="_blank">SEMARA-IMP-04-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/22agosto/SEMARA-IMP-11-2018.pdf" target="_blank">SEMARA-IMP-11-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/22agosto/SEMARA-IMP-22-2018.pdf" target="_blank">SEMARA-IMP-22-2018
										</a> <br><h6></h6><br>
									</div>
								</div>
								<div class="line line-sm"></div>
								<!--29 de Agosto-->
								<div class="toggle">
									<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Resoluciones 29 de Agosto del 2018.</div>
									<div class="togglec">
										<a class="nomargin" href="docs/resoluciones/29agosto/IMPUGNACION-12-2018.pdf" target="_blank">IMPUGNACION-12-2018
										</a> <br> <h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/29agosto/JUICIO DE NULIDAD-30-2018.pdf" target="_blank">JUICIO DE NULIDAD-30-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/29agosto/SEMARA-IMP-16-2018.pdf" target="_blank">SEMARA-IMP-16-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/29agosto/SEMARA-IMP-19-2018.pdf" target="_blank">SEMARA-IMP-19-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/29agosto/SEMARA-IMP-20-2018.pdf" target="_blank">SEMARA-IMP-20-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/29agosto/SEMARA-IMP-26-2018.pdf" target="_blank">SEMARA-IMP-26-2018
										</a> <br>
									</div>
								</div>
								<div class="line line-sm"></div>
								<!--12 de Septiembreo-->
								<div class="toggle">
									<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Resoluciones 12 de Septiembre del 2018.</div>
									<div class="togglec">
										<a class="nomargin" href="docs/resoluciones/12Septiembre/SEMARA-IMP-07-2018.pdf" target="_blank">SEMARA-IMP-07-2018
										</a> <br> <h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/12Septiembre/SEMARA-IMP-10-2018.pdf" target="_blank">SEMARA-IMP-10-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/12Septiembre/SEMARA-IMP-17-2018.pdf" target="_blank">SEMARA-IMP-17-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/12Septiembre/IMPUGNACIÓN-18-2018.pdf" target="_blank">IMPUGNACIÓN-18-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/12Septiembre/IMPUGNACIÓN-24-2018.pdf" target="_blank">IMPUGNACIÓN-24-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/12Septiembre/SEMARA-IMP-31-2018.pdf" target="_blank">SEMARA-IMP-31-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/12Septiembre/SEMARA-IMP-32-2018.pdf" target="_blank">SEMARA-IMP-32-2018
										</a> <br><h6></h6><br>
										<a class="nomargin" href="docs/resoluciones/12Septiembre/IMPUGNACIÓN-33-2018.pdf" target="_blank">IMPUGNACIÓN-33-2018
										</a> <br>
									</div>
								</div>
							</div>
							<!--RESOLUCIONES-->
							

						</div>

					</div>

					

					<!--<div id="load-next-posts" class="center">
						<a href="blog-timeline-2.html" class="button button-3d button-dark button-large button-rounded">Ver más..</a>
					</div>-->
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