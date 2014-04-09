<?php
$xml = simplexml_load_file('states.xml');

// adding a new state child
$state = $xml->addChild('state', 'Texas');

// adding the abbreviation attribute on the newly created state
$state->addAttribute('abbreviation', 'TX');

// saving the xml file
$xml->asXML();

// open and save file
$handler = fopen('states.xml', 'w+');
fwrite($handler, $savedXML);
fclose($handler);

// now read the elements
$xml = simplexml_load_file('states.xml');
?>
<html>
	<body>
		<select id="states" name="states">
		<?php
		foreach($xml->children() as $state) {
			// getting the abbreviation
			$attributes = $state->attributes();
			?>
			<option value="<?php echo $attributes['abbreviation']; ?>"><?php echo (string) $state; // value from node ?></option>
			<?php
		}
		?>
		</select>
	</body>
</html>