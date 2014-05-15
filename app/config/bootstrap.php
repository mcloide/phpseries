<?php
/**
* Application Bootstrap
* Will handle sessions, class autoloaders, required libaries and any other logic required for starting the application
* 
*/

// starting the session
session_start();

// include configuration
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'config.php');

// instanciate PDO - $pdo
// check database.php to enter correct connection values
require_once(__DIR__ . DIRECTORY_SEPARATOR . 'database.php');

/**
 * Auto loader for classes
 *
 */
function __autoload($className) {
    if (!strpos($className, 'Class')) {
		throw new Exception('Failed to load the Class: ' . $className. ' - Invalid format or not existing class');
	}

	$classFile = CLASS_PATH . DIRECTORY_SEPARATOR . $className . 'Class.php';
	if (!file_exists($classFile)) {
		throw new Exception('Failed to load the Class: ' . $className. ' - Invalid format or not existing class');
	}

	require_once($classFile);
}