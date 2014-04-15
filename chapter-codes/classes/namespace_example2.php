<?php
// script 1
namespace lib/sys;
 
class SystemClass {
  
   public $foo = 'bar';
  
   public function foobar() {
       return $this->foo;
   }
}
?>
 
<?php
// script 2
use lib/sys as NeoSystem;
 
$obj = new NeoSystem();
?>