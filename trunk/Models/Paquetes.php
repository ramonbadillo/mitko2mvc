<?php

include_once 'php-activerecord/ActiveRecord.php';
class Paquete extends ActiveRecord\Model
{
	static $table_name = 'paquetes';
	static $primary_key = 'idpaquete';
	//static $has_many = array(
	//		array('eventos')
	//);
}
?>