<?php  
 $connect = mysqli_connect("mysql.s461.sureserver.com", "semara", "8ncQZGNQ", "semara_transparencia");  
 $query ="SELECT * FROM transparencia "; 
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
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/calendar.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	

	

	<!-- Document Title
	============================================= -->
	<title>LISTA DE ACUERDOS</title>

</head>

<body class="stretched no-transition">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php $page = 'none'; include('header.php'); ?>		

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix center">
				<h1>LISTA DE ACUERDOS</h1>				
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section class="content">

			<div class="content-wrap notoppadding nobottompadding">

				<div class="section parallax nomargin notopborder" style="background: url('images/transparencia/en-espera-2.png') center center; padding: 150px 0;" data-stellar-background-ratio="0.3">
					
                    <div class="center clearfix">

					    <div class="container">

					        <div class="table-responsive">
						
                                <table id="employee_data" class="table table-striped table-bordered">  
                                     <thead>  
                                         <tr>  
                                             
                                                  
													<th>Fecha De Publicacion</th>	
                                                    <th>Ponencia</th>
						   							<th>Tipo</th>
													<th>Expediente</th>
													<th>Nombre Del Procesado O Recurrente</th>
													<th>Autoridad(es)</th>
						 							<th>Fecha De Acuerdo</th>
													<th>Sintesis</th>
                                        </tr>  
                                    </thead>  
                                         <?php  
                                            while($row = mysqli_fetch_array($result)){  
                                                    echo '  
                                                            <tr>  
                                
                                                              
                                                            <td>'.$row["fecha"].'</td>
                                                            <td>'.$row["ponencia"].'</td>
							                                <td>'.$row["tipo"].'</td>
                                                            <td>'.$row["expediente"].'</td>
                                                            <td>'.$row["nombre_pro"].'</td>
                                                            <td>'.$row["autoridad"].'</td>
							                                <td>'.$row["fecha_acu"].'</td>
                                                            <td>'.$row["sintesis"].'</td>          
                                                              </tr>  
                               ';  
                          }  
                          ?>  
                             </table>

</div>			

</div>

</div>	   				

</div>

</section><!-- #content end -->
</body>

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

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>


</html>
<script>  
$(document).ready(function(){  
$('#employee_data').DataTable();  
});  
</script>

