<?php
$sth = $dbh->prepare("SELECT name, color FROM fruit where `type` = :type");
 
$types = array('citrus', 'berry', 'drupe');
foreach ($types as $type) {
   $sth->execute(array('type' => $type));
 
   echo 'Printing all ' . $type . ' fruits';
   $result = $sth->fetchAll();
   var_dump($result);
}

/** INSERTS **/

$sth = $dbh->prepare("INSERT INTO fruits VALUES (:name, :color, :type)");
 
$fruits = array(
	array('name' => 'lemon', 'color' => 'green', 'type' => 'citrus'),
	array('name' => 'orange', 'color' => 'orange', 'type' => 'citrus'),
	array('name' => 'pinaple', 'color' => 'yellow', 'type' => '????'), // the type you eat, I guess
);
foreach ($fruits as $fruit) {
   $sth->execute($fruit); 
}

$sth = $dbh->prepare('SELECT * FROM fruits WHERE type IN (:type)');
$sth->execute(array('type' => 'citrus,????'));

echo 'Printing inserted fruits';
$result = $sth->fetchAll();
var_dump($result);