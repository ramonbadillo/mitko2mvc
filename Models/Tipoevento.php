<?php

include_once 'php-activerecord/ActiveRecord.php';
class TipoEvento extends ActiveRecord\Model
{
	static $table_name = 'tipoevento';
	static $primary_key = 'idtipoevento';
	//static $has_many = array(
	//		array('eventos')
	//);
}
?>