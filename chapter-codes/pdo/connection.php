<?php
// Let's assume that the following variable are part of our bootstrap.php file
 
$db = arary(
    'host' => 'localhost',
    'db' => 'test',
    'user' => 'my_user',
    'password' => 'user_pass'
);
 
?>
 
<?php
// now let's connect with the database
try {
    $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname='. $db['db'], $db['user'], $db['password']);
} catch (PDOException $e) {
    echo 'Failed to connect to the database. Please check the connection details.';
    error_log($e->getMessage() . ' - trace ' . json_encode($e->getTrace()); // saving the error on the log
}