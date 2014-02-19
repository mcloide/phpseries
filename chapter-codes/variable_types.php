<?php
 
// Scalar types
/**
* $stringType     = 'string';
* $integerType    = -10, 10;
* $floatType      = -10.9, 10.9;
* $booleanType    = TRUE, FALSE, 1, 0; // in this case 1 and 0 are also interpreted as boolean
**/

$stringType     = 'string';
$integerType    = 10;
$floatType      = -10.9;
$booleanType    = TRUE;
 
// Dynamic or compound types
 
$arrayType  = array();
$objectType = new DirectoryReader('./');
 
// Special types
 
$resourceType   = fopen('file.txt');
$nullType       = NULL;
 
// casting
 
$enforceInteger = '1000';
var_dump($enforceInteger);
// will output: string '1000' (length=4)
$enforceInteger = (int) $enforceInteger;
var_dump($enforceInteger);
// will output: int 1000
 
// php auto cast
 
$result = 9 + '9' - 1;
var_dump($result);
// will output: int 17
 
$result = 'The sum of 9 + 9 is ' . (9+9) . '!';
var_dump($result);
// will output: string 'The sum of 9 + 9 is 18!' (length=23)