<?php
include_once 'php-activerecord/ActiveRecord.php';
class Evento extends ActiveRecord\Model
{
	static $table_name = 'eventos';
	static $primary_key = 'idevento';

}
?>