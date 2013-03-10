<!doctype html> 



<html class="no-js">

	<head>
		<!-- GOOGLE MAPS -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		
		<?php //include_once("analyticstracking.php") ?>
		

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>  
		
		
		<link type="text/css" href="Views/css/jquery.ui.core.css" rel="stylesheet" />
		<link type="text/css" href="Views/css/jquery.ui.theme.css" rel="stylesheet" />
		<link type="text/css" href="Views/css/jquery.ui.selectmenu.css" rel="stylesheet" />
		<script type="text/javascript" src="Views/js/jquery-1.8.3.js"></script>
		<script type="text/javascript" src="Views/js/jquery.ui.core.js"></script>
		<script type="text/javascript" src="Views/js/jquery.ui.widget.js"></script>
		<script type="text/javascript" src="Views/js/jquery.ui.position.js"></script>

		<script type="text/javascript" src="Views/js/jquery.ui.selectmenu.js"></script>
		
			
			
		<style type="text/css">
			/* demo styles */
			select,.ui-select-menu { float: left; margin-right: 10px; }
			select { width: 200px; }
			.wrap ul.ui-selectmenu-menu-popup li a { font-weight: bold; }
		</style>
		
		<script type="text/javascript">

		</script>
		
		
		<script>
			
		
		    $(function() {
		    	$.datepicker.regional['es'] = {
		    		      closeText: 'Cerrar',
		    		      prevText: '<Ant',
		    		      nextText: 'Sig>',
		    		      currentText: 'Hoy',
		    		      monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		    		      monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
		    		      dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		    		      dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
		    		      dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
		    		      weekHeader: 'Sm',
		    		      dateFormat: 'dd/mm/yy',
		    		      firstDay: 1,
		    		      isRTL: false,
		    		      showMonthAfterYear: false,
		    		      yearSuffix: ''};
				$.datepicker.setDefaults($.datepicker.regional['es']);



			    
		    	$( "#fechaie" ).datepicker( { dateFormat: 'yy-mm-dd'} ).val();

		        
		    });
		    
		    $(function() {
		        $( "#fechafe" ).datepicker( { dateFormat: 'yy-mm-dd'} ).val();
		    });
		    $(function() {
		        $( "#tipo" ).menu();

			});
			
		    $(function() {
		    	$( "#tipo2" ).selectmenu();

			});
		</script>
		
		<style>
		//.ui-menu { width: 170px; }
		</style>
		<script type="text/javascript" src="Views/js/form-validation.js"></script>
</head>
<body class="page">
	
<?php 
		require( 'Views/header.php');
		?>
		
		<!-- MAIN -->

		<div id="main">
			<div class="wrapper cf">
			
			
			<!-- masthead -->
			<div class="masthead cf">
				Crear Evento
			</div>
			<!-- ENDS masthead -->
			
			
			<!-- Form -------------------------->
			<form id="contactForm"  action="Views/nuevoevento.php" method="post" >
			<!-- Datos Generales-->
        	<div id="pageC-content-sb" class="cf">        	
	        		
	        	<!-- entry-content -->	
	        	<div class="entryC-content cf">
	        		
					<div class="elemento">Datos Generales de tu Evento</div>			
					<div class="elemento-container">
					
						<label for="nombre" >Nombre del Evento</label>
						<input name="nombre"  id="nombre" type="text" class="form-poshytip" title="Nombre de tu Evento" />
					
						<label for="fechaie" >Fecha Inicio</label>
						<input name="fechaie"  id="fechaie" type="text" class="form-poshytip" title="Dia que empieza tu Evento" />
					
						<label for="hora">Hora de Inicio</label>
						<input id="hora" name="hour" value="0" />
  						<input class="min" name="min" value="0" />
					
						<label for="fechafe">Fecha Fin</label>
						<input name="fechafe"  id="fechafe" type="text" class="form-poshytip" title="Dia que termina tu evento" />
					
						<label for="idtipoevento"">Tipo Evento</label>
						<select name="idtipoevento" id="idtipoevento"  class="form-poshytip" title="Requerido">
						<?php 
							for($i=0;$i<count($tipos);$i++)
						  		echo '<option id="idtipoevento" value="'.$tipos[$i]->idtipoevento.'">'.$tipos[$i]->descripcion.'</option>';
						 ?>
						</select>
				
						<label for="precio">Precio</label>
						<input name="precio"  id="precio" type="text" class="form-poshytip" title="Cuanto vas a cobrar" />
					
						<label for="descripcion">Descripcion</label>
						<textarea  name="descripcion"  id="descripcion" rows="5" cols="20" class="form-poshytip" title="Descripcion del evento o algun otro detalle que quieras agregar"></textarea>
						
					
					
					</div>
					
					<div class="elemento">Web</div>			
					<div class="elemento-container">
					
						<label for="name" >Website</label>
						<input name="name"  id="name" type="text" class="form-poshytip" title="URL del website de los organizadores" />
					
						<label for="precio">URL Facebook</label>
						<input name="precio"  id="precio" type="text" class="form-poshytip" title="Inserta la URL de tu evento en facebook" />
						
						<label for="precio">Fanpage Facebook</label>
						<input name="precio"  id="precio" type="text" class="form-poshytip" title="Inserta el Fanpage de facebook tiene que ser lo que va a despues facebook.com/NOMBREDETUSITIO" />
						
						<label for="precio">URL Twitter</label>
						<input name="precio"  id="precio" type="text" class="form-poshytip" title="URL de twitter" />
					
					
					</div>
					
							
				</div>
				<!-- ENDS entry content -->
				
    		</div>
    		<!-- ENDS Datos Generales-->
			
			<!-- sidebar -->
        	<aside id="sidebarC">
        		
        		<ul>
        			<div class="elemento">Imagen</div>			
					<div class="elemento-container">
					
						<label for="name" >Imagen de tu evento</label>
						<input name="name"  id="name" type="text" class="form-poshytip" title="URL del website de los organizadores" />
					
						
						<input type="button" value="Aceptar">
						
					
					
					</div>
        		
	        		<div class="elemento">Donde</div>			
					<div class="elemento-container">
						
						<label>Lugar</label>
							<input name="lugar"  id="lugar" type="text" class="postcode" class="form-poshytip" title="Requerido" /> 
						 	<style>
					            .ui-autocomplete {
					                background-color: white;
					                width: 300px;
					                border: 1px solid #cfcfcf;
					                list-style-type: none;
					                padding-left: 0px; font-family:Arial, Helvetica, sans-serif; cursor:pointer; font-size:12px;
					            }
					            .ui-menu-item {
					            	padding:3px 0;
					            }
					        </style>
							
							
					       			       
					        <div>
								<label>Dirección</label>
								<p>
								<div>
									<input class="postcode" id="Postcode" name="direccion" type="text" class="form-poshytip" title="Requerido">
									<input type="button" value="Aceptar">
								</div> 
								</p>
		
							</div>
							<hr>
					        <div id="geomap" style="width:320px; height:300px;">
					            <p>Cargando Mapa...</p>
					        </div>
					        
					        <input id="hidLat" name="hidLat" type="hidden" value="">
					        <input id="hidLong" name="hidLong" type="hidden" value="">  
					        <div>
								<label>Coordenadas</label>
								<input name="coordenadas"  id="coo" type="text" class="form-poshytip" title="Requerido" />
							</div>
					        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
					        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>                
					        <script type="text/javascript">
					        var PostCodeid = "#Postcode";
					        var lugar = "#lugar";
					        var longval = "#hidLong";
					        var latval = "#hidLat";
					        var geocoder;
					        var map;
					        var marker;
					        function initialize() {
					            //MAP
					            var initialLat = $(latval).val();
					            var initialLong = $(longval).val();
					            if (initialLat == '') { 
					                initialLat = "22.77566709138918";
					                initialLong = " -102.57244705556911";
					            }
					            var latlng = new google.maps.LatLng(initialLat, initialLong);
					            var options = {
					                zoom: 16,
					                center: latlng,
					                mapTypeId: google.maps.MapTypeId.ROADMAP
					            };
					        
					            map = new google.maps.Map(document.getElementById("geomap"), options);
					        
					            geocoder = new google.maps.Geocoder();    
					        
					            marker = new google.maps.Marker({
					                map: map,
					                draggable: true,
					                position: latlng
					            });
					        
					            google.maps.event.addListener(marker, "dragend", function (event) {
					                var point = marker.getPosition();
					               
					                map.panTo(point);

					                $('#coo').val(point);

					                
					                  
					            });
					            
					        };
					        
					        $(document).ready(function () {
					        
					            initialize();
					        
					            $(function () {
					                $(PostCodeid).autocomplete({
					                    //This bit uses the geocoder to fetch address values
					                    source: function (request, response) {
					                        geocoder.geocode({ 'address': request.term }, function (results, status) {
					                            response($.map(results, function (item) {
					                                return {
					                                    label: item.formatted_address,
					                                    value: item.formatted_address
					                                };
					                            }));
					                        });
					                    }
					                });
					            });

					            $(function () {
					                $(lugar).autocomplete({
					                    //This bit uses the geocoder to fetch address values
					                    source: function (request, response) {
					                        geocoder.geocode({ 'address': request.term }, function (results, status) {
					                            response($.map(results, function (item) {
					                                return {
					                                    label: item.formatted_address,
					                                    value: item.formatted_address
					                                };
					                            }));
					                        });
					                    }
					                });
					            });
					        
					            $('#Postcode').blur(function (e) {
					            	if($('#Postcode').val()!=""){
						                var address = $(PostCodeid).val();
						                geocoder.geocode({ 'address': address }, function (results, status) {
						                    if (status == google.maps.GeocoderStatus.OK) {
						                        map.setCenter(results[0].geometry.location);
						                        marker.setPosition(results[0].geometry.location);
						                        $(latval).val(marker.getPosition().lat());
						                        $(longval).val(marker.getPosition().lng());
						                        $('#coo').val(marker.getPosition());
						                    } else {
						                        alert("Ingresar un lugar: " + status);
						                    }
						                });
						                e.preventDefault();
					            	}
					            });
					            
					            $('#lugar').blur(function (e) {
					            	if($('#lugar').val()!=""){
						                var address = $(lugar).val();
						                geocoder.geocode({ 'address': address }, function (results, status) {
						                    if (status == google.maps.GeocoderStatus.OK) {
						                        map.setCenter(results[0].geometry.location);
						                        marker.setPosition(results[0].geometry.location);
						                        $(latval).val(marker.getPosition().lat());
						                        $(longval).val(marker.getPosition().lng());
						                        $('#coo').val(marker.getPosition());
						                    } else {
						                        alert("Ingresar un lugar: " + status);
						                    }
						                });
						                e.preventDefault();
					            	}
					            });
					        
					            //Add listener to marker for reverse geocoding
					            google.maps.event.addListener(marker, 'drag', function () {
					                geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
					                    if (status == google.maps.GeocoderStatus.OK) {
					                        if (results[0]) {
					                            $(latval).val(marker.getPosition().lat());
					                            $(longval).val(marker.getPosition().lng());
					                        }
					                    }
					                });
					            });
					        
					        });
					
					    </script>
						
						
						
					</div>
					<div class="elemento">Contacto</div>			
					<div class="elemento-container">
					
						<label for="name" >Email</label>
						<input name="name"  id="name" type="text" class="form-poshytip" title="Email para que se puedan a poner en contacto contigo" />
					
				
						<label for="precio">Telefono</label>
						<input name="precio"  id="precio" type="text" class="form-poshytip" title="Telefono para que hagan reservaciones o se pongan en contacto contigo" />
	
					</div>
        		</ul>
        		
        	</aside>
			<!-- ENDS sidebar -->
			<p><input type="submit" value="CREAR" name="submit" id="submit"  class="form-poshytip link-button" title="Crear evento"/></p>
			</form>
			<!-- ENDS Form -->
			
			</div><!-- ENDS WRAPPER -->
		</div>
		
		<!-- ENDS MAIN -->
		<!-- FOOTER -->
		<?php 
		include 'Views/footer.php';
		?>
		<!-- ENDS FOOTER -->
		
	</body>
	
	
	
</html>