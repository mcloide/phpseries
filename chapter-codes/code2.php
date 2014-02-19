<!DOCTYPE html PUBLIC Ò-//W3C//DTD HTML 4.01//ENÓ Òhttp://www.w3.org/TR/html4/strict.dtdÓ>
<html>
<head>
	<title> A Server Side Application </title>
</head>
<body>
	<ul>
		<?php
			// donÕt worry about the code for now, just exemplifying the concept
			$menu = array('item1', 'item2', 'item3');
			foreach($menu as $index => $item) { ?>
				<li><?php echo $item; ?></li><?php
			} ?>
		</ul>
</body>
</html>