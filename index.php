<?php

include 'DB/db.php';
include_once 'Controllers/EventoController.php';
include_once 'Controllers/DefaultController.php';
include_once 'Controllers/CategoriaController.php';
include_once 'Controllers/CalendarioController.php';

include 'Models/Evento.php';
include 'Models/Tipoevento.php';
include 'Views/fechass.php';

$action=null;
$parameter=null;
if(isset($_GET['action']))
	$action=$_GET['action'];

if(isset($_GET['parameter']))
	$parameter=$_GET['parameter'];

//home controller
if($action==null||$action=='contacto'||$action=='inicio'){
	$controller = new HomeController();
	if($action=='contacto')
		$controller->contacto();	
	else 
		$controller->inicio();
}

//event controller
if($action=='crear'||$action=='evento'||$action=='all'||$action=='buscar'){
	$controller = new EventController();
	$id= $parameter;
	if($action=='crear')
		$controller->crear();
	else if($action=='evento')
		$controller->evento($id);
	else if($action=='all')
		$controller->all();
	else if($action=='buscar')
		$controller->buscar($parameter);
}

//categorias controller
if($action=='todas'||$action=='categoria'){
	$controller = new CategoriasController();
	$categoria= $parameter;
	if($action=='todas')
		$controller->all();
	else if($action=='categoria')
		$controller->categoria($categoria);
}


//calendar controller
if($action=='calendario'||$action=='mes'){
	$controller = new CalendarioController();
	$categoria= $parameter;
	$controller->all();
// 	if($action=='todas')
// 		$controller->all();
// 	else if($action=='categoria')
// 		$controller->categoria($categoria);
}

// $controller = new EventController();

// if (isset($_GET['action'])&&isset($_GET['parameter']))
//  	$controller->{$_GET['action']}($_GET['parameter']); 
// else if(isset($_GET['action']))
// 	$controller->{$_GET['action']}();
// else
// 	$controller->inicio();

	
//  $view = new View($controller, $model);
//  echo $view->output();
?>