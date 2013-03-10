<?php
include_once 'php-activerecord/ActiveRecord.php';
class Tag extends ActiveRecord\Model
{
	static $table_name = 'tags';
	static $primary_key = 'idtag';
}
?>