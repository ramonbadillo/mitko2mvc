<?php

class CategoriasController {
	private $tipos;
	private $eventosFooter;
	public function __construct() {
		$db= db::dbini();
		$this->tipos= TipoEvento::find('all', array('order' => 'descripcion asc'));
		$this->eventosFooter=Evento::find('all', array('order' => 'idevento desc','limit' => 3));
	}
	
	public function categoria($categoria){
	
		if($categoria!=null){
			TRY
			{
				$TipoEvento= TipoEvento::find('idtipoevento', array('conditions' => "descripcion LIKE '%".$categoria."%'"));
				//eventos que se van a desplegar 
				$events=Evento::find('all', array('conditions' => "fechaie >= NOW() and idtipoevento=".$TipoEvento->idtipoevento));
				$count= count($events);
				if($count>0){
					$eSlider=Evento::find('all', array('conditions' => "fechaie >= NOW() and idpaquete='2'" , 'limit' => 7 , 'order' => 'fechaie asc , hora asc'));
					$eventosFooter=$this->eventosFooter;
					$tipos=$this->tipos;

					$title=$categoria;
					require('Views/inicio.php');
				}
				else 
					//no se encontraron eventos de esa categoria poner un aviso
				    $this->all();
			}
			CATCH(Exception $e){
				$this->all();
			}
		}
		else
			$this->all();
	}
	
	public function all(){
		$eventosFooter=$this->eventosFooter;
		$tipos=$this->tipos;
		
		$u=Evento::find('all', array('conditions' => array('fechaie >= ?', date('Y-m-d')), 'order' => 'fechaie asc , hora asc'));
		$e=Evento::find('all', array('conditions' => array('fechaie >= ?', date('Y-m-d')), 'order' => 'IdTipoEvento asc'));
		$eve=Evento::find('all', array('conditions' => array('fechaie >= ?', date('Y-m-d')), 'order' => 'IdTipoEvento asc','group' => 'IdTipoEvento'));
		$title='Categorias';
		require('Views/categorias.php');
	}
}
?>