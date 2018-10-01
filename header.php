<link rel="shortcut icon" type="image/png" href="images/mini.png"/>
<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<!--<div class="top-links">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="login-register.html">Login</a>
								<div class="top-link-section">
									<form id="top-login" role="form">
										<div class="input-group" id="top-login-username">
											<span class="input-group-addon"><i class="icon-user"></i></span>
											<input type="email" class="form-control" placeholder="Email address" required="">
										</div>
										<div class="input-group" id="top-login-password">
											<span class="input-group-addon"><i class="icon-key"></i></span>
											<input type="password" class="form-control" placeholder="Password" required="">
										</div>
										<label class="checkbox">
										  <input type="checkbox" value="remember-me"> Remember me
										</label>
										<button class="btn btn-danger btn-block" type="submit">Sign in</button>
									</form>
								</div>
							</li>
						</ul>
					</div>--><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<!--<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>-->
							
							<li><a href="tel:+52.6626881557" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+52(662)688.1557</span></a></li>
							<li><a href="mailto:contacto@semara.mx" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"> contacto@semara.mx</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<div id="logo">
					<a href="index.php" class="standard-logo" data-dark-logo="images/logo-tribunal-0.png"><img src="images/logo-tribunal-0.png" alt="Logo tribunal"></a>
					<a href="index.php" class="retina-logo" data-dark-logo="images/logo-tribunal-0.png"><img src="images/logo-tribunal-0.png" alt="Logo tribunal"></a>
				</div><!-- #logo end -->

				<div class="top-advert">
					<img src="images/transparencia/sala-especializada.png" alt="">
				</div>

			</div>

			<div id="header-wrap" class="dark">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2 dark" style="background-color: #254f5a;">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li <?php echo ($page == 'one') ? "class='current'" : ""; ?>><a href="index.php">INICIO</a></li>
							<li <?php echo ($page == 'two') ? "class='current'" : ""; ?>><a href="lista-de-acuerdos.php"><div>LISTA DE ACUERDOS</div></a></li>
							<li <?php echo ($page == 'seven') ? "class='current'" : ""; ?>><a href="sesiones.php"><div>SESIONES Y RESOLUCIONES</div></a></li>
							<li <?php echo ($page == 'three') ? "class='current'" : ""; ?>><a href="agenda.php"><div>AGENDA</div></a></li>
							<li <?php echo ($page == 'four') ? "class='current'" : ""; ?>><a href="acercade.php"><div>CONOCE LA SALA<i class="icon-chevron-down nomargin"></i></div></a>
							    <ul>
							        <li><a href="acercade.php"><div>CONOCE LA SALA</div></a></li>
							        <li><a href="publicaciones.php"><div>PACTOS INTERNACIONALES</div></a></li>    	
									<li><a href="articulos-academicos.php"><div class="uppercase">Artículos académicos</div></a></li>
									<li><a href="preguntas-frecuentes.php"><div class="uppercase">PREGUNTAS FRECUENTES</div></a></li>
							    </ul>
							</li>
							<li <?php echo ($page == 'five') ? "class='current'" : ""; ?>><a href="sala-prensa.php"><div>SALA DE PRENSA</div></a></li>
							<li <?php echo ($page == 'six') ? "class='current'" : ""; ?>><a href="portal.php"><div>TRANSPARENCIA</div></a></li>						
						</ul>

						<!-- Top Search
						============================================= -->
						<!--<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div> #top-search end -->

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->