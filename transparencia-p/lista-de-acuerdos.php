<?php  
 $connect = mysqli_connect("mysql.s461.sureserver.com", "semara", "8ncQZGNQ", "semara_transparencia");  
 $query ="select * from transparencia  order by fecha ";
 mysqli_set_charset($connect, "utf8"); 
 $result = mysqli_query($connect, $query);  
 ?>   


<!DOCTYPE html>
<html dir="ltr" lang="en-ES">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Tribuanl" />
        <link rel="shortcut icon" type="image/png" href="images/mini.png"/>

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i|Play+Fair:700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<!-- Bootstrap Data Table Plugin -->
	<link rel="stylesheet" href="css/components/bs-datatable.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>LISTA DE ACUERDOS</title>

</head>

<body class="stretched no-transition">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php $page = 'two'; include('header.php'); ?>		

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix center">
				<h1>LISTA DE ACUERDOS</h1>				
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">


				    <div class="table-responsive">
						<table id="employee_data" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									
									<th>Fecha de publicación</th>	
                                    <th>Ponencia</th>
                                    <th>Tipo</th>
									<th>Expediente</th>
									<th>Nombre del procesado o recurrente</th>
									<th>Autoridad(es)</th>
									<th>Fecha del acuerdo</th>
									<th>Síntesis</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									
									<th>Fecha de publicación</th>	
                                    <th>Ponencia</th>
                                    <th>Tipo</th>
									<th>Expediente</th>
									<th>Nombre del procesado o recurrente</th>
									<th>Autoridad(es)</th>
									<th>Fecha del acuerdo</th>
									<th>Síntesis</th>
								</tr>
							</tfoot>
							<tbody>
								<?php while($row = mysqli_fetch_array($result))
									{ echo '  
	                                    <tr>         
	 
		                                    <td>'.$row["fecha"].'</td>
                                            <td>'.$row["ponencia"].'</td>
			                                <td>'.$row["tipo"].'</td>
                                            <td>'.$row["expediente"].'</td>
                                            <td>'.$row["nombre_pro"].'</td>
                                            <td>'.$row["autoridad"].'</td>
			                                <td>'.$row["fecha_acu"].'</td>
                                            <td>'.$row["sintesis"].'</td>          
	                                    </tr> ';  
	                                }  
                                ?> 
								
							</tbody>
						</table>
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
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Bootstrap Data Table Plugin -->
	<script src="js/components/bs-datatable.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>

		$(document).ready(function() {
			
			$('#employee_data').dataTable(
				{ "order": [[ 0, "desc" ]]
                });
		});

	</script>

</body>
</html>
