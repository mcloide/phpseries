<?php
	$xml = simplexml_load_file('states.xml');
	
	$node = $xml->xpath('//state[@abbreviation=\'IN\']');
	echo $node[0]; // will print Indiana
	$attr = $node[0]->attributes();
	echo $attr['abbreviation']; // will print IN
	
	// to avoid the use of the 0 index you can do use the children() method