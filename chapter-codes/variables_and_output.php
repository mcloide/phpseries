<!DOCTYPE html PUBLIC Ò-//W3C//DTD XHTML 1.0 Transitional//ENÓ Òhttp://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtdÓ>
<html>
<head>
	<title>Page Title</title>
	<!Ð other head data such as CSS styling and JS scripts Ð>
</head>
<body>
	<p>
		<?php
			$_string = 'This is a string';
			$_interger = 7; // for luck
			$_boolean = TRUE; // it could also be FALSE, 1 or 0
			$_array = array($_string,$_interger,$_boolean);
 
			echo $_string . '<br />';
			// this can be also done whithout concatenation by closing the PHP tag, placing the
		    // br tag on place and opening again if needed to continue with the PHP script Ð look bellow
 
    		print $_interger . '<br />';
    		print ($_boolean . '<br />');
 
        	 ?>
        	<pre><?php
        		print_r($_array);
        	?></pre>
    </p>
    <p>
    	<strong>Will output</strong><br />
    	<pre>
	This is a string<br />
	7<br />
	1<br />
	Array<br />
	(<br />
	    [0] => This is a string<br />
	    [1] => 7<br />
	    [2] => 1<br />
	)<br />
    	</pre>
    </p>
</body>
</html>