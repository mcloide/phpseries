<?php
// wrong
$1abc = 'string'; // this will throw a parser error
 
// correct
$_abc = 'string';
$abc = 'string';
 
// -----
 
$1234Variable = '123456';
$variable;
$variable = 'test';
 
// ------
 
$_1234Variable = '123456';
$variable = null;
$variable = 'test';
 
// ------
 
$variable = '123456';
$integerVariable = (int) $variable;
$floatVariable = (float) $variable;