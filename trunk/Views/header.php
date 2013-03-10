
	<head>
		<title><?php echo $title?></title>
		<?php //include_once("analyticstracking.php") ?>
		<meta  charset="iso-8859-1"> 
		<title>Eventaiser</title>
		<link rel="shortcut icon" href="../Views/img/favicon1.ico">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		
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
		
		<!-- jplayer -->
		<link href="../Views/player-skin/jplayer-black-and-yellow.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../Views/js/jquery.jplayer.min.js"></script>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="../Views/css/flexslider.css" >
		<script src="../Views/js/jquery.flexslider.js"></script>
		
		<!-- reply move form -->
		<script src="../Views/js/moveform.js"></script>
		
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
		</ul><!-- ends nav -->
		<ul id="social-bar" class="cf sb">
			<li><a href="http://www.facebook.com/eventaiser"  title="Vuelvete fan" class="facebook">Facebbok</a></li>
			<li><a href="http://twitter.com/Eventaiser" title="Siguenos en twitter" class="twitter"></a></li>
			<?php //<li><a href="http://plus.google.com" title="Enter my circles" class="plus"></a></li> ?>
		</ul>
	</div>
</header><!-- ENDS HEADER -->