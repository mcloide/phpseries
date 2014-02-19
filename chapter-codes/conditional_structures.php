<?php
if ( expression )
{
	// do what needs to be done
}
 
 
if ( expression ) {
	// do what you need to do
} else {
	// was not what you expected before, so do this now
}
 
 
$name = '';
if ($_POST['login'] == '') {
	$name = $_POST['login'];
} else {
	echo 'Error: Unable to log into the system. Wrong username.';
}
 
 
if (expression) {
	// do what you got do
} else if (another condition) {
	// do another thing
} else {
	// last condition
}
 
 
switch ($_POST['todaysDuties']) {
	case 'take garbage out': // consider the case as a if
		$need = true;
		break; // and always add a break, otherwise it will continue to the next statement
	case 'take dog to the vet':
	case 'give dog a bath': // here we are seeing 2 conditions set to the same action
		$need = false;
		break;
	default: // this is the default statement, or better know as else
		// do nothing
		break;
}
 
 
if ( ((!expression) && (expression)) || (expression)) {
	// do something
} else {
	// do something else
}
 
// shorthand
 
$variable = (expression) ? 'get this value' : 'get another value';
// this can be read as the variable will receive Ôget this valueÕ if the expression is true, else, it will Ôget another valueÕ
 
if (expression) {
	$variable = 'get this value';
} else {
	$variable = 'get another value';
}
 
// or preferrably
$variable = 'get another value';
if (expression) {
	$variable = 'get this value';
}
 
$variable = (expression) ? 'get this value' : (expression2) ? 'get another value' : 'get yet another value';
 
// this can be read as
if (expression) {
	$variable = 'get this value';
} else {
	if (expression2) {
		$variable = 'get another value';
	} else {
		$variable = 'get yet another value';
	}
}
 
// warning with shortand ifs
 
 
$cond = 'string';
if ($cond == 'string') {
	$cond = 'string2';
} else {
	$cond = 'string';
}
var_dump($cond);
 
$cond = 'string';
$cond = ($cond == 'string') ? 'string2' : 'string';
 
var_dump($cond);
 
$cond = 'string';
$cond = ($cond == 'string') ?: 'string2';
 
var_dump($cond);