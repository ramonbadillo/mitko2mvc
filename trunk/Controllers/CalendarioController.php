<?php

//include 'Views/fechass.php';
class CalendarioController {
	private $tipos;
	private $eventosFooter;
	public function __construct() {
		$db= db::dbini();
		$this->tipos= TipoEvento::find('all', array('order' => 'descripcion asc'));
		$this->eventosFooter=Evento::find('all', array('order' => 'idevento desc','limit' => 3));
	}
	
	public function mes($mes){
	
	}
	
	public function mesYanio($mes, $year){
		
	}
	public function all(){
		
		$month= date("n");
		$year=date("Y");
		$month='Marzo';
		
		$eventosFooter=$this->eventosFooter;
		$tipos=$this->tipos;
		
		require('Views/calendar.php');
	}
}
?>