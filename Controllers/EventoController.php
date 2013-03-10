<?php

class EventController {
//private $model; 
    private $tipos;
    private $eventosFooter;
    public function __construct() { 
        $db= db::dbini();
        $this->tipos= TipoEvento::find('all', array('order' => 'descripcion asc'));
        $this->eventosFooter=Evento::find('all', array('order' => 'idevento desc','limit' => 3));
    } 
    
    public function crear(){
    	$eventosFooter=$this->eventosFooter;
    	$tipos=$this->tipos;
    	$title='nuevo evento';
    	require('Views/crear.php');
    }
    
    public function evento($id){
    	if($id==null)
    		header( 'Location:/' );
		else {
			$intId=intval($id);
			if($intId!=0){
				$e=null;
				TRY{
					$e=Evento::find($intId);
					$tipo=TipoEvento::find($e->idtipoevento);
					$eventosFooter=$this->eventosFooter;
					$tipos=$this->tipos;
    				$title=$e->nombre;
					require('Views/single.php');
				}
				CATCH(Exception $s){
					//if not found add default page
					header( 'Location:/' );
				}
			}
			else
 				$this->buscar($id);			
		}
    }
    
    public function buscar($parameter){
    	if($parameter==null)
    		header( 'Location:/' );
    	else {
    		//buscar evento 
    		TRY{
    			$u=Evento::find('all', array('conditions' => "fechaie >= NOW() and (nombre LIKE '%".$parameter."%'
																or descripcion LIKE '%".$parameter."%'
																or lugar LIKE '%".$parameter."%'
																or nombreusuario LIKE '%".$parameter."%'
															    or direccion LIKE '%".$parameter."%' )", 'order' => 'fechaie asc , hora asc'));
    			//si se encontraron eventos
    			if($u!=null){
    				$eventosFooter=$this->eventosFooter;
    				$tipos=$this->tipos;
    				$month= date("m");
    				$year=date("Y");
    				$title='Eventaiser';
    				require('Views/buscar.php');
    			}
    			//no se encontro ningun evento
    			else
    				//if not found add default page
    				header( 'Location:/' );
    		}
    		CATCH(Exception $e){
				//if not found add default page
    			header( 'Location:/' );
    		}
    	}
    }
    
    public function all(){
    	TRY{
    		$u=Evento::all();
    		//si se encontraron eventos
    		if($u!=null){
    			$eventosFooter=$this->eventosFooter;
    			$tipos=$this->tipos;
    			$month= date("m");
    			$year=date("Y");
    			$title='Eventaiser';
    			require('Views/buscar.php');
    		}
    		//no se encontro ningun evento
    		else
    			//if not found add default page
    			header( 'Location:/' );
    	}
    	CATCH(Exception $e){
    		//if not found add default page
    		header( 'Location:/' );
    	}
    }
}
?>