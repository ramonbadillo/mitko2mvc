<footer>
	<div class="wrapper cf">
		<!-- widgets -->
		<ul  class="widget-cols cf">
			<li class="first-col">
				<div class="widget-block">
					<h4>EVENTOS RECIENTES</h4>
					<?php 
						$times= count($eventosFooter);
						for($i=0;$i<$times;$i++){  
							echo '<div class="recent-post cf">';
							echo ' <a href="#" class="thumb"  ><img id="thumbs54" style="width:54px;height: 54px;" src="../Views/images/'.$eventosFooter[$i]->idevento.'.jpg" alt="Post" /></a>';
							echo ' <div class="post-head">';
							echo ' <a href="/evento/'.$eventosFooter[$i]->idevento. '">'.$eventosFooter[$i]->nombre.'</a><span>'.$eventosFooter[$i]->fechaie.'</span>';
							echo '</div>';
							echo ' </div>';
						} 
					?>
				</div>
			</li>
			<li class="second-col">
				<br>
			</li>
			<li class="third-col">
				<div class="widget-block">
					<h4>CATEGORIAS</h4>
					<ul>
					<?php 
						for($i=0;$i<7;$i++)
							echo '<li class="cat-item"><a href="/categorias/'.$tipos[$i]->descripcion.'"><span>'.$tipos[$i]->descripcion.'</span></a></li>';
					?>
					</ul>
				</div>
		    </li>
			<li class="fourth-col">
				<div class="widget-block">
					<h4>ACERCA DE</h4>
					<p>Eventaiser es un sitio donde puedes encontrar los proximos eventos cerca de tu ciudad <a href="/contacto" tar >contactanos</a>.</p>
				</div>
		    </li>	
		</ul><!-- ENDS widgets -->	
		<!-- bottom -->
		<div class="footer-bottom">
			<div class="left">by <a href="http://www.eventaiser.com" >eventaiser</a></div>
		</div><!-- ENDS bottom -->
	</div>
</footer>