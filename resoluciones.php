<!-- Posts
										============================================= -->
										<div id="posts" class="post-grid grid-container post-masonry post-timeline grid-2 clearfix">

											<div class="timeline-border"></div>

											<div class="entry entry-date-section notopmargin"><span>Enero 2018</span></div>

											<div class="entry clearfix">
												<div class="entry-timeline">
													<div class="timeline-divider"></div>
												</div>
												<div class="entry-image">
													<img class="image_fade" src="images/transparencia/tribunal-video-2.png" alt="Standard Post with Image">
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
											</div>

										   <div class="entry clearfix">
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
											</div>

											<div class="entry clearfix">
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
											</div>




										</div><!-- #posts end -->

										<div id="load-next-posts" class="center">
											<a href="blog-timeline-2.html" class="button button-3d button-dark button-large button-rounded">Ver más..</a>
										</div>

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