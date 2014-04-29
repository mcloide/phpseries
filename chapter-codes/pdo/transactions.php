<?php
try{
	/* Begin a transaction, turning off autocommit */
	$dbh->beginTransaction();
	$sth = $dbh->prepare('INSERT INTO fruit (name, colour, calories) VALUES (:name, :color, :type)');
	
	foreach ($fruits as $fruit) {
		$sth->execute(array(
			'name' => $fruit->name,
			'color' => $fruit->color,
			'type' => $fruit->type,
		));
	}

	/* Commit the changes */
	$dbh->commit();	
	/* Database connection is now back in autocommit mode */	
} catch (Exception $e) {
	/* Recognize mistake and roll back changes */
	$dbh->rollBack();
}