<?php
function validates($username) {
	// for helping on the example, let's simply compare a string
	return ($username == 'admin');
}
 
if (empty($_POST) || empty($_POST['username']) || !validates('username', $_POST['username'])) {
	header('location: post_form.php?error=true');
} else {
	// only show the dashboard if all necessary requirements are correc	
	header('location: post_dashboard.php');
}
