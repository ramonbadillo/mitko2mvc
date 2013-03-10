<?php

?>
<head>
	<meta  charset="iso-8859-1"> 
		<?php 
		//<meta charset="utf-8"/>
		?>
		
		<title>Eventaiser</title>
		<link rel="shortcut icon" href="../Views/img/favicon1.ico">
		 
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="../Views/css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
				
		<!-- JS -->
		<script src="../Views/js/jquery-1.7.1.min.js"></script>
		<script src="../Views/js/custom.js"></script>
		<script src="../Views/js/tabs.js"></script>
		<script src="../Views/js/css3-mediaqueries.js"></script>
		<script src="../Views/js/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="../Views/js/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src="../Views/js/jquery.easing.js"></script>
		<script src="../Views/js/lof-slider.js"></script>
		<link rel="stylesheet" href="../Views/css/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="../Views/css/jquery.tweet.css" media="all"  /> 
		<script src="../Views/js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="../Views/css/superfish.css" /> 
		<script  src="../Views/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="../Views/js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="../Views/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="../Views/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="../Views/js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="../Views/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="../Views/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="../Views/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- JCarousel -->
		<script type="text/javascript" src="../Views/js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="../Views/css/carousel.css" /> 
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

		<!-- modernizr -->
		<script src="../Views/js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="../Views/css/skin.css"/>
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="../Views/css/lessframework.css"/>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="../Views/css/flexslider.css" >
		<script src="../Views/js/jquery.flexslider.js"></script>

	    <link rel='stylesheet' id='camera-css'  href='../Views/css/camera.css' type='text/css' media='all'> 
	    <style>
			
			.fluid_container {
				max-width: 650px;
				//width: 90%;
			}
		</style>

	    <script type='text/javascript' src='../Views/scripts/jquery.min.js'></script>
	    <script type='text/javascript' src='../Views/scripts/jquery.mobile.customized.min.js'></script>
	    <script type='text/javascript' src='../Views/scripts/jquery.easing.1.3.js'></script> 
	    <script type='text/javascript' src='../Views/scripts/camera.min.js'></script> 

	    <script>
			jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					thumbnails: false,
					fx: 'scrollBottom'
					
				});
			});
		</script>
		
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=296468373786140";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</head>
	<!-- HEADER -->
	<header>
		<div class="wrapper cf">
			<div id="logo">
				<a href="/"><img  src="../Views/img/logo.png" alt="Simpler"><spam id="slogan">Eventos cerca de ti</spam></a>
			</div>
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li class="current-menu-item"><a href="/">INICIO</a></li>
					<li><a href="/calendario">CALENDARIO</a></li>
					<li><a href="/categorias">CATEGORIAS</a>
						<ul>
						<?php 
							for($i=0;$i<count($tipos);$i++)
								echo '<li><a href="'.$tipos[$i]->descripcion.'"><span>'.$tipos[$i]->descripcion.'</span></a></li>';
						?>
							
						</ul>
					</li>
					<li><a href="/crear">SUBIR EVENTO</a></li>
					<li><a href="/contacto">CONTACTO</a></li>
					<div class="top-search">
						<form id="searchform" >
							<div>
								<input  type="text" placeholder="Buscar..." id="s" onkeydown="buscar()" />
								<input id="searchsubmit" class="poshytip facebook" title="buscar evento" onClick="buscar()">
								<script type="text/javascript">
									function buscar(){
								        if (event.keyCode == 13) {
											var buscar= document.getElementById("s").value;
											if(buscar!='')
												window.location = "/evento/"+buscar;
								        }
									}
								</script>
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
				
				<!-- SLIDER -->	
				
			<div class="fluid_container">
	        	<div class="camera_wrap" id="camera_wrap_1" >
	        		<div data-thumb="../Views/img/Ins1.png" data-src="../Views/img/Ins1.png" data-link="categorias">
                		
            		</div>
	        		<?php
	        		//$eSlider=Evento::find('all', array('conditions' => "idpaquete='2'" ));
	        		$cuenta= count($eSlider);
	        		for($i=0;$i<$cuenta;$i++){
						$anio = strtok($eSlider[$i]->fechaie, '-');
						$mes = strtok('-');
						$dia = strtok('-');
						echo '<div data-thumb="../Views/images/'.$eSlider[$i]->idevento.'.jpg" data-src="../Views/images/'.$eSlider[$i]->idevento.'.jpg" data-link="/evento/'.$eSlider[$i]->idevento. '">';
							echo '<div style="position:absolute; top:5%; left:5%; background:#000; color:#fff; padding:5px; width:10%" class="fadeIn camera_effected"><p>'.get_date_spanish(strtotime('01-'.$mes.'-'.$anio), true, 'month').'</p>'.$dia.'</div>';
							echo '<div class="camera_caption fadeFromBottom">';
							echo '<em>'.$eSlider[$i]->nombre.'</em>';
							echo '</div>';
						echo '</div>';
					
					}
	        		?>		            
	            </div>
	         </div> 
	        
	        <div id="ahora">
	        	<h4>Ahora en Eventaiser</h4>
	        	<div class="metas">
					
					<?php 
					$idias=0;
					//$month = $_GET['month'];
					//$year = $_GET['year'];
					$fechap=null;
					$eventoshoy=Evento::find('all', array('conditions' => array('fechaie >= ?', date('Y-m-d')), 'order' => 'fechaie asc , hora asc', 'limit' => 6));
					$times= count($eventoshoy);
					for($i=0;$i<$times;$i++){

						if($fechap!=$eventoshoy[$i]->fechaie){
							$idias++;
							//if($idias>=3){
								
								$anio = strtok($eventoshoy[$i]->fechaie, '-');
								$mes = strtok('-');
								$dia = strtok('-');
								//$fechapp = new DateTime("$dia/$mes/$anio");
								//$fechapp = new DateTime($dia.'/'.$mes.'/'.$anio);
								$fechapp = strtotime($dia.'-'.$mes.'-'.$anio);
								if($fechapp == mktime(0, 0, 0, date("m")  , date("d"), date("Y"))){
									//echo $dia.' de '.get_date_spanish(strtotime($eventoshoy[$i]->fechaie), true, 'month');
									echo 'HOY';
									//echo '<hr>';
								}elseif ($fechapp == mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"))){
									//echo $dia.' de '.get_date_spanish(strtotime($eventoshoy[$i]->fechaie), true, 'month');
									echo 'Mañana';
									//echo '<hr>';	
								}else{
									echo $dia.' de '.get_date_spanish(strtotime($eventoshoy[$i]->fechaie), true, 'month');
									//echo '<hr>';	
								}
							//}
						}
						
						//if($idias>=3){
						
							echo '<span style="background: url(../Views/img/catego/'.$eventoshoy[$i]->idtipoevento.'.png) no-repeat 0px 0px; background-size: 30px 30px" ><span>'.date('g:i a',strtotime($eventoshoy[$i]->hora)).'</span><a href="/evento/'.$eventoshoy[$i]->idevento. '" class="thumb"  >'.substr($eventoshoy[$i]->nombre,0,16).'</span></a>';
							$fechap=$eventoshoy[$i]->fechaie;
						//}
					}?>
					
					</div>
				</div>
        <!-- #camera_wrap_1 -->
				<!-- ENDS SLIDER -->
			</div>
		</header>
		<!-- ENDS HEADER -->