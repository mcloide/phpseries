<?php

// be careful to not overwrite these variables
$dbConnection = array(
	'host' => 'localhost',
	'name' => 'testdb',
	'user' => 'mysql_user',
	'pass' => 'mysql_user_password',
	'options' => null
	/**
	'options' = array(
		// Setting the connection character set to UTF-8 prior to PHP 5.3.6
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);
	**/
);

$pdo = new PDO("mysql:host={$dbConnection['host']};dbname={$dbConnection['name']}", $dbConnection['user'], $dbConnection['pass'], $dbConnection['options']);