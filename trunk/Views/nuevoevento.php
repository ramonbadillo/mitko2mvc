<?php

		
		include 'DB/db.php';
		include 'Models/Evento.php';
		
	
		//session_start();
		//$usuario= $_SESSION["usuario"];
		//if($usuario==null)
			//header("Location:	index.php");

		$db= db::dbini();
		echo ''.$_POST["nombre"];
		$nombre= $_POST["nombre"];
		$fechaie= $_POST["fechaie"];
	 	$fechafe= $_POST["fechafe"];
		$hora= $_POST["hora"];
		$descripcion= $_POST["descripcion"];
		$idtipoevento= $_POST["idtipoevento"];
		$urlfacebook= $_POST["urlfacebook"];
		$fanpage= $_POST["fanpage"];
		$urltwitter= $_POST["urltwitter"];
		$telefono= $_POST["telefono"];
		$paginaoficial= $_POST["paginaoficial"];
		$viejascoordenadas= $_POST["coordenadas"];
		$coordenadas= substr($viejascoordenadas, 1, strlen($viejascoordenadas)-2);
		$lugar= $_POST["lugar"];
		$direccion= $_POST["direccion"];
		$precio= $_POST["precio"];


	
		
		$evento= new Evento();
		$evento->nombre=$nombre;
		$evento->fechaie=$fechaie;
		$evento->fechafe=$fechafe;
		$evento->hora=$hora;
		$evento->descripcion=$descripcion;
		$evento->idtipoevento=$idtipoevento;
		$evento->urlfacebook=$urlfacebook;
		$evento->fanpage=$fanpage;
		$evento->urltwitter=$urltwitter;
		$evento->telefono=$telefono;
		$evento->paginaoficial=$paginaoficial;
		$evento->coordenadas=$coordenadas;
		$evento->lugar=$lugar;
		$evento->direccion=$direccion;
		$evento->precio=$precio;
		$evento->nombreusuario="Admin";
		$evento->idpaquete=1;
		print_r($evento);
		//$evento->save();

		//header("Location:	crear.php");

		
		
		
		
		
		
?>