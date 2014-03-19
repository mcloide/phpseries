<?php
// some sanitization
$enabled = array('error', 'type'); // will match whatever is passed on the $_GET array against these enabled params
$sanitize = array("'", '"');

$get = $_GET;
foreach ($_GET as $param => &$value) {
	if (!in_array($param, $enabled)) {
		unset($_GET[$param]);
	}
	$value = str_replace($sanitize, array('',''), $value);
}
?>
<html>
<body>
	<?php if (!empty($_GET['error'])): ?>
		<ul>
			<li><?php echo sprintf('Please enter a value for %', $_GET['type']); ?></li>
		</ul>
	<?php endif; ?>
	<form method="post" action="process.php">
		<input type="text" name="username" value="" /><br />
		<input type="password" name="password" value="" /><br />
		<input type="submit" name="submit" value="Login" />
	</form>
</body>
</html>