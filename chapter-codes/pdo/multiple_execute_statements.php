<?php
$sth = $dbh->prepare("SELECT name, color FROM fruit where `type` = :type");
 
$types = array('citrus', 'berry', 'drupe');
foreach ($types as $type) {
   $sth->execute(array('type' => $type));
 
   echo 'Printing all ' . $type . ' fruits';
   $result = $sth->fetchAll();
   var_dump($result);
}