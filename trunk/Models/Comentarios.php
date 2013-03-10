<?php
include_once 'php-activerecord/ActiveRecord.php';
class Comentario extends ActiveRecord\Model
{
	static $table_name = 'comentarios';
	static $primary_key = 'id';
	//static $belongs_to = array(
	//	array('usuario','class_name' => 'Usuario')
	//);
}
?>