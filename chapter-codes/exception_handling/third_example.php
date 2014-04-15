<?php
 
function fuits($fruits = array()) {
   try{
       /* Begin a transaction, turning off autocommit */
       $dbh->beginTransaction();
      
       /* Insert multiple records on an all-or-nothing basis */
       $sql = 'INSERT INTO fruit (name, colour, calories) VALUES (?, ?, ?)';
       $sth = $dbh->prepare($sql);
 
       foreach ($fruits as $fruit) {
           $sth->execute(array(
               $fruit['name'],
               $fruit['colour'],
               $fruit['calories'],
           ));
       }
      
       /* Commit the changes */
       $dbh->commit();
      
       /* Database connection is now back in autocommit mode */
   } catch (Exception $e1) {
       error_log('Exception thrown: ' . $e->message, 0);
 
       /* rollback the changes */
       $dbh->rollback();
   }
   return false;
}