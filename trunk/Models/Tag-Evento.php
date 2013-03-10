<?php
include_once 'php-activerecord/ActiveRecord.php';
class TagEvento extends ActiveRecord\Model
{
	static $table_name = 'tag-evento';
	static $primary_key = 'idevento';
}
?>