<html class="no-js">
	<body class="home">
		<?php 
		require( 'Views/headerSlider.php');
		?>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
				<div id="fb-root"></div>
				<div class="fb-like" data-href="https://www.facebook.com/Eventaiser" data-send="false" data-width="360" data-show-faces="true" ></div>
				<!-- featured -->
				<div class="home-featured">
					<!-- Filter container -->
					<div id="filter-container" class="cf">
					<?php
						$times= count($events);
						for($i=0;$i<$times;$i++){
							strtok($events[$i]->fechaie, '-');
							$mes = strtok('-');
							$dia = strtok('-');
							$monthName = date("M", mktime(0, 0, 0, $mes, 1));
							echo '<figure class= "">';
							echo '<figcaption>';
							echo '<div class="circulitoFigure"><div class="diaFigure">'. $dia .'</div><div class="mesFigure">'. $monthName.'</div></div>';
							echo '<a href="/evento/'.$events[$i]->idevento. '" class="heading"><h3>'.$events[$i]->nombre.'</h3></a>';
							echo '</figcaption>';
							echo '<a href="/evento/'.$events[$i]->idevento. '" class="thumb"> <img src="../Views/images/'.$events[$i]->idevento.'.jpg" /></a>';
							echo '</figure>';
						} 
					?>
					</div><!-- ENDS Filter container -->
				</div><!-- ENDS featured -->
			</div><!-- ENDS WRAPPER -->
		</div><!-- ENDS MAIN -->
		<!-- FOOTER -->
		<?php 
		include 'Views/footer.php';
		?>
		<!-- ENDS FOOTER -->
	</body>
</html>
