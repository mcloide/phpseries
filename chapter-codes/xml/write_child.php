<?php
$xml = simplexml_load_file('states.xml');

// adding a new state child
$state = $xml->addChild('state', 'Texas');

// adding the abbreviation attribute on the newly created state
$state->addAttribute('abbreviation', 'TX');

// adding a new child into the state of texas - city
$city = $state->addChild('city', 'Austin');

// adding an attribute of capital to Austin
$city->addAttribute('capital', 'yes');

// adding a new children into the state of texas - cities
$state->addChild('city', 'Houston');
$state->addChild('city', 'San Antonio');
$state->addChild('city', 'Laredo');

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
		<table id="states">
			<tr>
				<th>Abbreviation</th>
				<th>Name</th>
				<th>Cities</th>
			</tr>
		<?php
		foreach($xml->children() as $state) {
			// getting the abbreviation
			$attributes = $state->attributes();
			?>
			<tr>
				<td><?php echo $attributes['abbreviation']; ?></td>
				<td><?php echo (string) $state; // value from node ?></td>
				<td>
					<?php
					foreach($state->children() as $city) {
						$attr = $state->attributes();
						echo (string)$city; ?> - <?php echo !empty($attr['capital']) ? 'Capital' : ''; ?> <br /><?php
					}
					?>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
	</body>
</html>