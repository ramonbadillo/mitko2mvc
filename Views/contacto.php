<!doctype html> 
<html class="no-js">
	<body class="page" onload="">	
		<?php 
			require( 'Views/header.php');
		?>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
				<!-- page content-->
        		<div id="page-content" class="cf">        	
		        	<!-- Map -->
					<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true" /></script>
					<script type="text/javascript">
						function initialize() {
							var latlng = new google.maps.LatLng(22.770856,-102.583243);
							var myOptions = {
							  zoom: 15,
							  center: latlng,
							  mapTypeId: google.maps.MapTypeId.ROADMAP
						};
						var map = new google.maps.Map(document.getElementById("map_canvas"),
						    myOptions);
						}
					</script>
					<div id="map-holder">
						<div id="map_canvas"></div>
						<div id="map-content">
							<p ><h2>CONTACTANOS</h2></p>
	        				<p><h4>Si quieres que publiquemos tu evento <strong>GRATIS </strong> en nuestra página, mándanos la información de tu evento, con los detalles:</h4></p>
							<div class="lists-check">
								<span class="pullquote-right">SI QUIERES EVENTAISER PARA TU CIUDAD LLAMANOS AL (492)145-2717 O MANDANOS UN CORREO A <a href="mailto:contacto@eventaiser.com">contacto@eventaiser.com</a></span>
								<ul>
									<li>nombre</li>
									<li>fecha </li>
									<li>horario</li>
									<li>lugar</li>
									<li>descripción</li>
									<li>imagen</li>
									<li>etc</li>
								</ul>
							</div>
						</div>
					</div><!-- ENDS Map -->
				</div><!-- ENDS page content-->
			</div><!-- ENDS WRAPPER -->
		</div><!-- ENDS MAIN -->
		<!-- FOOTER -->
		<?php include 'footer.php'; ?>		
		<!-- ENDS FOOTER -->		
		<!-- Start google map -->
		<script>initialize();</script>
	</body>
</html>