<?php
function userDefinedPrint () {
	echo 'My first function and is not a hello world :)';
	return true;
}
 
 
function userDefinedPrint($whatINeedToPrint, $maybeThisToo = '') {
	echo $whatINeedToPrint;
	if (!empty($maybeThisToo)) {
		echo $maybeThisToo;
	}
	return true;
}
 
userDefinedPrint('my first functionÉ ');
/** this will output: my first functionÉ */
 
userDefinedPrint('my first functionÉ ' , 'yeayyyyy');
/** this will output: my first functionÉ yeayyyyy */
 
$referencedVariable = 0;
function increaseCounter(&$counter) {
	return ++$counter;
}
echo $referencedVariable; // will display 0
increaseCounter($referencedVariable);
echo $referencedVariable; // will display 1
 
// the same can be defined as:
 
 
$referencedVariable = 0;
function increaseCounter($counter) {
	return ++$counter;
}
echo $referencedVariable; // will display 0
increaseCounter($referencedVariable);
echo $referencedVariable; // will display 0
 
// if we want to display one
 
$referencedVariable = increaseCounter($referencedVariable);
echo $referencedVariable; // will display 1
 
// argument params
 
echo 'this is the string I want printed';
echo 'this is the', ' string ' , ' I want printed';
 
// but since we are talking about functions this is the same as
 
echo ('this is the string I want printed');
echo ('this is the', ' string ' , ' I want printed');
 
// concatenation and operations
 
echo 'this is the ', ( 1 + 1 ), ' argumented echo';
 
// or 
 
echo 'this is the '  . ( 1 + 1 )  . ' argumented echo';
 
 
// argumented function 
 
function emailBlaster() {
	$num_arguments = func_num_args();
	$email = func_get_arg(0);
	$subject = func_get_arg(1);
	$body = func_get_arg(2);
	if ($num_arguments > 1) {
		mail($email,$subject,$body);
	}
}
// you could use as well the func_get_args array;
emailBlaster('noemail@noemail.com','testing','this is the email body');
 
// comments
 
/**
 * emailBlaster function - will wrap the standard php mail function and send out an email to the selected recepient
 * 
 * @param string $email The recepient email
 * @param string $subject The subject of the email
 * @param string $body The body of the email
 * @return boolean
 */
function emailBlaster($email, $subject, $body) {
	if (empty($email)) {
		return false;
	}
	return mail($email,$subject,$body);
}
 
$sent = emailBlaster('noemail@noemail.com','testing','this is the email body');