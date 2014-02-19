<?php
$newArray = array();
// or
$newArray = [];
 
// not needed delcarations
$arrOne = [];
$arrTwo = [];
 
if ($condition === true) {
  $arrOne[] = 'new value';
}
 
// correct way
if ($condition === true) {
  $arrOne = ['new value']; // or $arrOne = array('new value')
}
 
// multi array
$multi = array();
$multi[] = array();
$multi[0][] = array();
$multi[0][0] = 'the final value';
 
// or 
$multi = [];
$multi[] = [];
$multi[0][] = [];
$multi[0][0] = 'the final value';
 
// or 
$multi = array(array(array('the final value')));
 
// or 
$multi = [[['the final value']]];
 
// ----
 
$associativeArray = array();
$associativeArray['first_name'] = 'John';
$associativeArray['last_name'] = 'Smith';
 
// usually while working with database you would dynamically set the array in a for loop
 
$commonArray = array();
$commonArray[] = 'John'; // or $commonArray[0] = 'John'
$commonArray[] = 'Smith';
 
// ----
 
echo $associativeArray['first_name']; // will display John
 
// ----
 
echo $commonArray[0]; // will display John
 
// ---
 
$_SESSION['cart_list'] = $arrayOfShoppingCartList; // a pre-existing array with all the current user selected products and itÕs quantity.
 
// ----
?>
<pre>
	<?php
		$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
		print_r ($a);
	?>
</pre>
 
Array
(
	[a] => apple
	[b] => banana
	[c] => Array
	(
		[0] => x
		[1] => y
		[2] => z
	)
)
<?php
// ---- 
 
list('fname', 'lname', 'zip', 'country') = array('John', 'Smith', 33065, 'USA');