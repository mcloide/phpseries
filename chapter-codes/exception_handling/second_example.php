<?php
 
function foo($bar = 'bar') {
   try{
       try {
           if (empty($bar)) {
               throw new Exception('Please enter a value for $bar');
           }
          
           if ($bar != 'bar') {
               throw new Exception('Not expected value');
           }
          
           return 'foo' . $bar;
       } catch (Exception $e) {
           error_log('Exception thrown: ' . $e->message, 0);
           return false;
       }
   } catch (Exception $e1) {
       error_log('Exception thrown: ' . $e->message, 0);
       return 'oops';
   }
}