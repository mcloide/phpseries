<?php
$sth = $dbh->prepare("SELECT name, color FROM fruit where `type` = :type");
$sth->execute(array('type' => 'citrus'));
 
/* Fetch all of the remaining rows in the result set */
$result = $sth->fetchAll();