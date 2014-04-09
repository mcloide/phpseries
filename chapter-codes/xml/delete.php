<?php
$xml = simplexml_load_file('states.xml');

// deleting the newly created State of Texas
$xmlPosition = 0;
foreach ($xml->children() as $state) {
	++$xmlPosition;
	$attributes = $state->attributes();
	if ($attributes['abbreviation'] == 'TX') {
		break;
	}
}

// removing the item from the array
unset($xml->state[$xmlPosition]);

// save new xml
$savedXML = $xml->asXML();

// open and save file
$handler = fopen('states.xml', 'w+');
fwrite($handler, $savedXML);
fclose($handler);