<?php
class DATABASE_CONFIG {

	public $test = array(
		'datasource' => 'Database/Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'bahaa',
		'password' => '123456',
		'database' => 'bahaa_classx_test',
		'encoding' => 'utf8'
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => 'localhost',
		'login' => 'bahaa',
		'password' => '123456',
		'database' => 'bahaa_classx',
		'encoding' => 'utf8'
	);
}
