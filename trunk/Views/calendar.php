<!doctype html> 
<html class="no-js">
	<?php include_once("analyticstracking.php") ?>
		<title>Calendario</title>
		
		
		<!-- poshytip -->
		<link rel="stylesheet" href="../Views/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="../Views/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="../Views/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Add jQuery library -->
	<script type="text/javascript" src="../Views/lib/jquery-1.9.0.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../Views/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../Views/source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="../Views/source/jquery.fancybox.css?v=2.1.4" media="screen" />

	<script type="text/javascript">	 
		function display() {
			$(".manual").click(function () {
				var msg = $(this).attr('ids');
				$.fancybox.open({					
					href : "/Views/eventos_del_dia.php?f="+msg,
					type : 'iframe',
					autoDimensions: false,
					padding : 5
				});
			});
		}
		
		$(document).ready(function cargarmes(){
			if (window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById('calendario').innerHTML = xmlhttp.responseText;
					display();
					document.getElementById('mesTitulo').innerHTML = monthNames[mes]+' '+anio;
				}
			}
			parameters = 'month='+ <?php echo date("n"); ?> +'&& year='+<?php echo date("Y"); ?>;
			xmlhttp.open('POST', '/Views/mes.inc.php' ,true);
			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameters);
		});
	</script>

	</head>
	<body class="single">
	<?php 
		require( 'Views/header.php');
		?>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			<script type="text/javascript">
			var mes = <?php echo date("n"); ?>;
			var anio = <?php echo date("Y"); ?>;
			var monthNames = ["","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiempre", "Octubre", "Noviembre", "Diciembre" ];
		
			function cambiaMes(mas){
				if(mas){
					if(mes >=12){
						mes=1;
						anio=anio+1;
					}
					else
						mes=mes+1;
				}else{
					if(mes <= 1){
						mes=12;
						anio=anio-1;
					}
					else
						mes=mes-1;
				}
				if (window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();
				} else {
					xmlhttp = ActiveXObject('Microsoft.XMLHTTP');
				}
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
						document.getElementById('calendario').innerHTML = xmlhttp.responseText;
						display();
						document.getElementById('mesTitulo').innerHTML = monthNames[mes]+' '+anio;
					}
				}
				parameters = 'month='+mes +'&& year='+anio;
				xmlhttp.open('POST', '/Views/mes.inc.php' ,true);
				xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xmlhttp.send(parameters);
				
				
			}

			
			</script>
			
			<!-- masthead -->
			<div class="masthead cf">
				
				<?php echo '<div id="flechas" onclick="cambiaMes(false)" >'?>
				<img src="../Views/img/mono-icons/leftarrow32.png" title="Mes anterior" alt="Mes anterior" class="flechaiz" />
				</div>
				<span class="mesTitulo" id="mesTitulo"></span>
				<?php echo '<div id="flechas" onclick="cambiaMes(true)">'?>
				<img src="../Views/img/mono-icons/arrowright32.png" alt="Mes siguiente" title="Mes siguiente" class="flechade" />
				</div>				
				
				<?php 
				/*
				$tipos= TipoEvento::all();
				for($i=0;$i<count($tipos);$i++)
					echo '<input type="checkbox" name="option1" value="Milk">'.$tipos[$i]->descripcion.'';
				*/
				?>
				
				
			</div>
			<!-- ENDS masthead -->
			
			
				
			<!-- posts list -->
        	<div id="posts-list-calendario" class="cf">        	
	        		
	        <div class="calendario" id="calendario">	
					
	
			</div>		
				
				
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		
		
		<!-- FOOTER -->
			<?php include '/Views/footer.php'; ?>
		<!-- ENDS FOOTER -->
	</body>
</html>