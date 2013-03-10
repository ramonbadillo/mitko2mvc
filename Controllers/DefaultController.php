<?php

class HomeController {
	private $tipos;
	private $eventosFooter;
	public function __construct() {
		$db= db::dbini();
		$this->tipos= TipoEvento::find('all', array('order' => 'descripcion asc'));
		$this->eventosFooter=Evento::find('all', array('order' => 'idevento desc','limit' => 3));
	}
	
	public function inicio(){
		$eSlider=Evento::find('all', array('conditions' => "fechaie >= NOW() and idpaquete='2'" , 'limit' => 7 , 'order' => 'fechaie asc , hora asc'));
		
		//eventos que se van a desplegar
		$events=Evento::find('all', array('conditions' => array('fechaie >= ?', date('Y-m-d')), 'limit' => 7 , 'order' => 'fechaie asc , hora asc'));
		
		$eventosFooter=$this->eventosFooter;
		$tipos=$this->tipos;
		require('Views/inicio.php');
	}
	
	public function contacto(){
		$eventosFooter=$this->eventosFooter;
		$tipos=$this->tipos;
    	$title='Contacto';
		require('Views/contacto.php');
	}

}
?>