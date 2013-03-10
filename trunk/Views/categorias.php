<!doctype html> 
<html class="no-js">
	<body>
		<?php 
		require( 'Views/header.php');
		?>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
				<!-- portfolio content-->
        		<div id="portfolio-content" class="cf">        	
					<ul id="filter-buttons">
					<?php 
						echo '<li><a href="#" data-filter="*" class="selected">TODOS ('.count($e).')</a></li>';
						for($r=0;$r<count($eve);$r++){
							$cat=TipoEvento::all($eve[$r]->idtipoevento);	
							$icat=0;
							for($c=0;$c<count($e);$c++){
								if($e[$c]->idtipoevento==$eve[$r]->idtipoevento)
									$icat++;
							}
							echo '<li><a href="#" data-filter=".'.$eve[$r]->idtipoevento.'">'.$cat->descripcion.''.' ('.$icat.')'.'</a></li>';
						}
					?>
					</ul>
					<!-- Filter container -->
					<div id="filter-container" class="cf">
						<?php $times= count($u);
							for($i=0;$i<$times;$i++){  
								strtok($u[$i]->fechaie, '-');
								$mes = strtok('-');
								$dia = strtok('-');
								$monthName = date("M", mktime(0, 0, 0, $mes, 1));
								echo '<figure class= "'. $u[$i]->idtipoevento .'">';
								echo '<figcaption>';
								echo '<div class="circulitoFigure"><div class="diaFigure">'. $dia .'</div><div class="mesFigure">'. $monthName.'</div></div>';
								echo '<a href="/evento/'.$u[$i]->idevento. '" class="heading"><h3>'.$u[$i]->nombre.'</h3></a>';
								echo '</figcaption>';
								echo '<a href="/evento/'.$u[$i]->idevento. '" class="thumb"> <img src="../Views/images/'.$u[$i]->idevento.'.jpg" /></a>';
								echo '</figure>';		
							} 
						?>
					</div><!-- ENDS Filter container -->
				</div><!-- ENDS featured -->
			</div><!-- ENDS WRAPPER -->			
		</div><!-- ENDS MAIN -->
		<!-- FOOTER -->
		<?php include 'footer.php'; ?>
		<!-- ENDS FOOTER -->
	</body>
</html>