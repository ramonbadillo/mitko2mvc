<?php

require_once 'php-activerecord/ActiveRecord.php';

class db 
{
	static function dbini(){
		ActiveRecord\Config::initialize(function($cfg)
		{
			 $cfg->set_model_directory('models');
		     $cfg->set_connections(array(
		    'development' => 'mysql://root:PB5wk9DG7FE6@localhost/eventaizer'));
		});
	}
}
?>
