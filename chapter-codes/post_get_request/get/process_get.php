<?php
	$showMsg = $_GET['showmsg'];
	$msg = $_GET['msg'];
?>
<html>
<body>
	<p>
	<?php
        if ($showMsg) {
            echo $msg;
        }
		// the equivalent to this is echo ($showMsg) ? $msg : '';
	?>
	</p>
</body>
</html>