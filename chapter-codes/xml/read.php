<html>
	<body>
		<?php $xml = simplexml_load_file('states.xml'); ?>
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