<?php
include_once 'php-activerecord/ActiveRecord.php';
class Usuario extends ActiveRecord\Model
{	
	static $table_name = 'usuario';
	static $primary_key = 'nombreusuario';
	//static $has_many = array(
	//	array('eventos','class_name' => 'Evento')
	//);
}
?>