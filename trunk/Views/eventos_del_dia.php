<!doctype html>

<?php

		$month= date("n");
		$year=date("Y");
		$f=null;
		$tipo=null;
		$db= db::dbini();

		if(isset($_GET['f'])) 
			$f=$_GET["f"];

			$u=Evento::find('all', array('conditions' => array('fechaie = ?', $f), 'order' => 'hora asc'));		


		
?>

<html class="no-js">

	<head>
		<meta  charset="iso-8859-1"> 
		<?php 
		//<meta charset="utf-8"/>
		?>
		
		<title>Eventaiser</title>
		 
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="../css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
				
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="../css/superfish.css" /> 
		<script  src="../js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="../js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="../js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="../js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="../js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="../js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="../js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="../js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
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
		
		<!-- flexslider -->
		<link rel="stylesheet" href="../css/flexslider.css" >
		<script src="../js/jquery.flexslider.js"></script>

	</head>
	
	
	<body class="home">
	
		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				
				<?php 
				
				$anio = strtok($f, '-');
				$mes = strtok('-');
				$dia = strtok('-');
				?>
				<?php echo '<a href="fecha/'.date('Y-m-d', strtotime($f. ' - 1 days')).'">' ?>
				<img src="../img/mono-icons/leftarrow32.png" title="Mes anterior" alt="Mes anterior" class="flechaiz" />
				</a>
				<span class="mesTitulo" id="mesEnDias"><?php  echo $dia.' de '.get_date_spanish(strtotime('01-'.$mes.'-'.$anio), true, 'month').' '.$anio ?></span>
				<?php echo '<a href="fecha/'.date('Y-m-d', strtotime($f. ' + 1 days')).'">' ?>
				<img src="../img/mono-icons/arrowright32.png" alt="Mes siguiente" title="Mes siguiente" class="flechade" />
				</a>	
				<div id="logochico">
					<a href="index.php" target="_parent"><img src="../img/logo.png" alt="Eventaiser.com" height="40%" width="40%"></a>
				</div>
				
				
				
				<!-- nav -->
				
				
				<div id="combo-holder"></div>
							</div>
		</header>
		<!-- ENDS HEADER -->
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
							
			<!-- featured -->
			<div class="home-featured">
				
				<!-- Filter container -->
				<div id="filter-container" class="cf">
				
					<?php $times= count($u);?>
					<table>
					
					<?php
					if($times>0){
						echo '<div id="day_event_out">';
						$horapasada=null;
						$colNum=1;
						for($i=0;$i<$times;$i++){
								
								if($i!=0)
									$horapasada=$u[$i-1]->hora;
								if($horapasada!=$u[$i]->hora){
									echo '<div id="day_event_hour">';
									echo '<h4>';
									echo '<hr>';
									echo date('g:i a',strtotime($u[$i]->hora));
									echo '<hr>';
									echo'</h4>';
									echo '<br>';
									echo '</div>';
								}
								
								echo '<div id="day_event_events">';
								//echo '<img style="float:right" src="img/social/drupal.png">';
								echo '<span class="user"></span></a>';
								echo '<div class="recent-post cf">';
								echo ' <a href="evento/'.$u[$i]->idevento. '" target="_parent" class="thumb"  ><img id="thumbs70" style="width:108px;height: 70px;" src="../images/'.$u[$i]->idevento.'.jpg" alt="Post" /></a>';
								echo ' <div class="post-head">';
								echo ' <a href="evento/'.$u[$i]->idevento. '" target="_parent">'.$u[$i]->nombre.'</a><span>'.$u[$i]->lugar.'</span>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
						} 
					}else{
						echo '<h4>No hay eventos en este dia</h4>';
					}
					echo '</div>';
					?>
					</table>
							
				</div><!-- ENDS Filter container -->
				
			</div>
			<!-- ENDS featured -->
		
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
		<!-- FOOTER -->
			
		<!-- ENDS FOOTER -->
		
	</body>
</html>