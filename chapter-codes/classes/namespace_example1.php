<?php
// script 1
namespace ridiculous/long;
 
class NameClass {
  
   public $foo = 'bar';
  
   public function foobar() {
       return $this->foo;
   }
}
?>
 
<?php
// script 2
use ridiculous/long;
 
$obj = new NameClass();
?>