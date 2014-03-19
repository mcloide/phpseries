<?php
if (empty($_POST)) {
	// exit sooner than later
	header('location: form.php?error=1&type='.urlencode('Missing required params: username, password'));
}

$enabled = array('username', 'password');
$sanitize = array("'", '"');

foreach ($_POST as $index => &$value) {
	if (!in_array($index, $enabled)) {
		unset($_POST[$index]);
	}
	$value = str_replace($sanitize, array('',''), $value);
}

$md5Pass = md5('password');
$credentials = array('username' => 'admin', 'password' => $md5Pass); // just for the fun of it instead of using db, let's assume an array with creds

if (empty($_POST['username']) || empty($_POST['password'])) {
	header('location: form.php?error=1&type='.urlencode('Missing required params: username, password'));
}

if (!empty($_POST['username']) && $_POST['username'] !== $credentials['username']) {
	header('location: form.php?error=1&type='.urlencode('Invalid username. Please try again.'));
}

if (!empty($_POST['password']) && md5($_POST['password']) !== $credentials['password']) {
	header('location: form.php?error=1&type='.urlencode('Invalid password. Please try again.'));
}
?>
<html>
	<body>
		<div>
			<p>Hello <?php strtoupper($credentials['username']); ?> and welcome to your dashboard page.</p>
			<p>Available actions:</p>
			<ul>
				<li><a href="form.php?error=1&type=<?php echo urlencode('You have been successfully logged out!'); ?>">Logout</a></li>
			</ul>
		</div>
	</body>
</html>