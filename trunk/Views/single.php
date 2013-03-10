<!doctype html> 
<html class="no-js">
	<head>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		
		<!-- Add jQuery library -->
		<script type="text/javascript" src="../Views/lib/jquery-1.9.0.min.js"></script>
	
		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="../Views/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	
		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="../Views/source/jquery.fancybox.js?v=2.1.4"></script>
		<link rel="stylesheet" type="text/css" href="../Views/source/jquery.fancybox.css?v=2.1.4" media="screen" />
	
	
		<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
		</script>
	
		<style type="text/css">
			.fancybox-custom .fancybox-skin {
				box-shadow: 0 0 50px #222;
			}
		</style>
	</head>
	<body class="single">
		<?php 
		require( 'Views/header.php');
		?>
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	    <!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			<!-- masthead -->
				<div class="masthead cf">
				<?php 
				$ano = strtok($e->fechaie, '-');
				$mes = strtok('-');
				$dia = strtok('-');
				$monthName = date("M", mktime(0, 0, 0, $mes, 1));
				?>
					<div class="circulito"><div class="dia"><?php echo $dia ?></div><div class="mes"><?php echo $monthName ?></div></div>
					<?php echo $e->nombre;
					
					
					?>
				</div><!-- ENDS masthead -->
				<!-- posts list -->
	        	<div id="posts-list" class="cf">        	
		        	<!-- Standard -->
					<?php  
						echo '<a class="fancybox" rel="group" href="../Views/images/'.$e->idevento.'.jpg">
							<img class="detallesimg" src="../Views/images/'.$e->idevento.'.jpg" height="270" width="596" alt="Feature image" />
							</a>';
							/*
									if($e->urlfacebook!=null)     
										echo '<a href="'.$e->urlfacebook.'"><img src="images/'.$e->idevento.'.jpg" height="270" width="596" alt="Feature image" /></a>';
									else if($e->paginaoficial!=null)
										echo '<a href="'.$e->urlfacebook.'"><img src="images/'.$e->idevento.'.jpg" height="270" width="596" alt="Feature image" /></a>';
									else if($e->urlfacebook==null) 
										echo '<img src="images/'.$e->idevento.'.jpg" height="270" width="596" alt="Feature image" />';
							*/
					?>
					<article class="format-standard">
						<div class="box cf">
							<!--<div class="entry-date"><div class="number">23</div><div class="month">JAN</div></div>-->
								<div class="meta">
									<!-- 2 cols -->
									<div class="one-half">
										<span class="user"><a href="#"><?php echo $e->nombreusuario ?> </a></span>
											<span class="money"><?php echo $e->precio ?></span>
											<span class="clock"><?php echo date('g:i a',strtotime($e->hora)); ?></span>
											<?php //<span class="comments">16 comments</span>
											echo '<span style="background: url(../Views/img/catego/'.$e->idtipoevento.'.png) no-repeat 0px 0px; background-size: 22px 22px">';
								 			echo '<a href="/categorias/'.$tipo->descripcion.'">'.$tipo->descripcion.'</a>';
										?></span>
									</div>
									<div class="one-half last">
										<h4>Contacto con el Evento</h4>
										<br>
										<?php 
											if($e->telefono!=0)
												echo '<span class="phone">'.$e->telefono.'</span>';
											else
												echo '<span class="phone">Sin telefono</span>';
										?>
										<span class="webpage"><a href="<?php echo $e->paginaoficial ?>"><?php echo $e->paginaoficial ?></a></span>
										<?php 
											if($e->urlfacebook!=null)
												echo '<span class="urlface"><a href="'.$e->urlfacebook.'">Evento en facebook</a></span>';
											if($e->urltwitter!=null)
												echo '<span class="urltw"><a href="http://twitter.com/'.$e->urltwitter.'">'.$e->urltwitter.'</a></span>';
										?>
									</div><!-- ENDS 2 cols -->
								</div>
								<div class="excerpt">
									<div class="post-heading" >Descripción</div>
									<div class="entry-content">
										<p><?php echo $e->descripcion;?></p>
									</div>
								</div>
							</div>
						</article><!-- ENDS  Standard -->
						<!-- comments list -->
						<div id="comments-wrap">
							<h4 class="heading">COMENTARIOS</h4>
							<?php 
								echo '<div class="fb-comments" data-href="http://eventaiser.com/evento/'.$id.'" data-num-posts="3" data-width="470"></div>';
							?>
						</div><!-- ENDS comments list -->
    				</div><!-- ENDS posts list -->
					<!-- sidebar -->
        			<aside id="sidebar">
        				<ul>
			        		<li class="block">
				        		<h4></h4>
				        		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Feventaiser&amp;width=292&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false&amp;appId=296468373786140" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:258px;" allowTransparency="true"></iframe>	
			        		</li>
	        				<li class="block">
		        				<h4>Localización del evento</h4>
				        		<span class="direccion"><?php echo $e->direccion ?></span>
				        		<span class="lugar"><?php echo $e->lugar ?></span>
				        		<div id="map" style="width: 300px; height: 400px"></div>
								<div id="mark" style="width: 20px; height: 35px"></div>
								<script type="text/javascript"> 
									var myOptions = {zoom: 16,center: new google.maps.LatLng(<?php echo $e->coordenadas;?>),
									mapTypeId: google.maps.MapTypeId.ROADMAP};
									
									var map = new google.maps.Map(document.getElementById("map"), myOptions);
	
	
									var marker = new google.maps.Marker({
									      position: new google.maps.LatLng(<?php echo $e->coordenadas;?>),
									      map: map,
									      title:"<?php echo $e->nombre.": ".$e->direccion;?>"
									  });
									//var marker = new google.maps.Map(document.getElementById("mark"), myOptions);
      							</script>  
	        				</li>
			        		<?php /******************* Falta div para las tags de os eventos
			        		<li class="block">
				        		<h4>Archives</h4>
								<ul>
									<li class="cat-item"><a href="#" title="title">January</a></li>
									<li class="cat-item"><a href="#" title="title">February</a></li>
									<li class="cat-item"><a href="#" title="title">March</a></li>
								</ul>
			        		</li>
			        		*/
			        		?>
        				</ul>
        			</aside><!-- ENDS sidebar -->
				</div><!-- ENDS WRAPPER -->
		</div><!-- ENDS MAIN -->
		<!-- FOOTER -->
		<?php include 'footer.php'; ?>
		<!-- ENDS FOOTER -->
	</body>
</html>