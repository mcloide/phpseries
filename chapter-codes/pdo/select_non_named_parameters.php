<?php
$sth = $dbh->prepare("SELECT name, color FROM fruit where `type` = ? and color = ?");
$sth->execute(array('citrus', 'green'));
 
/* Fetch all of the remaining rows in the result set */
$result = $sth->fetchAll();
 
/** The results above are different from the ones bellow **/
$sth->execute(array('green', 'citrus'));
 
/* Fetch all of the remaining rows in the result set */
$result = $sth->fetchAll();