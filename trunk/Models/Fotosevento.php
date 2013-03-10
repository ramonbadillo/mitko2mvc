<?php
include_once 'php-activerecord/ActiveRecord.php';
class Fotosevento extends ActiveRecord\Model
{
	static $table_name = 'fotosevento';
	static $primary_key = 'idevento';
	
	//static $belongs_to = array(
	//     array('evento')
	//);
}
?>