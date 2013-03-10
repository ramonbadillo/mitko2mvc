<!doctype html> 
<html class="no-js">

	<head>
	<?php 
		include 'DB/db.php';
		include 'models/Evento.php';
	    include 'models/Tipoevento.php';
	    include 'fechass.php';
		$db= db::dbini();
		
		$month= date("n");
		$year=date("Y");
		if(isset($_GET['month']))
			$month = $_GET['month'];
		if(isset($_GET['year']))
			$year = $_GET['year'];
		$fecha=$year."-".$month;

	?>	
		<?php include_once("analyticstracking.php") ?>
		<meta  charset="iso-8859-1"> 
		<title>Calendario</title>
		<link rel="shortcut icon" href="../img/favicon1.ico">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="../css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
				
		<!-- JS -->
		<script src="../js/jquery-1.7.1.min.js"></script>
		<script src="../js/custom.js"></script>
		<script src="../js/tabs.js"></script>
		<script src="../js/css3-mediaqueries.js"></script>
		<script src="../js/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="../js/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src="../js/jquery.easing.js"></script>
		<script src="../js/lof-slider.js"></script>
		<link rel="stylesheet" href="../css/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="../css/jquery.tweet.css" media="all"  /> 
		<script src="../js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="../css/superfish.css" /> 
		<script  src="../js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="../js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="../js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="../js/prettyPhoto/../js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="../js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		
		
		<!-- JCarousel -->
		<script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="../css/carousel.css" /> 
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

		<!-- modernizr -->
		<script src="../js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="../css/skin.css"/>
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="../css/lessframework.css"/>
		
		<!-- jplayer -->
		<link href="player-skin/jplayer-black-and-yellow.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../js/jquery.jplayer.min.js"></script>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="../css/flexslider.css" >
		<script src="../js/jquery.flexslider.js"></script>
		
		<!-- reply move form -->
		<script src="../js/moveform.js"></script>
		
		<!-- poshytip -->
		<link rel="stylesheet" href="../js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="../js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="../js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Add jQuery library -->
	<script type="text/javascript" src="../lib/jquery-1.9.0.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="../source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.4" media="screen" />

	<script type="text/javascript">	 
		function display() {
			$(".manual").click(function () {
				var msg = $(this).attr('ids');
				$.fancybox.open({					
					href : "eventos_del_dia.php?f="+msg,
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
			xmlhttp.open('POST', 'mes.inc.php' ,true);
			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameters);
		});
	</script>

	</head>
	
	
	<body class="single">
		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				<div id="logo">
					<a href="index.php"><img  src="../img/logo.png" alt="Simpler"></a>
				</div>
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li><a href="index.php">INICIO</a></li>
					<li class="current-menu-item"><a href="calendario">CALENDARIO</a></li>
					<li><a href="categorias">CATEGORIAS</a>
						<ul>
						<?php 
							$tipos= TipoEvento::find('all', array('order' => 'descripcion asc'));
							for($i=0;$i<count($tipos);$i++)
								echo '<li><a href="index.php?t='.$tipos[$i]->idtipoevento.'"><span>'.$tipos[$i]->descripcion.'</span></a></li>';
						?>
							
						</ul>
					</li>
					<li><a href="crear.php">SUBIR EVENTO</a></li>
					
					<li><a href="contacto.php">CONTACTO</a></li>
				
				<div class="top-search">
				<form  method="get" id="searchform" action="resultado_busqueda.php">
					<div>
						<input href="#" type="text" placeholder="Buscar..." name="b" id="s" />
						<input type="submit" id="searchsubmit" value=" "  class="poshytip facebook" title="buscar evento">
					</div>
					
				</form>
				
			</div>
				</ul>
				
				
				<!-- ends nav -->
				<ul id="social-bar" class="cf sb">
					<li><a href="http://www.facebook.com/eventaiser"  title="Vuelvete fan" class="facebook">Facebbok</a></li>
					<li><a href="http://twitter.com/Eventaiser" title="Siguenos en twitter" class="twitter"></a></li>
					<?php //<li><a href="http://plus.google.com" title="Enter my circles" class="plus"></a></li> ?>
				</ul>
				<!-- ends nav -->
			</div>
		</header>
		<!-- ENDS HEADER -->
		
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			<?php
				/*
				$monthName = date("F", mktime(0, 0, 0, $month, 1));
				//$day = date('j');
				$total = date("t",mktime(0,0,0,$month,1,$year));
				$primero = date("w", mktime(0,0,0,$month,1,$year));
				$tempDays = $primero + $total;
				$semanas = ceil($tempDays/7);
				$restantes = ($semanas * 7) - $tempDays;
				$dateMas = strtotime(date("Y-m-d", strtotime('1-'.$month.'-'.$year)) . " +1 month");
				$dateMenos = strtotime(date("Y-m-d", strtotime('1-'.$month.'-'.$year)) . " -1 month");
				*/
			?>
				
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
				xmlhttp.open('POST', 'mes.inc.php' ,true);
				xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xmlhttp.send(parameters);
				
				
			}

			
			</script>
			
			<!-- masthead -->
			<div class="masthead cf">
				
				<?php echo '<div id="flechas" onclick="cambiaMes(false)" >'?>
				<img src="../img/mono-icons/leftarrow32.png" title="Mes anterior" alt="Mes anterior" class="flechaiz" />
				</div>
				<span class="mesTitulo" id="mesTitulo"></span>
				<?php echo '<div id="flechas" onclick="cambiaMes(true)">'?>
				<img src="../img/mono-icons/arrowright32.png" alt="Mes siguiente" title="Mes siguiente" class="flechade" />
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
			<?php include 'footer.php'; ?>
		<!-- ENDS FOOTER -->
	</body>
</html>