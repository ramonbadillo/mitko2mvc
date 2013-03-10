<html class="no-js">
	<body class="blog">
		<?php 
		require( 'Views/header.php');
		?>
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
				<!-- posts list -->
	        	<div id="posts-list" class="cf">        	
		        	<!-- Image -->
		        	<?php 
			        	$times= count($u);
			        	for($i=0;$i<$times;$i++){
							strtok($u[$i]->fechaie, '-');
							$mes = strtok('-');
							$dia = strtok('-');
							$monthName = date("M", mktime(0, 0, 0, $mes, 1));
							echo '<article class="format-image">';
								echo '<div class="feature-image">';
								$tipo=TipoEvento::find($u[$i]->idtipoevento);
									//echo '<a href="img/dummies/slides/01.jpg" data-rel="prettyPhoto">';
										echo '<a href="/evento/'.$u[$i]->idevento. '"><img style="width:940px;height: 367px;" src="../Views/images/'.$u[$i]->idevento.'.jpg" alt="Alt text" />';
								
									echo '</a>';
								echo '</div>';
								echo '<div class="box cf">';
									echo '<div class="entry-date"><div class="number">'.$dia.'</div><div class="month">'. $monthName.'</div></div>';
									
									echo '<div class="excerpt">';
										echo '<a href="/evento/'.$u[$i]->idevento. '" class="post-heading" >'.$u[$i]->nombre.'</a>';
										echo '<p>'.$u[$i]->descripcion. '</p>';
									echo '</div>';
									
									echo '<div class="meta">';
										echo '<span class="user"><a href="#">'.$u[$i]->nombreusuario.'</a></span>';
										echo '<span class="money">'.$u[$i]->precio.'</span>';
										echo '<span class="clock">'.date('g:i a',strtotime($u[$i]->hora)).'</span>';
										echo '<span style="background: url(../Views/img/catego/'.$u[$i]->idtipoevento.'.png) no-repeat 0px 0px; background-size: 22px 22px">';
										 
										
										echo '<a href="/categorias/'.$tipo->descripcion.'">'.$tipo->descripcion.'</a>';
										echo '</span>';
										
									echo '</div>';
										
								echo '</div>';
								echo '</article>';
						}
					?>
					<!-- ENDS Image -->
		       </div><!-- ENDS posts list -->
				<!-- sidebar -->
        		<aside id="sidebar">
	        		<ul>
		        		<li class="block">
		        			<h4>Categorias</h4>
							<ul>
								<?php 
									$u=Evento::find('all', array('conditions' => array('fechaie >= ?', date('Y-m-d')), 'order' => 'fechaie asc , hora asc'));
									$e=Evento::find('all', array('conditions' => array('fechaie >= ?', date('Y-m-d')), 'order' => 'IdTipoEvento asc'));
									$eve=Evento::find('all', array('conditions' => array('fechaie >= ?', date('Y-m-d')), 'order' => 'IdTipoEvento asc','group' => 'IdTipoEvento'));
									for($r=0;$r<count($eve);$r++){
										$cat=TipoEvento::all($eve[$r]->idtipoevento);	
										$icat=0;
										for($c=0;$c<count($e);$c++){
												
											if($e[$c]->idtipoevento==$eve[$r]->idtipoevento)
												$icat++;
											
										}
										echo '<li class="cat-item"><a href="#" title="'.$cat->descripcion.'">'.$cat->descripcion.'<span class="post-counter">'.'('.$icat.')'.'</span></a></li>';
									}
								?>
							</ul>
	        			</li>
	        		</ul>
        		</aside><!-- ENDS sidebar -->
			</div><!-- ENDS WRAPPER -->
		</div><!-- ENDS MAIN -->
		<!-- FOOTER -->
		<?php include 'footer.php'; ?>
		<!-- ENDS FOOTER -->
	</body>
</html>